@php
    $dashboard_sesion = '';
    $datasiswa_sesion = '';
    $tambahsiswa_sesion = '';
    $rekapsiswa_sesion = '';
    $kelas_sesion = '';
    $admin_sesion = '';

    if (isset($datasiswa)) {
        $datasiswa_sesion = 'active';
    }elseif(isset($dashboard)){
        $dashboard_sesion = 'active';
    }elseif(isset($tambahsiswa)) {
        $tambahsiswa_sesion = 'active';
    }elseif(isset($rekap)){
        $rekapsiswa_sesion = 'active';
    }elseif(isset($kelas)){
        $kelas_sesion = 'active';
    }elseif(isset($admin)){
        $admin_sesion = 'active';
    }
@endphp

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        Absensi Siswa
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
    @if($datasiswa_sesion == 'active')
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
    @endif
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Basic Use</a></li>
                        <li><a href="#">Working With Data</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Troubleshooting</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->username}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                        <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                        <li><a href="{{url('admin/logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{url('/admin')}}" class="{{$dashboard_sesion}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="@if($datasiswa_sesion == 'active' || $tambahsiswa_sesion == 'active' || $rekapsiswa_sesion == 'active') {{'active'}} @else {{'collapsed'}} @endif" ><i class="lnr lnr-file-empty"></i> <span>Siswa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        @if ($datasiswa_sesion == 'active' || $tambahsiswa_sesion == 'active' || $rekapsiswa_sesion == 'active')
                            <div id="subPages" class="collapse in" style="height: 124px;">
                            
                        @else
                            {{-- {{$datasiswa_sesion}} --}}
                            <div id="subPages" class="collapse">
                            
                        @endif
                        <ul class="nav">
                            <li><a href="{{url('admin/siswa')}}" class="{{$datasiswa_sesion}}">Data Siswa</a></li>
                            <li><a href="{{url('admin/siswa/create')}}" class="{{$tambahsiswa_sesion}}">Tambah Siswa</a></li>
                            <li><a href="{{url('admin/rekap')}}" class="{{$rekapsiswa_sesion}}">Rekap Absen</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{url('admin/admin')}}" class="{{$admin_sesion}}"><i class="lnr lnr-cog"></i> <span>Data Admin</span></a></li>
                <li><a href="{{url('admin/kelas')}}" class="{{$kelas_sesion}}"><i class="lnr lnr-alarm"></i> <span>Kelas</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
