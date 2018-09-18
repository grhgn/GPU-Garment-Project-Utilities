<?php 
  include ('../Project-Process/Connector.php'); 
  $id = 0;
  if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {  
    $search = $_POST['search'];  
    $sql = mysql_query("SELECT * FROM dataitem WHERE itemname LIKE '%$search%' ORDER BY itemname ASC") or die(mysql_error());
    $jumlah = mysql_num_rows($sql);   
    if ($jumlah > 0) {  
      echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
      while ($res=mysql_fetch_array($sql)) {  
        $id++; echo $id.'. ';  
        echo $res['itemname'].'
        <br>';  
      }  
    }
    else { 
      echo 'Maaf, hasil pencarian tidak ditemukan.';}  
  }   
  else {
    echo 'Masukkan dulu kata kuncinya';}  
?>