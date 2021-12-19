@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Laporan Stock</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <form action="{{ route('backend.stock-report.download') }}" method="POST">
                                        @csrf
                                        <label>Cetak Laporan Stock Bulanan</label><br>
                                        <label>Pilih bulan</label>
                                        <select name="m_month_stock" class="form-control" style="width: 250px;">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        @if ($errors->has('m_month_stock'))
                                            <span style="color:red;">field is required</span>
                                        @endif
    
                                        <label class="mt-2">Pilih Tahun</label>
                                        <select name="m_year_stock" class="form-control" style="width: 250px;">
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                        @if ($errors->has('m_year_stock'))
                                            <span style="color:red;">field is required</span>
                                        @endif
                                        
                                        <button name="type" value="month" type="submit" class="btn btn-primary mt-2" style="width: 250px;">Download Laporan Stock</button>
                                    </form>
                                </div>

                                <div class="col-lg-3">
                                    <form action="{{ route('backend.stock-report.download') }}" method="POST">
                                        @csrf
                                        <label>Cetak Laporan Stock Tahunan</label><br>
                                        <label class="mt-2">Pilih Tahun</label>
                                        <select name="y_year_stock" class="form-control" style="width: 250px;">
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                        @if ($errors->has('y_year_stock'))
                                            <span style="color:red;">field is required</span>
                                        @endif
                                        
                                        <button name="type" value="year" type="submit" class="btn btn-primary mt-2" style="width: 250px;">Download Laporan Stock</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
