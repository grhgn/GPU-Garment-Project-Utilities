<html>
<head>
  <title>Garment-Project</title>
  <script src="<?=base_url('assets/jquery/jquery-1.10.2.min.js')?>"></script>
  <link href="<?=base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/style.css')?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body id="login">
    <?php
    if ($this->session->flashdata('alert')=='gagal_login'){
        echo "<script>alert('Username atau Password salah!');</script>";
    }
    ?>
  <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 offset-md-3 col-sm-8 offset-sm-2">
        <div class="card card-hitam">
            <div class="card-header">
                <div class="card-title">Sign In</div>
			</div>
			<div class="card-body">
				<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
				<form method="post" action="<?php echo site_url('Control/cek_login') ?>" id="loginform" class="form-horizontal" role="form" name="login">
					<div style="margin-bottom: 20px" class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-user"></i></div>
						</div>
						<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username Or Email">
					</div>
					<div style="margin-bottom: 20px" class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-lock"></i></div>
						</div>
						<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<input type="submit" class="btn btn-info" name="login" value="Login">
						</div>
					</div>
					<div style="margin: 0" class="form-group">
						<div class="col-md-12 control">
							<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
								Don't have an account?
								<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show();"> Sign Up Here</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="signupbox" style="display:none; margin-top:20px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		<div class="card card-hitam">
			<div class="card-heading">
				<div class="card-title">Sign Up</div>
				<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="daftar_akun" id="signupform" class="form-horizontal" role="form">
					<div class="form-group">
						<label for="firstname" class="col-md-3 control-label">First Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="firstname" placeholder="First Name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="lastname" class="col-md-3 control-label">Last Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="firstname" class="col-md-3 control-label">Tempat/Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="tanggallahir" placeholder="Tempat & Tanggal Lahir" required>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-md-3 control-label">Email</label>
						<div class="col-md-9">
							<input type="email" class="form-control" name="email" placeholder="Email Address" required>
						</div>
					</div>

					<div class="form-group">
						<label for="firstname" class="col-md-3 control-label">Username</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="username" placeholder="First Name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-md-3 control-label">Home Address</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="address" placeholder="Address" required>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-3 control-label">Phone Number</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number" required>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-md-3 control-label">Password</label>
						<div class="col-md-9">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>                 

					<div class="form-group">
						<div class="col-md-offset-3 col-md-9">
							<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
						</div>
					</div> 
				</form>
			</div>
		</div>
	</div>
</div>

<script>
<?php if (isset($message)){
    echo "alert('$message')";
} ?>
</script>

<script>

</body>
</html>