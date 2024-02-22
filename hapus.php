<?php
include("koneksi.php");
$id=$GET['id'];
$query=mysql_query("DELETE FROM pembayaran WHERE id='".$id."'"  );
header("location:tampil.php");
?>
