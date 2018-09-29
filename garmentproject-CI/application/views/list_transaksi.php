<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href="<?=base_url('assets/css/bootstrap.css')?>" >
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/style.css')?>" >
	<link rel='stylesheet' type='text/css' href="<?=base_url('assets/css/navbar.css')?>" >
	<link rel='stylesheet' type='text/css' href="<?=base_url ('assets/css/bootstrap-theme.min.css')?>" >
	<link rel='stylesheet' type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</head>
<body id="list">
	<?php $username = ($this->session->userdata['username']); ?>
	<?php include "header.php"; ?>
	<script type="text/javascript">
		$('.navbar-nav li:nth-child(3)').addClass("active");
	</script>
	<div id="scroll-hide">
		<div class="inner">
			<div class="container">
				<style type="text/css">
					body{
						background: #EEEEEE;
					}
					.back-to-top {
						cursor: pointer;
						position: fixed;
						bottom: 20px;
						right: 100px;
						display:none;
					}

					.navbar-login
					{
						width: 305px;
						padding: 10px;
						padding-bottom: 0px;
					}

					.navbar-login-session
					{
						padding: 10px;
						padding-bottom: 0px;
						padding-top: 0px;
					}

					.icon-size
					{
						font-size: 87px;
					}
					#scroll-hide{
					  overflow: hidden;
					}
					#scroll-hide .inner{
					  overflow:auto;
					  margin:20px;
					  padding-right:20px;
					}
					.table-striped{
						margin-top: 20px;
					}
					.table thead th {
						vertical-align: bottom;
						border: none;
					}
				</style>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="panel panel-default card">
						<div class="card-body">
							<div id="scroll-hide">
								<div class="inner">								
									<div class="border-bottom border-success" style="position: relative; padding-bottom: 15px; margin-bottom: 40px">
										<b>List Of Transactions</b>
									</div>
									<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th> No</th>
												<th> Customer</th>
												<th> Address</th>
												<th> Message</th>
												<th> City</th>
												<th> State</th>
												<th> ZipCode</th>
												<th> <center>Action</center></th>
											</tr>
										</thead>
										<tbody>
										  <?php $counter = 1; ?>
										  <?php foreach ($transaksi as $data) {
										  ?>
											<tr>
											  <td><center><?php echo $counter;?></td>
											  <td><?php echo $data['customer'];?></td>
											  <td><center><?php echo $data['address'];?></td>
											  <td><center><?php echo $data['message'];?></td>
											  <td><center><?php echo $data['city'];?></td>
											  <td><center><?php echo $data['state'];?></td>
											  <td><center><?php echo $data['zipcode'];?></td>
											   <td style="text-align: center;">
												 <a href="" id="" data-target="#edit_<?php echo $data['customer'] ?>" data-original-title="Edit this user" data-toggle="modal" type="button" class="btn btn-sm btn-warning" value="<?php echo $data['customer'];?>"><i class="fas fa-edit"></i></a>
												 <a href="" id="" data-target="#delete_<?php echo $data['customer'] ?>" data-original-title="Remove this user" data-toggle="modal" type="button" class="btn btn-sm btn-danger" value="<?php echo $data['customer'];?>"><i class="fas fa-trash"></i></a>
											  </td>
											</tr>
											  <?php $counter++; } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>" ></script>
	<script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>" ></script>
	<script type="text/javascript" src="<?=base_url('assets/js/modal.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/transition.js')?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
