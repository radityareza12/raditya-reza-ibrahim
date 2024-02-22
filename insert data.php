<?php
require_once('koneksi.php');
$perintah=sprintf("SELECT * FROM pembayaran");
$rsproses=@mysql_query($koneksi);
$jml_data=mysql_num_rows($rsproses);
?>


<html>
<head>

<title>Menampilkan Data</title>
</head>

<body>
<table width="644" border="1" align="center">
<tr>
<td colspan="2">Tabel : pembayaran</td>
<td colspan="3">Jumlah Data <?php echo $jml_data;?></td>
</tr>
<tr>

<th width="317" align="left" scope="col">id_pembayaran</th>
<th width="140" align="left" scope="col">id_petugas</th>
<th width="91" align="left" scope="col">NIS</th>
<th width="53" align="left" scope="col">tgl_pembayaran</th>
<th width="53" align="left" scope="col">jumlah_bayar</th>
</tr>
<?php while($data=mysql_fetch_array($rsproses)) {
?>
<tr>
<td><?php echo $data['id_pembayaran'];?></td>
<td><?php echo $data['id_petugas'];?></td>
<td><?php echo $data['NIS'];?></td>
<td><?php echo $data['tgl_bayar'];?></td>
<td><?php echo $data['jumlah_bayar'];?></td>
</tr>
<?php }?>

</table>

</body>

</html>