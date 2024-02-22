<?php
 include("Koneksi.php"); 
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<table>
  <tr>
    <td><a href="input.php">Input Data</a></td>
    <td><a href="tampil.php">Tampil Data</a></td>
  </tr>
</table>
<table>
<?php
  $id=$_GET['id'];
                    
  $query=mysql_query("SELECT * FROM pembayaran WHERE id='".$tampildata."'");

  $data=mysql_fetch_assoc($query);

 //syntax php untuk edit data ke database
 if (isset($_POST['edit'])) {
  # code...
  $query=mysql_query("UPDATE barang SET nama_barang='".$_POST['nama_barang']."', stok='".$_POST['stok']."',harga='".$_POST['harga']."' WHERE id='$id'");

  if ($query) {
   # code...
   echo "data berhasil disimpan";
   
   $query=mysql_query("SELECT * FROM pembayaran  WHERE id='".$id."'");
   
   $data=mysql_fetch_assoc($query);

  }else{
   echo "data gagal disimpan".mysql_error();
  }
 }
?>
 <!--form edit -->
 <form method="POST">
  <tr>
   <td>id_pembayaran</td>
   <td><input type="text" name="id_pembayaran" size="30" value="<?php echo $data['id_pembayaran']; ?>"></td>
  </tr>
  <tr>
   <td>id_petugas</td>
   <td><input type="text" name="id_petugas" size="30" value="<?php echo $data['id_petugas']; ?>"></td>
  </tr>
  <tr>
   <td>NIS</td>
   <td><input type="text" name="NIS" size="30" value="<?php echo $data['NIS']; ?>"></td>
  </tr>
  <tr>
   <td>tgl_bayar</td>
   <td><input type="text" name="tgl_bayar" size="30" value="<?php echo $data['tgl_bayar']; ?>"></td>
  </tr>
  <tr>
   <td>jumlah_bayar</td>
   <td><input type="text" name="jumlah_bayar" size="30" value="<?php echo $data['jumlah_bayar']; ?>"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="edit" value="Edit"></td>
  </tr>
 </form>
</table>

</body>
</html>