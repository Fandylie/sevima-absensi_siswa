@extends('parts/dasar')

@section('contain')

    <div class="panel">
        <div class="panel-heading" style="display: flex; ">
            <h3 class="panel-title">Rekap Absen per</h3>
            <select id="">
                <option value="" disabled selected>Bulan</option>
                <option value="">Tahun</option>
                <option value="">Kelas</option>
            </select>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Priode</th>
                        <th>Lainnya</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->tanggalabsen}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection