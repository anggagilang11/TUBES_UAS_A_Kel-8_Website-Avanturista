@extends('layouts.frontend.master')

@section('content')
    <main class="main account">
        <div class="page-content mt-4 mb-10 pb-6">
            <div class="container">
                <div class="tab tab-vertical gutter-lg">
                    <div class="tab-content col-lg-12 col-md-8">
                        <div class="tab-pane active" id="account">
                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <center>
                                    <img src="{{ auth()->user()->image ? asset('photo/'.auth()->user()->image) : asset('photo/user.png') }}" style="height: 150px; border-radius: 10px;"><br><br>
                                </center>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Nama *</label>
                                        <input type="text" style="border-radius: 10px;" class="form-control" name="name" value="{{ auth()->user()->name }}" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email *</label>
                                        <input type="text" style="border-radius: 10px;" class="form-control" name="email" value="{{ auth()->user()->email }}" readonly>
                                    </div>
                                </div><br>

                                <label>Telepon *</label>
                                <input type="text" style="border-radius: 10px;" class="form-control mb-0" name="phone" value="{{ auth()->user()->phone }}" required=""><br>

                                <label>Alamat *</label>
                                <textarea name="address" style="border-radius: 10px;" class="form-control" cols="30" rows="5">{{ auth()->user()->address }}</textarea><br>

                                <label>Foto</label>
                                <input type="file" style="border-radius: 10px;" class="form-control mb-0" name="image">
                                <span style="font-style: italic;">Biarkan kosong jika Anda tidak ingin mengubah kata foto</span><br><br>

                                <label>Password</label>
                                <input type="password" style="border-radius: 10px;" class="form-control mb-0" name="password">
                                <span style="font-style: italic;">Biarkan kosong jika Anda tidak ingin mengubah kata password</span><br><br>

                                <div class="das-into-btn mb-3">
                                    <button type="submit" class="btn btn-3">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
