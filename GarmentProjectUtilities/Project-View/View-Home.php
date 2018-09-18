<?php
	include "../Project-Process/Connector.php";
    session_start();
	if(!isset($_SESSION['name'])) {
		?>
			<script type="text/javascript">
				alert("Anda Belum Login!");
				document.location = "../index.php";
			</script>
		<?php
	}
	$cumi1= mysqli_query($konek, "SELECT * FROM userdata WHERE username='".$_SESSION['name']."'");
    $cumi=mysqli_fetch_array($cumi1, MYSQLI_ASSOC);
?>
<html>
	<head>
		<title>New-Project</title>
		<script src="../jquery/jquery-1.10.2.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/navbar.css" rel="stylesheet">
		<script type="text/javascript">
		$(document).ready(function(){
		     $(window).scroll(function () {
		            if ($(this).scrollTop() > 50) {
		                $('#back-to-top').fadeIn();
		            } else {
		                $('#back-to-top').fadeOut();
		            }
		        });
		        // scroll body to 0px on click
		        $('#back-to-top').click(function () {
		            $('#back-to-top').tooltip('hide');
		            $('body,html').animate({
		                scrollTop: 0
		            }, 800);
		            return false;
		        });

		        $('#back-to-top').tooltip('show');

		});
		</script>
		<style>
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
        </style>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a class="navbar-brand" href="#"><img src="#"></a> -->
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<ul class="nav navbar-nav navbar-left">
			                <li class="dropdown active">
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			                        <span class="glyphicon glyphicon-user"></span>
			                        <strong><?php echo $cumi['username'];?></strong>
			                        <span class="glyphicon glyphicon-chevron-down"></span>
			                    </a>
			                    <ul class="dropdown-menu">
			                        <li>
			                            <div class="navbar-login">
			                                <div class="row">
			                                    <div class="col-lg-4">
			                                        <p class="text-center">
			                                            <span class="glyphicon glyphicon-user icon-size"></span>
			                                        </p>
			                                    </div>
			                                    <div class="col-lg-8">
			                                        <p class="text-left"><strong><?php echo $cumi['firstname'];echo' ';echo $cumi['lastname'] ?></strong></p>
			                                        <p class="text-left small"><?php echo $cumi['email'];?></p>
			                                        <p class="text-left">
			                                            <a href="View-Home.php?page=View-Profile" class="btn btn-primary btn-block btn-sm">View Profile</a>
			                                        </p>
			                                    </div>
			                                </div>
			                            </div>
			                        </li>
			                        <li class="divider"></li>
			                        <li>
			                            <div class="navbar-login navbar-login-session">
			                                <div class="row">
			                                    <div class="col-lg-12">
			                                        <p>
			                                            <a href="../Project-Process/Session-Destroy.php" class="btn btn-danger btn-block">Logout</a>
			                                        </p>
			                                    </div>
			                                </div>
			                            </div>
			                        </li>
			                    </ul>
			                </li>
			            </ul>
						<!-- <li class="active"><a href="Home.php"><b><?php session_start(); echo $_SESSION["name"];?></b></a></li> -->
						<li><a href="View-Home.php?page=View-ListOfTransaction"><b>Home</b></a></li>
						<li>
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Report</b><b class="caret"></b></a>
		                    <ul class="dropdown-menu multi-level">
		                        <li><a href="View-Home.php?page=View-ListOfItems">List Of Items</a></li>
		                       <!--  <li class="divider"></li> -->
		                        <li class="dropdown-submenu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction Log</a>
		                            <ul class="dropdown-menu">
		                            	<li><a href="#">Today</a></li>
		                                <li><a href="#">Sort By Date</a></li>
		                                <li><a href="#">Sort By Month</a></li>
		                            </ul>
		                        </li>
		                    </ul>
		                </li>
						<li><a href="#about"><b>About</b></a></li>
					</ul>
					<form class="navbar-form navbar-right" role="form" action="../Project-View/View-Home.php?page=View-Search" method="post" name="pencarian" id="pencarian">
						<div class="form-group">
							<input type="search" name="search" class="form-control" placeholder="Search Product">
						</div>
						<a href="View-Home.php?page=View-Search"><input type="submit" name="submit" value="Search" class="btn btn-primary"></input></a>
					</form>
				</div>
			</div>
		</div>
		<div id="scroll-hide">
		<div class="inner">
		<div class="container">
			<style type="text/css">
		        body{
		            background: #EEEEEE;
		            margin-top: 75px;
		        }
	    	</style>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
							(error_reporting(0));
							if(isset($_GET['page'])){
								include $_GET['page'].'.php';
							}
							if(isset($_GET['pages'])){
								include $_GET['pages'].'.json';
							}
							else{
								"";
							}
						?>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	</body>
	</div>
</html>
