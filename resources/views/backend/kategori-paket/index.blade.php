@extends('layouts.backend.master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark ml-4">Data Kategori Paket</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content pr-5 pl-5">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="card-title"><a href="{{ route('backend.kategori-paket.create') }}" class="btn btn-primary shadow"> <i class="fa fa-plus"></i> Tambah</a></h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-hover borderless" style="width: 100%; border: 0;">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama Kategori Paket</th>
                                        <th style="width: 150px; text-align: center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td style="text-align: center">
                                                <a href="{{ route('backend.kategori-paket.edit', ['id' => $item->id]) }}" class="btn btn-primary shadow"> <i class="fa fa-edit"></i> Edit</a>
                                                <a href="{{ route('backend.kategori-paket.delete', ['id' => $item->id]) }}" class="btn btn-primary shadow" onclick="return confirm('Are you sure you want to delete this data?')"> <i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
