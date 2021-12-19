@extends('layouts.frontend.master')

@section('content')
    <section id="banner-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10 col-sm-12 col-12">
                    <div class="banner-text-home wow fadeInUp" data-wow-duration="2s">
                        <h6>Selamat Datang Di</h6>
                        <h1>Avanturista</h1>
                        <p>Nikmati liburan yang indah dengan biaya yang terjangkau</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tour-des">
        <div class="content-box can-if">
            <h2>Daftar Paket Yang Tersedia</h2>
            <p>Ayo pesan paket wisata paling murah disini tempatnya</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach (\DB::table('tb_paket_wisata')->whereDeletedAt(null)->latest()->get() as $paket_wisata)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="des-cov-1">
                            <div class="des-img-1">
                                <a href="{{ route('paket-wisata.detail', ['slug' => $paket_wisata->slug]) }}">
                                    <img src="{{ asset('photo/'.$paket_wisata->image) }}" alt="img">
                                </a>
                            </div>
                            <div class="des-para">
                                <div class="dayt">
                                    <h6>
                                        <a href="{{ route('paket-wisata.detail', ['slug' => $paket_wisata->slug]) }}">{{ $paket_wisata->nama }}</a>
                                    </h6>
                                    <p>
                                        <a href="{{ route('paket-wisata.detail', ['slug' => $paket_wisata->slug]) }}" style="padding: 5px; border-radius: 5px; background-color: var(--main-theme-color-one); color: white;">{{ \DB::table('tb_kategori_paket_wisata')->find($paket_wisata->kategori_paket_wisata_id)->nama }}</a>
                                    </p>
                                </div>
                                <div class="real-dat-para">
                                    <p>{!! $paket_wisata->deskripsi !!}</p>
                                </div>
                                <div class="des-button-icon">
                                    <div class="das-into-btn">
                                        <a target="__blank" href="https://api.whatsapp.com/send?phone={{ \DB::table('tb_pengaturan')->first()->whatsapp }}&text=Halo Admin, Saya ingin pesan paket {{ $paket_wisata->nama }}" class="btn btn-3">Pesan Sekarang</a>
                                    </div>
                                    <div class="start-icon-des">
                                        <p>
                                            <a href="{{ route('paket-wisata.detail', ['slug' => $paket_wisata->slug]) }}" class="font-weight-bold">Rp. {{ number_format($paket_wisata->harga) }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection