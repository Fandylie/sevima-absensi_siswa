@extends('parts/dasar')

@section('contain')
    <form action="{{url('admin/siswa')}}" method="post">
        @csrf
        <div class="panel-heading">
            <h3 class="panel-title">Edit Siswa{{$data->nisn}}</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->nis}}" disabled name="nis" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->nama}}" name="nama" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->email}}" name="email" type="email">
            </div>
            <br>
            <select class="form-control input" name="kelas">
                <option value="{{$data->kelas}}" disabled selected>{{$data->kelas}}</option>
                @foreach ($kelas as $item)
                <option value="{{$item->namakelas}}" >{{$item->namakelas}}</option>
                
                @endforeach
            </select>
            <br>
            <select class="form-control input" name="jeniskelamin">
                <option value="{{$data->jeniskelamin}}" disabled selected>{{$data->jeniskelamin}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <select class="form-control input" name="agama">
                <option value="{{$data->agama}}" disabled selected>{{$data->agama}}</option>
                <option value="Hindu">Hindu</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->tempatlahir}}" name="tempatlahir" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->tanggalalhir}}" name="tanggallahir" type="date">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" min="1900" max="2099" step="1" value="{{$data->tahunmasuk}}" name="tahunmasuk" type="number">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Tambah Siswa</button>
        </div>
    </form>
@endsection