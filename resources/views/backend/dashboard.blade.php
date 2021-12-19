@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Beranda</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{ $pelanggan }}</h3>
                                <p>Total Pelanggan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users" style="color: #c2c7d0"></i>
                            </div>
                            <a style="background-color: #113897" href="{{ route('backend.pelanggan') }}" class="small-box-footer">Baca selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{ $kategori_paket_wisata }}</h3>
                                <p>Total Kategori Paket</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-list" style="color: #c2c7d0"></i>
                            </div>
                            <a style="background-color: #113897" href="{{ route('backend.kategori-paket') }}" class="small-box-footer">Baca selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-4">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{ $paket_wisata }}</h3>
                                <p>Total Paket Wisata</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-suitcase-rolling" style="color: #c2c7d0"></i>
                            </div>
                            <a style="background-color: #113897" href="{{ route('backend.paket-wisata') }}" class="small-box-footer">Baca selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
