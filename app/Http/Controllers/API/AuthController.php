<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;
use JWTAuth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        return $this->responseSuccess(JWTAuth::fromUser($user));
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        if($token = JWTAuth::attempt($request->only('email', 'password'))){
            return $this->responseSuccess($token);
        }else{
            return $this->responseFailed('Email atau password anda salah');
        }
    }

    public function forgotPassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        $user = User::whereEmail($request->email)->first();
        if($user){
            $email = $user->email;
            $password = strtoupper(Str::random(6));
            $user->update(['password' => bcrypt($password)]);
            // $code = mt_rand(1000, 9999);
            // $user->update(['verification_code' => $code]);

            Mail::send('forgot-password', ['password' => $password],
                function ($message) use ($email)
                {
                    $message->subject('[FORGOT PASSWORD]');
                    $message->from(env('MAIL_USERNAME'), 'APP NAME');
                    $message->to($email);
                }
            );

            return $this->responseSuccess('OK');
        }else{
            return $this->responseFailed('Email tidak terdaftar');
        }
    }

    public function checkVerificationCode(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'code' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        $user = User::whereEmail($request->email)->first();
        if($user){
            if($user->verification_code == $request->code){
                $user->update(['verification_code' => null]);
                return $this->responseSuccess('OK');
            }else{
                return $this->responseFailed(false);
            }
            return $this->responseSuccess(null);
        }else{
            return $this->responseFailed('Email tidak terdaftar');
        }
    }

    public function updatePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'confirmed'
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        $data = $request->all();
        $user = User::whereEmail($data['email'])->first();
        if($user){
            $data['password'] = bcrypt($data['password']);
            $user->update($data);
            return $this->responseSuccess('OK');
        }else{
            return $this->responseFailed('Email tidak terdaftar');
        }
    }
}
