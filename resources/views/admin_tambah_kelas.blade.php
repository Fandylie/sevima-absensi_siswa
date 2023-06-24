@extends('parts/dasar')

@section('contain')
    <form action="{{url('admin/kelas')}}" method="post">
        @csrf
        <div class="panel-heading">
            <h3 class="panel-title">Tambah kelas</h3>
        </div>
        <div class="panel-body">
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Nama Kelas" name="namakelas" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Wali Kelas" name="walikelas" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" min="1900" max="2099" step="1" value="2022" name="tahunajaran" type="number">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Tambah Siswa</button>
        </div>
    </form>
@endsection