<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .card-body{
      border-style: groove ;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius:5px;
    }
    #produkk {
      margin-bottom: 10px;
    }
    .background{
      right: 25px;
    }
    .background img{
      width: 100%;

    }
    </style>
  </head>
  <body>
    <?php include "header-customer.php"; ?>
    <div class="container product row" id="produkk">
      <div class="col-md-4 background">
        <img src="<?=base_url()?>assets/images/G.png">
      </div>
      <div class="col-md-8 formm">
        <div class="row card-header" style="background-color: #1e272e; padding: .25rem 1.25rem;">
          <div class="col-12 col-md-12 judul">
            <h6>DETAIL TRANSACTION</h6>
          </div>
        </div>
        <div class="row card-body">
          <div class="col-12 col-md-12 table">
          <form method="post" action="daftar_transaksi">
            <table class="table table-striped">
              <tr>
                <th>Quantity</th>
                <th>Item Title</th>
                <th style="text-align:right">Item Price</th>
              </tr>
              <?php $i = 0; ?>
              <?php foreach ($item as $items) : ?>
                <tr>
                    <td><?php echo $items['qty']; ?></td>
                    <td><?php echo $items['itemname']; ?></td>
                    <td class="right" style="text-align:right">Rp <?php echo ($items['price']); ?></td>
                </tr>
                  <?php echo '<input type="hidden" name="username" value="'.$this->session->userdata('username').'" />';?>
                  <?php echo '<input type="hidden" name="item_name" value="'.$items['itemname'].'" />';?>
                  <?php echo '<input type="hidden" name="item_code" value="'.$items['id'].'" />';?>
                  <?php echo '<input type="hidden" name="item_price" value="'.$items['price'].'" />';?>
                  <?php echo '<input type="hidden" name="item_qty" value="'.$items['qty'].'" />';?>
                <?php $i++; ?>
              <?php endforeach; ?>
              <tr>
                  <td></td>
                  <td class="right"><strong>Shipping</strong></td>
                  <td class="right"><strong></strong></td>
              </tr>
              <tr>
                  <td></td>
                  <td class="right"><strong>Tax</strong></td>
                  <td class="right"><strong></strong></td>
              </tr>
              <tr>
                  <td></td>
                  <td class="right"><strong>Total</strong></td>
                  <td class="right" style="text-align:right"><strong>Rp <?php echo $sum_price ;?></strong></td>
              </tr>
            </table>
            <br>
              <h3>Shipping Info</h3>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="address" required>
              </div>
              <div class="form-group">
                <label>Pesan Untuk Penjual</label>
                <input type="text" class="form-control" name="message" required>
              </div>
              <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" name="city" required>
              </div>
              <div class="form-group">
                <label>Negara</label>
                <input type="text" class="form-control" name="state" required>
              </div>
              <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" class="form-control" name="zipcode" required>
              </div>
              <p><button class="btn btn-primary" type="submit" name="submit">Checkout</button></p>
              </form>
        </div>
      </div>
    </div>
  </div>
    <?php include "footer.php"; ?>

    <script>
    <?php if (isset($pesan)){
        echo "alert('$pesan')";
		$this->session->unset_userdata('message');
    } ?>
    </script>
  </body>
</html>
