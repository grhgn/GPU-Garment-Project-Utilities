<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<script src="<?= base_url('assets/js/responsiveslides.js');?>"></script>
	<!-- <script src="responsiveslides.min.js"></script> -->

	<style type="text/css">
		#intro1 img {
			margin-top: 65px;
			width: 540px;
			background-size: 100%;
			border-radius: 5px;
			transition-duration: 0.4s;
		}

		#intro2 img {
			margin-top: 10px;
			position: center;
			background-size: 100%;
			border-radius: 5px
		}

		#intro2 .produk{
			background-color: white;
			border-radius: 5px;
			margin-top: 3px;
			padding: auto;
			width: 540px;
			margin-left: 1px;
			height: 320px;
			}

		#intro2 {
			background-color: #F3F5FA;
			margin-bottom: 4px;
		}

		#intro3 {
			background-color: #EE5A24;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		#intro4 {
			background-color: #1e272e;
			color: white;
		}

		#intro5 {
			background-color: black;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#intro2 strong {
			font-size: 15px;
			color: black;
			font-family: 'Josefin Sans', sans-serif;
		}

		#intro2 .produk img{
			width: 40px;
		}

		#intro3 span{
			font-family: cursive;
			font-size: 14px;
			margin-left: 3px;
			color: white;
		}

		#intro2 .judul{
			background-color: #dcdde1;
			border-radius: 5px;
			margin-top: 10px;
			font-family: monospace;
		}

		#intro2 .jenis{
			margin-top: 20px;
		}

		#intro2 .gambar{
			margin: auto;
		}

		#intro1 {
			margin-bottom: 10px;
		}

		#intro4 .logo img{
			width: 300px;
		}

		#intro4 .about {
			margin-top: 20px;
			font-size: 13px;
		}

		#intro4 .contact {
			margin-top: 20px;
			font-size: 13px;
		}

		.rslides {
			position: relative;
			list-style: none;
			overflow: hidden;
			width: 100%;
			padding: 0;
			margin: 0;
		}

		.rslides li {
			-webkit-backface-visibility: hidden;
			position: absolute;
			display: none;
			width: 100%;
			left: 0;
			top: 0;
		}

		.rslides li:first-child {
			position: relative;
			display: block;
			float: left;
		}

		.rslides img {
			display: block;
			height: auto;
			float: left;
			width: 100%;
			border: 0;
		}

		#navs a{
			font-weight: bold;
			font-family: 'Raleway', sans-serif;
		}
	</style>
