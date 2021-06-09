@extends('layouts.admin-master')

@section('title')
Data Penduduk
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Penduduk</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Users <span>0</span></h4>
                        <div class="card-header-action">
                            <a href="{{url('admin/penduduk/create')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Agama</th>
                                        <th>TTL</th>
                                        <th>Pendidikan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach($penduduk as $p)
                                    <tr>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->address }}</td>
                                        <td>{{ $p->religion }}</td>
                                        <td>{{ $p->place_of_birth }}, {{$p->date_of_birth}}</td>
                                        <td>{{ $p->education }}</td>
                                        <td class="text-right">
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <a href="{{url('admin/penduduk/'.$p->id.'/edit')}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
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
    </div>
</section>
@endsection