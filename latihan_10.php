<?php

        $username = "root";
		$password = "";
		$nama_db = "dbakademis";
		$con = mysqli_connect("localhost",$username,$password,$nama_db);
?>

<form action="template.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
?>
<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Alamat</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($con, "SELECT * FROM mahasiswa where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($con, "SELECT * FROM mahasiswa");		
	}
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $d['NIM']; ?></td>
		<td><?php echo $d['NAMA']; ?></td>
		<td><?php echo $d['UMUR']; ?></td>
		<td><?php echo $d['Alamat']; ?></td>
	</tr>
	<?php } ?>
</table>