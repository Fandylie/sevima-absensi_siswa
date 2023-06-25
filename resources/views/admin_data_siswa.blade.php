@extends('parts/dasar')

@section('contain')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Data Siswa</h3>
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
                @php
                    $i =1;
                @endphp
                @foreach ($datasiswa as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->nis}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas}}</td>
                        <td><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
                        <td style="display: flex; gap:1vh">
                            <a href="{{url('admin/siswa/'.$item->nisn.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{url('admin/siswa/'.$item->nisn)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah anda ingin penghapus siswa ini?')" class="btn btn-danger btn-sm">Hapus</button>
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