<?php if($this->cart->contents()) : ?>
  <form method="post" action="<?php echo base_url(); ?>cart/process">
    <table class="table table-striped">
      <tr>
        <th>Quantity</th>
        <th>Item Title</th>
        <th style="text-align:right">Item Price</th>
      </tr>
      <?php $i = 0; ?>
      <?php foreach ($this->cart->contents() as $items) : ?>
        <tr>
            <td><?php echo $items['qty']; ?></td>
            <td><?php echo $items['name']; ?></td>
            <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['price']); ?></td>
        </tr>
          <?php echo '<input type="hidden" name="username" value="'.$this->session->userdata('username').'" />';?>
          <?php echo '<input type="hidden" name="item_name" value="'.$items['name'].'" />';?>
          <?php echo '<input type="hidden" name="item_code" value="'.$items['id'].'" />';?>
          <?php echo '<input type="hidden" name="item_price" value="'.$items['price'].'" />';?>
          <?php echo '<input type="hidden" name="item_qty" value="'.$items['qty'].'" />';?>
        <?php $i++; ?>
      <?php endforeach; ?>
      <tr>
          <td></td>
          <td class="right"><strong>Shipping</strong></td>
          <td class="right" style="text-align:right"><?php echo $this->config->item('shipping');?></td>
      </tr>
      <tr>
          <td></td>
          <td class="right"><strong>Tax</strong></td>
          <td class="right" style="text-align:right"><?php echo $this->config->item('tax');?></td>
      </tr>
      <tr>
          <td></td>
          <td class="right"><strong>Total</strong></td>
          <td class="right"><strong>Rp <?php echo $this->cart->format_number($this->cart->total());?></strong></td>
      </tr>
    </table>
    <br>
      <?php if(!$this->session->userdata('logged_in')) : ?>
        <p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary">Buat Akun</a></p>
        <p><em>Kamu Harus Login Untuk Melakukan Pembelian</em></p>
      <?php else : ?>
            <h3>Shipping Info</h3>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
              <label>Pesan Untuk Penjual</label>
              <input type="text" class="form-control" name="address2">
            </div>
            <div class="form-group">
              <label>Kota</label>
              <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group">
              <label>Negara</label>
              <input type="text" class="form-control" name="state">
            </div>
            <div class="form-group">
              <label>Kode Pos</label>
              <input type="text" class="form-control" name="zipcode">
            </div>
          <p><button class="btn btn-primary" type="submit" name="submit">Checkout</button></p>
      <?php endif; ?>
      </form>
<?php else : ?>
  <p>Tidak ada item dicart</p>
<?php endif; ?>
