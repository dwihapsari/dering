@extends('layouts.admin-master')

@section('title')
Edit Data Penduduk
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="alert alert-primary">
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Penduduk</h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/penduduk/'.$penduduk->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{$penduduk->name}}" class="form-control" name="name">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{$penduduk->nik}}" class="form-control" name="nik">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. KK</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" value="{{$penduduk->no_kk}}" class="form-control" name="no_kk">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" name="gender" value="{{$penduduk->gender}}">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No. HP</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" value="{{$penduduk->no_hp}}" name="no_hp">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" name="status_perkawinan" value="{{$penduduk->status_perkawinan}}">
                                <option>Kawin</option>
                                <option>Belum Kawin</option>
                                <option>Cerai Hidup</option>
                                <option>Cerai Mati</option>
                            </select>
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" value="{{$penduduk->place_of_birth}}" name="place_of_birth">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" value="{{$penduduk->date_of_birth}}" name="date_of_birth">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" value="{{$penduduk->address}}" name="address">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" value="{{$penduduk->religion}}" name="religion">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Katholik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                            </select>
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pendidikan</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control" value="{{$penduduk->education}}" name="education">
                                <option>Belum Sekolah</option>
                                <option>MI/SD</option>
                                <option>MTS/SMP</option>
                                <option>MA/SMA/SMK</option>
                                <option>D1</option>
                                <option>D2</option>
                                <option>D3</option>
                                <option>S1</option>
                                <option>S2</option>
                            </select>
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" value="{{$penduduk->profession}}" name="profession">
                            <div class="invalid-feedback">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="">File</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" name="file" id="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary"><span>Tambah</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection