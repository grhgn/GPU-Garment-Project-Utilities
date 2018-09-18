<?php
	include "Connector.php";
	$sql = "insert into userdata values('','".$_POST['email']."','$_POST[firstname]','$_POST[lastname]','$_POST[username]','".md5($_POST['password'])."')";
	$query = mysqli_query($konek, $sql);
	if($query){
		?>
			<script>
				document.location = '../Index.php'
			</script>
		<?php
	}
	else{
		echo "Proses Input Gagal";
		echo "<br>";
		echo mysqli_error();
	}
?>
