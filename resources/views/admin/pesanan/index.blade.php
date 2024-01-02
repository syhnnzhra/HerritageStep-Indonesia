@extends('admin.layouts.main')
@section('container')
<div class="uk-card uk-card-default  uk-width-1-1=@m my-5 mx-5">
    <h3 class="uk-card-title">Pesanan</h3>
</div>
<div class="uk-child-width-1-3@s uk-grid-match " uk-grid>
    
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-5 mx-5">
            <h3 class="uk-card-title text-center">DIPROSES</h3>
            <p class="text-center">{{ $pending }}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-5 mx-5 ">
            <h3 class="uk-card-title text-center">DIKIRIM</h3>
            <p class="text-center">{{ $sending }}</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body my-5 mx-5">
            <h3 class="uk-card-title text-center">SELESAI</h3>
            <p class="text-center">{{ $done }}</p>
        </div>
    </div>
 
</div>

<nav class="uk-navbar mx-5 pesan" uk-navbar >


        <div class="uk-navbar-item ">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="cari" placeholder="Cari" aria-label="Cari">
            </form>
        </div>
</nav>

<a href="/laporan" style="color:black;" class="my-5 mx-5 ">Cetak Laporan</a>

<table class="uk-table uk-table-hover uk-table-divider my-5 mx-5 ">
    <caption style="color:black">Laporan Pengiriman</caption>
    <thead>
        <tr>
            <th style="color:black; background-color:#ffffff;">Nama Penerima</th>
            <th style="color:black; background-color:#ffffff;"> ID Pesanan</th>
            <th style="color:black; background-color:#ffffff;"> Nomor Resi</th>
            <th style="color:black; background-color:#ffffff;"> Tanggal Pesanan</th>
            <th style="color:black; background-color:#ffffff;"> Total Jumlah Barang</th>
            <th style="color:black; background-color:#ffffff;"> Status Pembayaran</th>
            <th style="color:black; background-color:#ffffff;"> Status Pengiriman</th>
        </tr>
    </thead>
    <tbody style="color:black">
    @foreach($order as $o)
        <tr>
            <td>{{ $o->first_name }} {{ $o->last_name }}</td>
            <td>{{ $o->id }}</td>
            <td>{{ $o->no_resi }}</td>
            <td>{{ $o->updated_at }}</td>
            <td>Rp {{ number_format($o->subtotal) }}</td>
            <td>{{ $o->payment_status }}</td>
            <td>{{ $o->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>    

@endsection
