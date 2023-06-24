@extends('parts/dasar')

@section('contain')

<div class="panel">
    <div class="panel-heading" style="display: flex; gap:5vh;">
        <h3 class="panel-title">Data Admin</h3>
        <a href="{{url('admin/admin/create')}}" class="btn btn-success btn-sm">Tambah Admin</a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>lainnya</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i =1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->username}}</td>
                        <td style="display: flex; gap:1vh"> 
                            <form action="{{url('admin/admin/'.$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus Admin ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection