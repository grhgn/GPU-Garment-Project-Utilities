<div class="col-md-4 cart">
	<form action="<?php echo site_url('cart/updatee/'.$user[0]->id) ?>" method="post" style="padding: 0 10px;">
		<table class="table table-bordered table-striped text-center">
		  <thead class="thead-dark">
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
				<td class="td-2"><input name="<?php echo $itm['id_barang'] ?>" type="text" class="form-control input-qty text-center" placeholder="Username" aria-describedby="basic-addon1" value="<?php echo $itm['qty']; ?>"></td>
				<td><?php echo $itm['itemname']; ?></td>
				<td><?php echo $itm['price']; ?></td>
			</tr>
		<?php } ?>
			<tr>
				<td></td>
				<td style="text-align:center" class="right"><strong>Total</strong></td>
				<td class="right" style="text-align:center"> Rp </td>
				<td class="right" style="text-align:center"> <?php echo $sum_price ?> </td>
			</tr>
		  </tbody>
		</table>
		<p>
			<button class="btn btn-default" type="submit">Update Cart</button>
			<a class="btn btn-info" href="<?php echo site_url('Control/view_cart')?>" role="button">Go To Cart</a>
		</p>
	</form>
</div>