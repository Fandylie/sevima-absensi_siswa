@extends('parts/dasar')

@section('contain')
    <form action="{{url('admin/admin')}}" method="post">
        @csrf
        <div class="panel-heading">
            <h3 class="panel-title">Tambah admin</h3>
        </div>
        <div class="panel-body">
            
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="User Name" name="username" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Password" name="password" type="password">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Tambah Admin</button>
        </div>
    </form>
@endsection