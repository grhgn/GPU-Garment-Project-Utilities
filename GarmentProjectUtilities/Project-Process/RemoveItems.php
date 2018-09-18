<?php
	include ('Connector.php');
	$sql="delete from dataitem where id='$_GET[id]'";
	$query = mysqli_query($konek, $sql);
	if($query){
		?>
			<script>
				document.location = '../Project-View/View-Home.php?page=View-ListOfItems';
			</script>
		<?php
	}
	else{
		echo"Proses Delete Gagal";
		echo "<br>";
		echo mysqli_error();
	}
?>
