<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use Mail;
use Multipart;
use App\Models\User;
use App\Models\Pengaturan;
use App\Models\PaketWisata;
use App\Models\KategoriPaketWisata;
use Illuminate\Support\Facades\Crypt;

class FrontendController extends Controller
{
    public function register(){
        return view('frontend.register');
    }

    public function storeRegister(Request $request){
        $this->validate($request,[
            'email' => 'unique:users'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        if($request->image){
            $data['image'] = Multipart::imageUpload($request->image);
        }

        User::create($data);
        Mail::send('frontend.email-verifikasi-akun', ['token' => Crypt::encryptString($data['email'])],
            function ($message) use ($data)
            {
                $message->subject('[VERIFIKASI AKUN]');
                $message->from(env('MAIL_USERNAME'), 'Avanturista.xyz');
                $message->to($data['email']);
            }
        );
        return redirect()->route('login')->with('success', 'Berhasil registrasi. silahkan cek email untuk verifikasi akun');
    }

    public function verifikasiAkun($token){
        User::whereEmail(Crypt::decryptString($token))->update(['email_verified_at' => date('Y-m-d H:i:s')]);
        return 'Anda berhasil verifikasi akun. Terima kasih.';
    }

    public function home(){
        return view('frontend.home');
    }

    public function kategoriPaket($slug){
        return view('frontend.kategori-paket', [
            'item' => KategoriPaketWisata::whereSlug($slug)->first(),
            'items' => PaketWisata::whereKategoriPaketWisataId(KategoriPaketWisata::whereSlug($slug)->first()->id)->latest()->get()
        ]);
    }

    public function detailPaketWisata($slug){
        return view('frontend.paket-wisata', [
            'item' => PaketWisata::whereSlug($slug)->first()
        ]);
    }

    public function profile(){
        return view('frontend.profile');
    }

    public function updateProfile(Request $request){
        $item = User::find(auth()->user()->id);
        $data = $request->all();
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }else{
            $data['password'] = $item->password;
        }
        if($request->image){
            $data['image'] = Multipart::imageUpload($request->image);
        }else{
            $data['image'] = $item->image;
        }
        $item->update($data);
        return redirect()->back()->with('success', 'Berhasil mengubah data');
    }
}
