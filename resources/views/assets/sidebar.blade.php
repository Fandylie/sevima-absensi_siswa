@php
    $dashboard_sesion = '';
    $datasiswa_sesion = '';
    $tambahsiswa_sesion = '';

    if (isset($datasiswa)) {
        $datasiswa_sesion = 'active';
    }elseif(isset($dashboard)){
        $dashboard_sesion = 'active';
    }elseif(isset($tambahsiswa)) {
        $tambahsiswa_sesion = 'active';
    }
@endphp

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="lnr lnr-alarm"></i>
                        <span class="badge bg-danger">5</span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                        <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                        <li><a href="#" class="more">See all notifications</a></li>
                    </ul>
                </li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                        <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                        <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
                    <a href="#subPages" data-toggle="collapse" class="@if($datasiswa_sesion == 'active' || $tambahsiswa_sesion == 'active') {{'active'}} @else {{'collapsed'}} @endif" ><i class="lnr lnr-file-empty"></i> <span>Siswa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                        @if ($datasiswa_sesion == 'active' || $tambahsiswa_sesion == 'active')
                            <div id="subPages" class="collapse in" style="height: 124px;">
                            
                        @else
                            {{-- {{$datasiswa_sesion}} --}}
                            <div id="subPages" class="collapse">
                            
                        @endif
                        <ul class="nav">
                            <li><a href="{{url('admin/siswa')}}" class="{{$datasiswa_sesion}}">Data Siswa</a></li>
                            <li><a href="{{url('admin/siswa/create')}}" class="{{$tambahsiswa_sesion}}">Tambah Siswa</a></li>
                            <li><a href="page-login.html" class="">Rekap Absen</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Data Admin</span></a></li>
                <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Kelas</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
