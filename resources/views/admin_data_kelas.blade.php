@extends('parts/dasar')

@section('contain')

<div class="panel">
    <div class="panel-heading" style="display: flex; gap:5vh;">
        <h3 class="panel-title">Data Kelas</h3>
        <a href="{{url('admin/kelas/create')}}" class="btn btn-success btn-sm">Tambah Kelas</a>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Wali Kelas</th>
                    <th>Tahun Ajaran</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i =1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->namakelas}}</td>
                        <td>{{$item->walikelas}}</td>
                        <td>{{$item->tahunajaran}}</td>
                        <td style="display: flex; gap:1vh"> 
                            <form action="{{url('admin/kelas/'.$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah anda ingin menghapus kelas ini?')" class="btn btn-danger btn-sm">Hapus</button>
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