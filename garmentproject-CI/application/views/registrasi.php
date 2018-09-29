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
      label {
        font-weight: bold;
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
            <h6>CREATE ACCOUNT</h6>
          </div>
        </div>
        <div class="row card-body">
          <div class="col-12 col-md-12">
            <form method="post" action="daftar_customer" id="signupform" class="form-horizontal" role="form">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required>
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
              </div>
              <div class="form-group">
                <label>Date Of Birth</label>
                <input type="text" class="form-control" name="tanggallahir" placeholder="Enter Date Of Bitrth" required>
              </div>
              <div class="form-group">
                <label>Home Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Home Address" required>
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" placeholder="Enter Phone Number" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
              </div>
              <!-- <div class="form-group">
                <label>Confirm Password*</label>
                <input type="password" class="form-control" name="password2" placeholder="Masukan Password Ulang">
              </div> -->
              <button name="submit" type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>

    <script>
    <?php if (isset($message)){
        echo "alert('$message')";
    } ?>
    </script>

  </body>
</html>
