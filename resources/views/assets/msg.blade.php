@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success"> {{session::get('success')}}</div>
@endif

@if (Session::get('danger'))
    <div class="alert alert-danger"> {{session::get('danger')}}</div>
@endif