</head>
<body>
	<?php include "header-customer.php"; ?>
	<section id="intro1">
	    <div class="container">
	      <div class="row">
	        <div class="col-6 mx-auto mx-sm-0 col-sm-6 col-md-6 int1">
	          <img src="<?=base_url()?>assets/images/garment.jpg">
	        </div>
	        <div class="col-6 mx-auto mx-sm-0 col-sm-6 col-md-6 d-flex flex-column justify-content-center text-center text-sm-left foo">
	          <h4>Garment</h4>
	          <p></p>
	          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	          consequat.</p>
	          <p></p>
	          <p class="fw-light mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse
	          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
	        </div>
	      </div>
	    </div>
	 </section>

	 <section id="intro2">
	    <div class="container">
	      <div class="row">
	      	<div class="col-6 mx-auto mx-sm-0 col-sm-6 col-md-6 d-flex flex-column">
	          <div class="judul text-center">
	          	<h4>Our Product</h4>
	          </div>
	          <div class="produk">
	          	<div class="row">
		          	<div class="col-4 text-sm-right gambar">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>T-SHIRT</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
		          <div class="row">
		          	<div class="col-4 text-sm-right gambar">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>JEANS</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
		          <div class="row">
		          	<div class="col-4 text-sm-right">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>BASIC POLO</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
		          <div class="row">
		          	<div class="col-4 text-sm-right">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>OUTERWEAR</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
		          <div class="row">
		          	<div class="col-4 text-sm-right">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>JACKET</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
		          <div class="row">
		          	<div class="col-4 text-sm-right">
		          		<img src="<?=base_url()?>assets/images/icon.png">
		          	</div>
		          	<div class="col-4 text-center jenis">
		          		<strong>CHINO</strong>
		          	</div>
		          		<div class="col-4 text-center">
		          	</div>
		          </div>
	          </div>

	        </div>

	        <div class="col-6 mx-auto mx-sm-0 col-sm-6 col-md-6">
	        	<ul class="rslides">
	        		<li><img src="<?=base_url()?>assets/images/images1.jpg" alt=""></li>
	        		<li><img src="<?=base_url()?>assets/images/images2.jpg" alt=""></li>
	        		<!-- <li><img src="3.jpg" alt=""></li> -->
	        	</ul>
	         </div>
	      </div>
	    </div>
	  </section>

	  <section id="intro3">
	    <div class="container">
	      <div class="row">
	      	<div class="col-1"></div>
	        <div class="col-2 mx-auto mx-sm-0 col-sm-2 col-md-2">
	         	<div class="row test">
	         		<div class="col-3" style="margin: auto;">
	         			<img src="<?=base_url()?>assets/images/delivery.png">
	         		</div>
	         		<div class="col-9 text-sm-left" style="margin: auto;">
	         			<span>FREE DELIVERY</span>
	         		</div>
	         	</div>
	    	</div>
	    	<div class="col-2 mx-auto mx-sm-0 col-sm-2 col-md-2">
	    		<div class="row test" align="center" >
	         		<div class="col-12" style="margin: auto;">
	         			<img src="<?=base_url()?>assets/images/panah.png">
	         		</div>
	         	</div>
	    	</div>
	    	<div class="col-2 mx-auto mx-sm-0 col-sm-2 col-md-2">
	         	<div class="row test">
	         		<div class="col-3" style="margin: auto;">
	         			<img src="<?=base_url()?>assets/images/terpercaya.png">
	         		</div>
	         		<div class="col-9" style="margin: auto;">
	         			<span>TRUSTED</span>
	         		</div>
	         	</div>
	    	</div>
	    	<div class="col-2 mx-auto mx-sm-0 col-sm-2 col-md-2">
	    		<div class="row test" align="center">
	         		<div class="col-12" style="margin: auto;">
	         			<img src="<?=base_url()?>assets/images/panah.png">
	         		</div>
	         	</div>
	    	</div>
	    	<div class="col-2 mx-auto mx-sm-0 col-sm-2 col-md-2">
	         	<div class="row test">
	         		<div class="col-3" style="margin: auto;">
	         			<img src="<?=base_url()?>assets/images/phone.png">
	         		</div>
	         		<div class="col-9" style="margin: auto;">
	         			<span>021 256543</span>
	         		</div>
	         	</div>
	    	</div>
	    	<div class="col-1"></div>
	      </div>
		</div>
	 </section>

	 <section id="intro4">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-6 mx-auto mx-sm-0 col-sm-5 col-md-5 logo">
	 				<img src="<?=base_url()?>assets/images/logo.png">
	 			</div>
	 			<div class="col-3 mx-auto mx-sm-0 col-sm-3 col-md-3 about">
	 				<h6>About Us:</h6>
	 				<p>Web ini dibangun oleh kami mahasiswa S1 Teknik Informatika Telkom University guna memenuhi tugas besar mata kuliah Implementasi Perangkat Lunak kami</p>
	 				<p>. Chindy Amalia | Galih Rahagi | Muhammad Fauzan Rahman | Alfrisa Diva Wardhana . </p>
	 				<a href="#" style="color: grey; font-family: cursive;" >Kritik dan Saran</a>
	 			</div>
	 			<div class="col-3 mx-auto mx-sm-0 col-sm-3 col-md-3 contact">
	 				<img src="<?=base_url()?>assets/images/email.png"><span> garment_project@gmail.com</span>
	 				<p></p>
	 				<p>Call Center:</p>
	 				<img src="<?=base_url()?>assets/images/telfon.png"><span> 021 256543</span>
	 				<br>
	 				<img src="<?=base_url()?>assets/images/handphone.png"><span> 0812 58315267</span>
	 			</div>
	 		</div>
	 	</div>
	 </section>

	 <?php include "footer.php"; ?>
	 <!-- <section id="intro5">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-12 mx-auto mx-sm-0 col-sm-12 col-md-12" style="margin: auto;">
	 				<span class="text-sm">Copyright © 2018 | Garment Project, Dayeuh Kolot, Bandung, Indonesia</span>
	 			</div>
	 		</div>
	 	</div>
	 </section> -->

	 <script>
	   $(function() {
	     $(".rslides").responsiveSlides();
	   });
	 </script>

</body>
</html>
