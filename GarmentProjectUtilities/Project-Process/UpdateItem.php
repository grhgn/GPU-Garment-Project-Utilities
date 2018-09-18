<?php
	include "Connector.php";
	$sqls="select * from dataitem";
	$query=mysqli_query($konek, $sqls);
	$data=mysqli_fetch_array($query);

	$sql = "UPDATE dataitem SET itemname='$_POST[itemname]',
								price='$_POST[price]',
								types='$_POST[type]',
								stock='$_POST[stock]'
								WHERE id='".$data[0]."'";
	$query = mysqli_query($konek, $sql);
	if($query){
		?>
			<script>
				document.location = '../Project-View/View-Home.php?page=View-ListOfItems#myModal1';
			</script>
		<?php
	}
	else{
		echo"Proses Input Gagal";
		echo "<br>";
		echo mysqli_error();
	}
?>
