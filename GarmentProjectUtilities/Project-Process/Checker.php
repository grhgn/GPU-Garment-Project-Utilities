<?php
	session_start();
	include "Connector.php";
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if(isset($_POST['login'])){
		$sql = "select * from userdata where username='$username' AND password='$password'";
		$query = mysqli_query($konek, $sql);
		$jumlah = mysqli_num_rows($query);
		if($jumlah==1){
			$_SESSION['name']=$username;
			$_SESSION['password']=$password;
			?>
				<script>
				document.location = '../Project-View/View-Home.php?page=View-ListOfItems' </script>
			<?php
		}
	else{
		?>
			<script>alert('Maaf Anda Gagal Login, Silahkan Login Kembali');
			document.location = '../Index.php'</script>
		<?php
	}
	}
?>
