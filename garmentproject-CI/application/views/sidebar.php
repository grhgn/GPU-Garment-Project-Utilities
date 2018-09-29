<div class="cart-block">
				<form action="cart/update" method="post">
					<table cellpadding="6" style="width:100%" border="5">
						<tr>
							<th style="text-align:center">Quantity</th>
							<th style="text-align:center">Nama Item</th>
							<th style="text-align:center">Item Price</th>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($this->cart->contents() as $items): ?>
							<input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" />
								<tr>
									<td style="text-align:center; color:black; border-color:white; background-color:white"><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" size =3</td>
									<td style="text-align:center"><?php echo $items['name']; ?></td>
									<td style="text-align:center">Rp <?php echo $this->cart->format_number($items['price']); ?></td>
								</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
						<tr>
							<td></td>
							<td style="text-align:center" class="right"><strong>Total</strong></td>
							<td class="right" style="text-align:center"> Rp <?php echo $this->cart->format_number($this->cart->total()); ?><td>
						</tr>
					</table>
					<br>
					<p><button class="btn btn-default" type="submit">Update Cart</button>
					<a class="btn btn-default" href="cart">Go To Chart</a>
				</p>
				</form>
			</div>

		<!-- <div class="panel panel-default panel-list">
			<div class="panel-heading">
				<h3 class="panel-tittle">
					Best Seller
				</h3>
			</div>
			<!-- List Group -->
				<ul class="list-group">
					<?php foreach (get_popular_h() as $popular) : ?>
						<li class="list-group-item"><a href="<?php echo base_url(); ?>products/details/<?php echo $popular->id; ?>"><?php echo $popular->title; ?></a></li>
					<?php endforeach; ?>
				</ul> -->
