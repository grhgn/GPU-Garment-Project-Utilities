<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body id="list" style="margin: 0">
	<?php $username = ($this->session->userdata['username']); ?>
	<?php include "Header.php"; ?>
	<script type="text/javascript">
		$('.navbar-nav li:nth-child(3)').addClass("active");
	</script>
	<div id="scroll-hide">
		<div class="inner">
			<div class="container">
				<style type="text/css">
					body{
						background: #EEEEEE;
						margin-top: 75px;
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
					#table_id{
						margin-top: 20px;
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
										<b>List Of Items</b>
										<input type="submit" href="#" data-toggle="modal" class="btn btn-success float-right" name="login" data-target="#myModal" value="+">
									</div>
									<table id="table_id" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th width="50"><center>No.</th>
												<th width="300"><center>Item Name</th>
												<th width="200"><center>Price/Item</th>
												<th width="160"><center>Types</th>
												<th width="160"><center>Stock Item</th>
												<th width="200"><center>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $counter = 1; ?>
											<?php foreach ($barang as $data) { ?>
												<tr>
													<td width="50"><center><?php echo $counter;?></td>
													<td width="300"><?php echo $data['itemname'];?></td>
													<td width="200"><center><?php echo $data['price'];?></td>
													<td width="160"><center><?php echo $data['types'];?></td>
													<td width="160"><center><?php echo $data['stock'];?></td>
													<td><center>
														<a href="" id="" data-target="#edit_<?php echo $data['id'] ?>" data-original-title="Edit this user" data-toggle="modal" type="button" class="btn btn-sm btn-warning" value="<?php echo $data['id'];?>"><i class="fas fa-edit"></i></a>
														<a href="" id="" data-target="#delete_<?php echo $data['id'] ?>" data-original-title="Remove this user" data-toggle="modal" type="button" class="btn btn-sm btn-danger" value="<?php echo $data['id'];?>"><i class="fas fa-trash"></i></a>
													</td>
												</tr>
												<!--FORM MODAL EDIT-->
												<div class="modal fade" id="edit_<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myModalLabel"><b>Edit Item</b></h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">
																<form id="signupform" class="form-horizontal" role="form" action="<?php echo site_url('Barang/edit') ?>" method="POST">
																	<div class="form-group row">
																		<label for="email" class="col-md-3 control-label">Item Name</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" name="itemname" placeholder="Name Of Item" value="<?php echo $data['itemname'];?>" required>
																			<input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="firstname" class="col-md-3 control-label">Price/item</label>
																		<div class="col-md-9">
																			<input type="text" class="form-control" name="price" placeholder="Price Of Item" value="<?php echo $data['price'] ?>" required>
																		</div>
																	</div>

																	<div class="form-group row">
																		<label for="firstname" class="col-md-3 control-label">Types</label>
																		<div class="col-sm-7 col-md-7">
																			<div class="input-group">
																				<div id="radioBtn2" class="btn-group">
																					<a class="btn btn-primary btn-sm active" id ="pcs" name="pcs" data-toggle="type" data-title="Pcs" value="PCS">PCS</a>
																					<a class="btn btn-primary btn-sm notActive" id="pcs2" data-toggle="type" data-title="Pack" value="PACK">PACK</a>
																					<input type="hidden" name="type" id="type" value="Pcs">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="form-group row">
																		<label for="lastname" class="col-md-3 control-label">Stock Item</label>
																		<div class="col-sm-7 col-md-4">
																			<div class="input-group">
																				<span class="input-group-btn">
																					<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="stock">
																						<i class="fas fa-minus"></i>
																					</button>
																				</span>
																				<input type="text" name="stock" class="form-control input-number" value="<?php echo $data['stock'] ?>" min="1" max="1000000">
																				<span class="input-group-btn">
																					<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="stock">
																						<i class="fas fa-plus"></i>
																					</button>
																				</span>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<input type="submit" class="btn btn-Warning" name="addnew" value="Submit"></input>
																		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<div id="delete_<?php echo $data['id']; ?>" class="modal fade" role="dialog">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Anda ingin menghapus barang <?php echo $data['itemname']; ?> ?</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<?php echo form_open("Barang/hapus"); ?>
																<input type="hidden" name="id" class="form-control" value="<?php echo $data['id'];?>" id="id" required>
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
																<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
															</div>
															<?php echo form_close(); ?>
														</div>
													</div>
												</div>
											<?php $counter++; } ?>
										</tbody>
									</table>
									<ul class="pagination">
										<li>
											<?php
											$jmldata = count($barang);
											$jumlah_halaman = ceil($jmldata / 15);
											for($i = 1; $i <= $jumlah_halaman; $i++)
												if($i != 1) {
													echo "<a href=View-Home.php?page=View-ListOfItems&halaman=$i>$i</a>";
												}
											?>
											<br>
											<b>Total Item : <?php echo $jmldata;?></b>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><b>Add New Item</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form id="signupform" class="form-horizontal" role="form" action="<?php echo site_url('Barang/add') ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="email" class="col-md-3 control-label">Item Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="itemname" placeholder="Name Of Item"  required>
							</div>
						</div>
						<div class="form-group row">
							<label for="firstname" class="col-md-3 control-label">Price/item</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="price" placeholder="Price Of Item" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="firstname" class="col-md-3 control-label">Types</label>
							<div class="col-sm-7 col-md-7">
								<div class="input-group">
									<div id="radioBtn" class="btn-group">
										<a class="btn btn-primary btn-sm active" data-toggle="types" data-title="Pcs" value="PCS">PCS</a>
										<a class="btn btn-primary btn-sm notActive" data-toggle="types" data-title="Pack" value="PACK">PACK</a>
									</div>
									<input type="hidden" name="types" id="types" value="Pcs">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="lastname" class="col-md-3 control-label">Stock Item</label>
							<div class="col-sm-7 col-md-4">
								<div class="input-group">
									<span class="input-group-btn">
										<button type="button" class="btn btn-danger btn-number1"  data-type="minus" data-field="stock1">
											<i class="fas fa-minus"></i>
										</button>
									</span>
									<input type="text" name="stock1" class="form-control input-number" value="10" min="1" max="1000000">
									<span class="input-group-btn">
										<button type="button" class="btn btn-success btn-number1" data-type="plus" data-field="stock1">
											<i class="fas fa-plus"></i>
										</button>
									</span>
								</div></div>
						</div>
						<div class="">
							<input type="file" name="berkas" value=""/>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-Warning" name="addnew" value="Submit"></input>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
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
