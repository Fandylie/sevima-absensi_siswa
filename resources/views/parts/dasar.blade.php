<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('assets/css_conect_clorofil')
    
    <title>{{$title}}</title>
</head>
<body style="max-width:100vw;">
        <!-- WRAPPER -->
    <div id="wrapper">
        @include('assets/sidebar')
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    @include('assets/msg')
                    @yield('contain')
                </div>
            </div>
        </div>
    </div>
    
</body>
    @include('assets/js_conect_clorofil')
</html>