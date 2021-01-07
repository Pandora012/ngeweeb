@extends('layout.navigasi')

@section('content')
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h2>Sistem Manajeman Asset</h2>
                                    <p>Merupakan sebuah sistem untuk memanajeman asset sehingga tidak ada kesalahan sehingga memudahkan pengguna Aplikasi ini bisa mudah mengelola asset asset yang ada
                                        DIbawah ini merupakan salah contoh dari asset asset yanga ada
                                    </p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h2 class="card-title">List Asset Perusahaan</h2>
                                    <br>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Asset</th>
                                                <th>Kode Asset</th>
                                                <th>Tanggal datang Asset</th>
                                                <th>Jumlah</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($asset as $asset)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$asset->Nama_Asset}}</td>
                                                <td>{{$asset->Kode_Asset}}</td>
                                                <td>{{$asset->Tanggal_Asset}}</td>
                                                <td>{{$asset->Jumlah}}</td>
                                                
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection