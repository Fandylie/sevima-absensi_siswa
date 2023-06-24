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
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>kelas</th>
                    <th>lainnya</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datasiswa as $item)
                    <tr>
                        <td>1</td>
                        <td>Steve</td>
                        <td>Jobs</td>
                        <td>@steve</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection