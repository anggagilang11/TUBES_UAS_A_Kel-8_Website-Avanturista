@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Profile</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="form-profile" method="POST" action="{{ route('backend.profile.update') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                                @csrf            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Nama <span style="color:red;"> *</span></label>
                                        <div>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block with-errors text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email <span style="color:red;"> *</span></label>
                                        <div>
                                            <input type="email" id="email" name="email" class="form-control" readonly value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <div>
                                            <input type="password" id="password" name="password" class="form-control">
                                            <i class="help-block font-italic">Biarkan kosong jika Anda tidak ingin mengubah password</i>
                                            @if ($errors->has('password'))
                                                <br><span class="help-block with-errors text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Telepon <span style="color:red;"> *</span></label>
                                        <div>
                                            <input type="text" id="phone" name="phone" class="form-control" value="{{ Auth::user()->phone }}" required>
                                            @if ($errors->has('phone'))
                                                <span class="help-block with-errors text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Alamat <span style="color:red;"> *</span></label>
                                        <div>
                                            <textarea name="address" cols="30" rows="5" class="form-control" required>{{ Auth::user()->address }}</textarea>
                                            @if ($errors->has('address'))
                                                <span style="color:red;">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Foto</label>
                                        <div>
                                            <input type="file" name="image" class="form-control">
                                            <i class="help-block font-italic">Biarkan kosong jika Anda tidak ingin mengubah foto</i>
                                            @if ($errors->has('image'))
                                                <span style="color:red;">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" id="btn-submit" class="btn btn-primary btn-save">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
