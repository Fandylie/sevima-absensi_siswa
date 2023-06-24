<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('assets/css_conect_clorofil')
    <title>Absen</title>
</head>
<body>
    <div id="wrapper">
        @include('assets/msg')
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead">Absen Siswa</p>
							</div>
							<form class="form-auth-small" action="{{url('absen')}}" method="post">
                                @csrf
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">NIS</label>
									<input type="text" class="form-control" id="signin-email" name="nis" placeholder="NIS">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Absen Siswa </h1>
							<p>by The Fandy</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</body>
@include('assets/js_conect_clorofil')
</html>