@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(232, 113, 238)">
                        {{ __('appm versi berlin') }}</div>

                    <div class="card-body">


                        <center>
                            <h1>selamat datang di aplikasi pelaporan masyarakat yang dikembangkan berlin</h1>
                        </center>
                        @if (Auth::user()->level == 'masyarakat')
                            <br>
                            <p>
                            <h4>jika anda mengalami permasalahan silahkan lapor dengan menekan tombol dibawah ini</h4>
                            </p>
                            <a href="/lapor" class="btn btn-primary btn-lg">LAPOR PAK</a>
                            <livewire:semuapengaduan>
                            @else
                                anda adalah tim pelaporan masyarakat
                                <br>
                                <table class="table table-hover table-striped">
                                    <tr>
                                        <td>jumlah laporan</td>
                                        <td>:</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>laporan diverifikasi</td>
                                        <td>:</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>laporan ditanggapi</td>
                                        <td>:</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>laporan selesai</td>
                                        <td>:</td>
                                        <td>50</td>
                                    </tr>
                                </table>
                                <livewire:semuapengaduan>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
