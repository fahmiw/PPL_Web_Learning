<!-- 	Author 	: Fahmi Widianto
		NIM 	: 181511012 -->

	<?php

        $username = "root";
		$password = "";
		$nama_db = "dbakademis";
		$con = mysqli_connect("localhost",$username,$password,$nama_db);
        $nim = $_GET['nim'];
		$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE NIM=$nim");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
			<?php
            	echo "Kolom Telah Di Delete";
            	echo "<td>" . "<a href='latihan_09.php'> Kembali</a>" . "</td>";
            ?>
</body>
</html>