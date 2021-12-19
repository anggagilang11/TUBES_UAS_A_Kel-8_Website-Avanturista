@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Edit Pelanggan</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <form action="{{ route('backend.pelanggan.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">
                                            <i class="help-block font-italic">Biarkan kosong jika Anda tidak ingin mengubah foto</i>
                                            @if ($errors->has('image'))
                                                <span style="color:red;">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Nama <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                            @if ($errors->has('name'))
                                                <span style="color:red;">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Email <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" value="{{ $item->email }}" readonly>
                                            @if ($errors->has('email'))
                                                <span style="color:red;">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control">
                                            <i class="help-block font-italic">Biarkan kosong jika Anda tidak ingin mengubah password</i>
                                            @if ($errors->has('password'))
                                                <span style="color:red;">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Telepon <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="number" name="phone" class="form-control" value="{{ $item->phone }}" required>
                                            @if ($errors->has('phone'))
                                                <span style="color:red;">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label font-weight-bold">Alamat <span style="color:red;"> *</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="address" cols="30" rows="5" class="form-control">{{ $item->address }}</textarea>
                                            @if ($errors->has('address'))
                                                <span style="color:red;">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-save shadow">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection