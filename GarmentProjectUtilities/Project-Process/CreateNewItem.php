<?php
	include "Connector.php";
	$sql = "insert into dataitem values('','".$_POST['itemname']."','$_POST[price]','$_POST[types]','$_POST[stock]')";
	$query = mysqli_query($konek, $sql);
	if($query){
		?>
			<script>
				document.location = '../Project-View/View-Home.php?page=View-ListOfItems';
			</script>
		<?php
	}
	else{
		echo"Proses Input Gagal";
		echo "<br>";
		echo mysqli_error();
	}
?>
