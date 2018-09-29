<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
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
					<table class="table table-striped text-center">
					    <thead>
							<tr>
							    <th scope="col">#</th>
							    <th scope="col">Quantity</th>
							    <th scope="col">Nama Item</th>
								<th scope="col">Item Price</th>
							</tr>
						</thead>
					    <tbody>
							<?php $no = 1; ?>
							<?php foreach($item as $itm) { ?>
								<tr>
									<th><?php echo $no++; ?></th>
									<td><?php echo $itm['qty']; ?></td>
									<td><?php echo $itm['itemname']; ?></td>
									<td><?php echo $itm['price']; ?></td>
								</tr>
							<?php } ?>
							<tr>
								<td></td>
								<td style="text-align:center" class="right"><strong>Total</strong></td>
								<td class="right" style="text-align:center"> <strong>Rp</strong> </td>
								<td class="right" style="text-align:center"><strong><?php echo $sum_price ?></strong></td>
							</tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
