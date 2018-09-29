<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style type="text/css">
			.navv{
			  border-bottom: 1px solid;
			}
			#navs a{
			  font-weight: bold;
			  font-family: 'Raleway', sans-serif;
			}
			.cart-block{
				background:#333;
				color:#fff;
				padding:10px;
				margin-bottom:20px;
			}

			.produk{
				display:relative;
			}

			.produk img{
				width:100%;
			}

			.produk-price{
				position:absolute;
				right:0px;
				background:hotpink;
				color:#fff;
				font-size:15px;
				padding: 2px 5px;
			}
			.produk-title{
			  background-color: #1b1f23;
			  text-align: center;
			  color:whitesmoke;
			  font-weight: 500;
			  font-size: 15px;
			  padding: 3px 2px;
			}
			.produk-add{
				margin:5px auto 20px auto;
				width:100%;
				text-align:center;
			}

			.produk-add button {
			  margin-top: 5px;
			}

			.product {
			  margin: auto;
			  margin-top: 81px;
			  padding-top: 20px;
			}

			.judul {
			  border-radius: 2px;
			  color: white;
			  padding: 5px;
			}
			.input-qty{
				width: 70px;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top navv">
			<div class="container" id="navs">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('Control/')?>">HOME</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('Control/view_product')?>">PRODUCT</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">LOCATION</a>
					</li>
				</ul>
				<?php if ($this->session->userdata('logged_in')!="Sudah Login") { ?>
					<div class="dropdown" id="navbarNavAltMarkup">
						<button class="btn dropdown-toggle btn btn-danger text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							LOGIN
						</button>
						<div class="dropdown-menu">
							<form class="px-2 py-3" method="POST" action="<?php echo site_url('Control/cek_login');?>">
								<div class="form-group">
									<label for="exampleDropdownFormEmail1">Username</label>
									<input type="text" name="username" class="form-control  " id="exampleDropdownFormEmail1" placeholder="username">
								</div>
								<div class="form-group">
									<label for="exampleDropdownFormPassword1">Password</label>
									<input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-secondary btn-block">Sign in</button>
							</form>
						</div>
					</div>
				<?php } else { ?>
					<?php $username = ($this->session->userdata['username']); ?>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<strong><?= $username?></strong>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-4">
										<p class="text-center">
											<span class="fa fa-user" id="logo"></span>
										</p>
									</div>
									<?php foreach ($user as $usr) { ?>
										<div class="col-lg-8">
											<p class="text-left"><strong><?= $usr->firstname; echo' '; echo $usr->lastname ?></strong></p>
											<p class="text-left small"><?= $usr->email ?></p>
											<p class="text-left">
												<a href="<?php echo site_url('control/view_profile')?>" class="btn btn-primary btn-block btn-sm">View Profile</a>
											</p>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="navbar-login navbar-login-session">
								<div class="row">
									<div class="col-lg-12">
										<p>
											<a href="logout" class="btn btn-danger btn-block">Logout</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php  } ?>
			</div>
		 </nav>
	</body>
</html>
