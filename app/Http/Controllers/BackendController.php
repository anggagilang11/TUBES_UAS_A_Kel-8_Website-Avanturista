<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use Multipart;
use App\Models\User;
use App\Models\Pengaturan;
use App\Models\PaketWisata;
use App\Models\KategoriPaketWisata;
use Illuminate\Support\Str;

class BackendController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard', [
            'pelanggan' => User::whereRole(IS_CUSTOMER)->count(),
            'kategori_paket_wisata' => KategoriPaketWisata::count(),
            'paket_wisata' => PaketWisata::count(),
        ]);
    }

    public function indexProfile(){
        return view('backend.profile');
    }

    public function UpdateProfile(Request $request){
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

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    ### PELANGGAN ###

    public function indexPelanggan(){
        return view('backend.pelanggan.index', [
            'items' => User::whereRole(IS_CUSTOMER)->latest()->get()
        ]);
    }

    public function createPelanggan(){
        return view('backend.pelanggan.create');
    }

    public function storePelanggan(Request $request){
        $this->validate($request,[
            'email' => 'unique:users'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        if($request->image){
            $data['image'] = Multipart::imageUpload($request->image);
        }
        User::create($data);
        return redirect()->route('backend.pelanggan')->with('success', 'Berhasil menambahkan data');
    }

    public function editPelanggan($id){
        return view('backend.pelanggan.edit', [
            'item' => User::find($id)
        ]);
    }

    public function updatePelanggan(Request $request, $id){
        $data = $request->all();
        $item = User::find($id);
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
        return redirect()->route('backend.pelanggan')->with('success', 'Berhasil mengubah data');
    }

    public function deletePelanggan($id){
        $item = User::find($id);
        $item->email = $item->email.'.delete';
        $item->save();
        $item->delete();
        return redirect()->route('backend.pelanggan')->with('success', 'Berhasil menghapus data');
    }

    
    public function pdfPelanggan(){
        $pdf = PDF::loadView('backend.pelanggan.pdf', [
            'items' => User::whereRole(IS_CUSTOMER)->get(),
        ]);
        return $pdf->setPaper('a4', 'landscape')->download('Data Pelanggan.pdf');
    }

    ### KATEGORI PAKET ###

    public function indexKategoriPaket(){
        return view('backend.kategori-paket.index', [
            'items' => KategoriPaketWisata::latest()->get()
        ]);
    }

    public function createKategoriPaket(){
        return view('backend.kategori-paket.create');
    }

    public function storeKategoriPaket(Request $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        KategoriPaketWisata::create($data);
        return redirect()->route('backend.kategori-paket')->with('success', 'Berhasil menambahkan data');
    }

    public function editKategoriPaket($id){
        return view('backend.kategori-paket.edit', [
            'item' => KategoriPaketWisata::find($id)
        ]);
    }

    public function updateKategoriPaket(Request $request, $id){
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $item = KategoriPaketWisata::find($id);
        $item->update($data);
        return redirect()->route('backend.kategori-paket')->with('success', 'Berhasil mengubah data');
    }

    public function deleteKategoriPaket($id){
        $item = KategoriPaketWisata::find($id);
        $item->delete();
        return redirect()->route('backend.kategori-paket')->with('success', 'Berhasil menghapus data');
    }

    ### PAKET WISATA ###

    public function indexPaketWisata(){
        return view('backend.paket-wisata.index', [
            'items' => PaketWisata::latest()->get()
        ]);
    }

    public function createPaketWisata(){
        return view('backend.paket-wisata.create', [
            'items' => KategoriPaketWisata::latest()->get()
        ]);
    }

    public function storePaketWisata(Request $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        if($request->image){
            $data['image'] = Multipart::imageUpload($request->image);
        }
        PaketWisata::create($data);
        return redirect()->route('backend.paket-wisata')->with('success', 'Berhasil menambahkan data');
    }

    public function editPaketWisata($id){
        return view('backend.paket-wisata.edit', [
            'item' => PaketWisata::find($id),
            'items' => KategoriPaketWisata::latest()->get()
        ]);
    }

    public function updatePaketWisata(Request $request, $id){
        $data = $request->all();
        $item = PaketWisata::find($id);
        $data['slug'] = Str::slug($request->nama);
        if($request->image){
            $data['image'] = Multipart::imageUpload($request->image);
        }else{
            $data['image'] = $item->image;
        }
        $item->update($data);
        return redirect()->route('backend.paket-wisata')->with('success', 'Berhasil mengubah data');
    }

    public function deletePaketWisata($id){
        $item = PaketWisata::find($id);
        $item->delete();
        return redirect()->route('backend.paket-wisata')->with('success', 'Berhasil menghapus data');
    }

    ### PENGATURAN ###

    public function indexPengaturan(){
        return view('backend.pengaturan', [
            'item' => Pengaturan::first()
        ]);
    }

    public function updatePengaturan(Request $request){
        $data = $request->all();
        $item = Pengaturan::first();
        $item->update($data);
        return redirect()->route('backend.pengaturan')->with('success', 'Berhasil mengubah data');
    }
}
