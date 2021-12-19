@extends('layouts.frontend.master')

@section('content')
    <section id="tour-packes-deatils">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="common-banner-text  wow zoomIn" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Paket Wisata</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="{{ url('/') }}">Home</a>
                                <span>/</span>
                                <a href="{{ url()->current() }}">{{ $item->nama }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tour-detailes-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="all-details-tour">
                        <div class="all-price">
                            <div class="tour-heading-detailse">
                                <h6>{{ $item->kategori->nama }}</h6>
                                <h2>{{ $item->nama }}</h2>
                            </div>
                            <div class="price-tour">
                                <h2><span>Rp </span>{{ number_format($item->harga) }}</h2>
                            </div>
                        </div>
                        <div class="det-asor-img">
                            <img class="rounded" src="{{ asset('photo/'.$item->image) }}" alt="img">
                        </div>
                        <div class="rweal-reat">
                            <h5>Deskripsi</h5>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                        <div class="das-into-btn mt-3">
                            <a target="__blank" href="https://api.whatsapp.com/send?phone={{ \DB::table('tb_pengaturan')->first()->whatsapp }}&text=Halo Admin, Saya ingin pesan paket {{ $item->nama }}" class="btn btn-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection