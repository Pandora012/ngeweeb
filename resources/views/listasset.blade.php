@extends('layout.navigasi')
@section('content')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">List Asset Perusahaan</h4>
                                    <br>
                                    <a href="{{ url('listasset/create')}} " class="btn btn-info btn-fill pull-left">New</a>
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
                                                <th>Action</th>
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
                                                <td> <a class="btn btn-info btn-fill pull-right" href="{{ url("listasset/$asset->id/edit")}}">Edit</a> </td>
                                                <td>
                                                    <a href="{{ url("listasset/$asset->id/delete")}}" class="btn btn-info btn-fill pull-right">Delete</a>
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