@extends('parts/dasar')

@section('contain')
    <form action="{{url('admin/siswa/'.$data->nisn)}}" method="post">
        @csrf
        @method('put')
        <div class="panel-heading">
            <h3 class="panel-title">Edit Siswa{{$data->nisn}}</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" value="{{$data->nis}}" disabled type="text">
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
                <option disabled selected>{{$data->kelas}}</option>
                <option value="{{$data->kelas}}" hidden selected>{{$data->kelas}}</option>
                @foreach ($kelas as $item)
                <option value="{{$item->namakelas}}" >{{$item->namakelas}}</option>
                
                @endforeach
            </select>
            <br>
            <select class="form-control input" name="jeniskelamin">
                <option disabled selected>{{$data->jeniskelamin}}</option>
                <option value="{{$data->jeniskelamin}}" hidden selected>{{$data->jeniskelamin}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <select class="form-control input" name="agama">
                <option disabled selected>{{$data->agama}}</option>
                <option value="{{$data->agama}}" hidden selected>{{$data->agama}}</option>
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
                <input class="form-control" value="{{$data->tanggallahir}}" name="tanggallahir" type="date">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" min="1900" max="2099" step="1" value="{{$data->tahunmasuk}}" name="tahunmasuk" type="number">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Edit Siswa</button>
        </div>
    </form>
@endsection