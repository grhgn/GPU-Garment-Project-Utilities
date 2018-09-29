<?php $username = ($this->session->userdata['username']); ?>
<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top">
	<div class="container">
		<ul class="navbar-nav mr-auto">
			<img src="<?=base_url()?>assets/images/logo1.png" style="width: 200px; background-size: 100%; height: 61px; margin-right: 20px;">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<strong><?= $username ?></strong>
				</a>
				<div class="dropdown-menu user" aria-labelledby="navbarDropdown">
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
									<a href="../Project-Process/Session-Destroy.php" class="btn btn-danger btn-block">Logout</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Report
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="<?php echo site_url('Control/view_list')?>">List Of Item</a>
				  <a class="dropdown-item" href="<?php echo site_url('Control/view_transaction')?>">List Of Transaction</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>
