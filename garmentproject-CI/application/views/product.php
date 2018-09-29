<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style>
			.table-bordered{
				font-size: 13px;
			}			
			.table-bordered tbody tr td input{
				font-size: 13px;
			}			
			.table-bordered tbody tr .td-2{
				padding: .70em 0;
			}
			.judul h6{
				margin: 0;
			}
			.judul{
				margin: 0;
			}
			.qty{
				max-width: 100%;
				max-height: 50px;
				padding: 3px 6px;
			}			
			.col-md-7 input{
				padding: 3px 6px;
			}
			.no-left{
				padding-left: 0 !important;
			}
			.qty-title{
				margin-top: auto;
				margin-bottom: auto;
			}
			.col-md-12 button{
				width: 100%;
			}
		</style>
	</head>
	<body>
		<?php include "header-customer.php"; ?>
		<div class="container product row">
			<?php include "sidebar-product.php"; ?>
			<div class="col-md-8 card">
				<div class="row card-header" style="background-color: #1e272e; padding: .25rem 1.25rem;">
					<div class="col-12 col-md-12 judul">
						<h6>PRODUCT</h6>
					</div>
				</div>
				<div class="row card-body">
					<?php foreach($barang as $brg) { ?>
						<div class="col-md-4 produk">
								<a href="<?php echo base_url(); ?>products/details/<?php echo $brg['id']; ?>">
									<div style="position: relative">
										<div class="produk-price">Rp <?php echo $brg['price']; ?></div>
										<img src="<?php echo base_url(''); ?>upload/images/<?php echo $brg['images']; ?>" style="display:inline-block;">
									</div>
								</a>
							<div class="produk-title"><?php echo $brg['itemname']; ?></div>
							<div class="produk-add">
								<form method="post" action="<?php echo site_url('cart/edit_cart') ?>" >
									<div class="row">
										<div class="col-md-5 qty-title">Quantity: </div>
										<div class="no-left col-md-7"><input class="qty text-center form-control" type="text" name="qty" value="1"/></div>
										<div class="col-md-12">
											<button class="btn btn-primary" type="submit">Add To Cart</button>
										</div>
									</div>
									<input type="hidden" name="item_number" value="<?php echo $brg['id']; ?>" />
									<input type="hidden" name="price" value="<?php echo $brg['price']; ?>" />
									<input type="hidden" name="title" value="<?php echo $brg['itemname']; ?>" />
									<input type="hidden" name="id_person" value="<?php echo $user[0]->id ?>" />
								</form>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</body>
</html>
