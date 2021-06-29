@extends('layouts.app')
 
@section('content')
    
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">Edit Makul</div>
                 <div class="card-body">
                 <form method="POST" action="{{ route('update.mahasiswa', $mahasiswa->id)}}">
                 @csrf
                 <div class="form-group">
                            <lable for="nama" class="col-sm-2 control-lable">User ID</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="user_id"  placeholder="Masukan User ID..." value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->user_id }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <lable for="npm" class="col-sm-2 control-lable">NPM</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="npm" placeholder="Masukan NPM..." value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->npm }}">
                            </div>
                        </div>
                        <di class="form-group">
                            <lable for="tempat_lahir" class="col-sm-2 control-lable">Tempat Lahir</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat lahir..." value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->tempat_lahir }}">
                            </div>
                        </di>
                        <div class="form-group">
                            <lable for="tgl_lahir" class="col-sm-2 control-lable">Tanggal Lahir</lable>
                            <div class="col-sm-12">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir..."value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->tgl_lahir }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <lable for="alamat" class="col-sm-2 control-lable">Alamat</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat..." value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->alamat }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <lable for="telepon" class="col-sm-2 control-lable">Telepon</lable>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="telepon" placeholder="Masukan Telepon..." value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->telepon }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-lable">Gender</label>
                            <div class="col-sm-12">
                                <select class="custom-select" id="gender" name="gender" value="{{ is_null
                                    ('$mahasiswa') ? '' : $mahasiswa->gender }}">
                                    <option selected disabled value="">Pilih Jenis Kelanin...</option>
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