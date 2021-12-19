<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Multipart;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function profile(Request $request){
        return $this->responseSuccess(auth()->user());
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'confirmed',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseFailed($validator->errors()->first());
        }

        $data = $request->all();
        $data['password'] = $request->password ? bcrypt($request->password) : auth()->user()->password;
        // $data['foto'] = $request->foto ? Multipart::imageUpload($request->foto) : auth()->user()->foto;

        auth()->user()->update($data);
        return $this->responseSuccess('OK');
    }
}
