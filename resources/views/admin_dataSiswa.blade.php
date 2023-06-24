@extends('parts/dasar')

@section('contain')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Hover Row</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>lainnya</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datasiswa as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->nis}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
                        <td style="display: flex; gap:1vh">
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <form action="">
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection