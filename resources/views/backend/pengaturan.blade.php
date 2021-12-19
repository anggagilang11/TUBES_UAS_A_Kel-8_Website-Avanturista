@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Pengaturan</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="form-pengaturan" method="POST" action="{{ route('backend.pengaturan.update') }}" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                                @csrf            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="whatsapp" class="control-label">Whatsapp <span style="color:red;"> *</span></label>
                                        <div>
                                            <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="{{ $item->whatsapp }}" required>
                                            @if ($errors->has('whatsapp'))
                                                <span class="help-block with-errors text-danger">{{ $errors->first('whatsapp') }}</span>
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
