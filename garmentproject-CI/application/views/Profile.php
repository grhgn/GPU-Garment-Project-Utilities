<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel='stylesheet' type='text/css' href="<?=base_url('assets/css/bootstrap.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/style.css')?>" >
	<link rel='stylesheet' type='text/css' href="<?=base_url('assets/css/navbar.css')?>" >
	<link rel='stylesheet' type='text/css' href="<?=base_url ('assets/css/bootstrap-theme.min.css')?>" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>" ></script>
	<script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>" ></script>
	<script type="text/javascript" src="<?=base_url('assets/js/modal.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/transition.js')?>"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style type="text/css">
        .user-row {
            margin-bottom: 14px;
        }
        .user-row:last-child {
            margin-bottom: 0;
        }
        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }
        .dropdown-user:hover {
            cursor: pointer;
        }
        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }
        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }
        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad {
            margin-top: 20px;
        }
        .icon-size
		{
			font-size: 87px;
		}
		.card-title{
			margin: 0;
		}
		.card-header{
			background-image: linear-gradient(to bottom,#d9edf7 0,#c4e3f3 100%);
		}		
		.card-footer{
			background-image: rgba(0, 0, 0, 0.03);
		}
		.inner{
			margin-top: 40px !important;
		}

		.navbar-login
		{
			width: 305px;
			padding: 10px;
			padding-bottom: 0px;
		}
		
		.nav-item a{
			font-weight: 500;
			color: #999;
		}

		.navbar-login a{
			font-weight: 500;
			color: white;
		}

		.nav-item a:hover{
			font-weight: 500;
			color: white;
		}

		.dropdown-menu a:hover{
			font-weight: 500;
			color: black;
		}

		.active .dropdown-toggle{
			font-weight: 500;
			color: white;
		}
    </style>
</head>
<body id="profile">
<?php include "Header.php"; ?>
<script type="text/javascript">
	$('.navbar-nav li:nth-child(2)').addClass("active");
</script>
<?php $username = ($this->session->userdata['username']); ?>														
<div id="scroll-hide">
	<div class="inner">
		<div class="container">
			<style type="text/css">
				body{
					background: #EEEEEE;
				}
			</style>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card">
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-0 offset-sm-0 offset-md-3 offset-lg-3 toppad">
									<div class="card card-info">
										<div class="card-header">
											<h5 class="card-title" style="margin: 0"><?php echo $user[0]->firstname;echo' ';echo $user[0]->lastname; ?></h5>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-3 col-lg-3" align="center">
													<span class="fa fa-user" id="logo" style="font-size: 106px; margin-top: 20px;"></span>
												</div>
												<div class=" col-md-9 col-lg-9 ">
													<table class="table table-user-information">
														<tbody>
														<tr>
															<td>Username</td>
															<td><?php echo $user[0]->username;?></td>    
														</tr>
														<tr>
															<td>Name</td>
															<td><?php echo $user[0]->firstname;echo' ';echo $user[0]->lastname?></td>    
														</tr>
														<tr>
															<td>Home Address</td>
															<td><?php echo $user[0]->address;?></td>
														</tr>
														<tr>
															<td>Email</td>
															<td><?php echo $user[0]->email;?></td>
														</tr>
															<td>Phone Number</td>
															<td><?php echo $user[0]->phonenumber;?></td>
														</tr>
														</tbody>
													</table>

													<a href="#" class="btn btn-primary">My Dashboard</a>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<span class="float-right">
												<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal1"><i class="fas fa-cog"></i></button>
												<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal2"><i class="fas fa-trash"></i></button>
											</span>
										</div>
									</div>
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog ">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel"><b>Edit Profile</b></h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												</div>
												<div class="modal-body">
													<?php echo form_open("User/edit"); ?>
														<div class="form-group row">
															<label for="username" class="col-md-3 control-label">Username</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="username" readonly value="<?php echo $user[0]->username;?>">
															</div>
														</div>
														<div class="form-group row">
															<label for="firstname" class="col-md-3 control-label">First Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="firstname" value="<?php echo $user[0]->firstname;?>">
															</div>
														</div>
														<div class="form-group row">
															<label for="lastname" class="col-md-3 control-label">Last Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="lastname" value="<?php echo $user[0]->lastname;?>">
															</div>
														</div>
														<div class="form-group row">
															<label for="firstname" class="col-md-3 control-label">Email</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="email" value="<?php echo $user[0]->email;?>">
															</div>
														</div>
														<div class="form-group row">
															<label for="address" class="col-md-3 control-label">Home Address</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="address" value="<?php echo $user[0]->address;?>">
															</div>
														</div>
														<div class="form-group row">
															<label for="phonenumber" class="col-md-3 control-label">Phone Number</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="phonenumber" value="<?php echo $user[0]->phonenumber;?>">
															</div>
														</div>
												</div>

												<div class="modal-footer">
													<input type="submit" class="btn btn-Warning" name="submit" value="Submit"></input>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
												<?php echo form_close();?>
											</div>
										</div>
									</div>
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel"><b>Anda yakin ingin menghapus akun?</b></h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												</div>
												<?php echo form_open("User/hapus"); ?>
												<div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
													<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
												</div>
												<?php echo form_close();?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>