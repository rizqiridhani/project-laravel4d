@extends('layouts.app')
 
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}"method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form row">
                            <div class="col">
                                <label for="">Nama Mahasiswa</label>
                                <select class="custom-select" id="user_id" name="user_id" required>
                                    <option selected disabled value="">--Pilih User--</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id}}">{{ $u->name}}</option>
                                   @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="">NPM</label>
                                <input type="number" name="npm" class="form-control" placeholder="Masukan NPM" maxlength="8">
                            </div>
                            <div class="col">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form row">
                            <div class="col">
                                <label for="">Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                            </div>
                            <div class="col">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="2" rows="3"class="form-control" style="resize: none;"></textarea>
                            </div>
                            <div class="col">
                                <label for="">Telepon</label>
                                <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Nomor Telepon">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-lable">Jenis Kelamin</label>
                            <div class="col-sm-12">
                                <select class="custom-select" id="gender" name="gender" required>
                                    <option selected disabled value="">--Pilih Jenis Kelamin--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form group">
                            <div class="form row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection