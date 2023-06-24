<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('assets/css_conect_clorofil')
    <title>Login</title>
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
								<p class="lead">Login Admin</p>
							</div>
							<form class="form-auth-small" action="{{url('admin/login')}}" method="post">
                                @csrf
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">User Name</label>
									<input type="text" class="form-control" id="signin-email" name="username" placeholder="User Name">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
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