@extends('layout.navigasi')
@section('content')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">List Pemesanan Asset Baru</h4>
                                    <br>
                                    <a href="{{ url("pemesanan/create")}} " class="btn btn-info btn-fill pull-left">New</a>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Asset</th>
                                                <th>Tangaal Pemesanan Asset</th>
                                                <th>Tanggal datang Asset</th>
                                                <th>Harga Asset</th>
                                                <th>Jumlah Asset yang Dibeli</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($belanja as $belanja)
                                                
                                            
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$belanja->Nama_Barang}}</td>
                                                <td>{{$belanja->Tanggal_Pemesanan}}</td>
                                                <td>{{$belanja->Tanggal_Terima}}</td>
                                                <td>{{$belanja->Harga_Barang}}</td>
                                                <td>{{$belanja->Jumlah_Barang}}</td>
                                                <td> <a class="btn btn-info btn-fill pull-right" href="{{ url("pemesanan/$belanja->id/edit")}}">Edit</a> </td>
                                                <td>
                                                    <a href="{{ url("pemesanan/$belanja->id/delete")}}" class="btn btn-info btn-fill pull-right">Delete</a>
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

@endsection