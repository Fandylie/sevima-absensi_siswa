@extends('parts/dasar')

@section('contain')
    <form action="{{url('admin/siswa')}}" method="post">
        @csrf
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Siswa</h3>
        </div>
        <div class="panel-body">
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="NISN" name="nisn" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="NIS" name="nis" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Nama Lengkap" name="nama" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Email (Boleh Kosong)" name="email" type="email">
            </div>
            <br>
            <select class="form-control input" name="kelas">
                <option value="" disabled selected>Kelas</option>
                @foreach ($kelas as $item)
                <option value="{{$item->namakelas}}" >{{$item->namakelas}}</option>
                
                @endforeach
            </select>
            <br>
            <select class="form-control input" name="jeniskelamin">
                <option value="" disabled selected>Jenis Kelamin (Boleh Kosong)</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <select class="form-control input" name="agama">
                <option value="" disabled selected>Agama (Boleh Kosong)</option>
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
                <input class="form-control" placeholder="Tempat Lahir" name="tempatlahir" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Tanggallahir" name="tanggallahir" type="date">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" min="1900" max="2099" step="1" value="2022" name="tahunmasuk" type="number">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Tambah Siswa</button>
        </div>
    </form>
@endsection