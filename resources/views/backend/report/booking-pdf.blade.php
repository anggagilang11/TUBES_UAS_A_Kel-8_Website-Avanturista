<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <center>
                        <h5>Laporan {{ $type }} {{ $type == 'Bulan' ? date('F Y', strtotime($date)) : $tahun }} UD. Dwi Purna</h5>
                    </center>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered" style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">No</th>
                                        <th style="width: 75px; text-align: center">ID Pemesanan</th>
                                        <th style="width: 100px;">Pelanggan</th>
                                        <th style="width: 75px; text-align: center">Total Produk</th>
                                        <th style="width: 100px; text-align: center">Tanggal Pengambilan</th>
                                        <th style="width: 75px; text-align: center">Total Bayar</th>
                                        <th style="width: 100px; text-align: center">Tanggal Pemesanan</th>
                                        <th style="width: 150px; text-align: center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($items as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>UDDP-{{ $item->id }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td style="text-align: center;">{{ $item->total_product }}</td>
                                        <td style="text-align: center;">{{ date('d F Y', strtotime($item->pickup_date)) }}</td>
                                        <td style="text-align: center;">Rp {{ number_format($item->total_price) }}</td>
                                        <td style="text-align: center;">{{ date('d F Y', strtotime($item->created_at)) }}</td>
                                        <td style="text-align: center;">
                                            @if ($item->status == IS_WAITING_CONFIRMATION)
                                                Menunggu Validasi Pembayaran
                                            @elseif($item->status == IS_CONFIRMATION)
                                                Pembayaran Sudah Diterima
                                            @elseif($item->status == IS_COMPLETE_3)
                                                Selesai
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
