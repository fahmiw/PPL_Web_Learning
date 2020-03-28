	<?php

        $username = "root";
		$password = "";
		$nama_db = "dbakademis";
		$con = mysqli_connect("localhost",$username,$password,$nama_db);
		$result = mysqli_query($con, "SELECT * FROM mahasiswa");

?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />
    <title>LATIHAN</title>
    <style>
        table{
        width: 50%;
        text-align: center;
		}
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
		}

        tr:nth-child(even){
        background-color: #dddddd;  
		}f

        th, td {
        padding: 10px;
		}

    </style>
</head>
<body>


    <table align = "center">
        <?php

            echo "NIM" . "    " . "NAMA" . "    " . "UMUR";
            echo "<br>";
        while($row = mysqli_fetch_array($result)){

            echo $row['NIM'];
            echo str_repeat("&nbsp;", 10);
            echo $row['NAMA'];
            echo str_repeat("&nbsp;", 10);
            echo $row['UMUR'];
            echo str_repeat("&nbsp;", 10);
            echo "<br>";
        }
		mysqli_close($con);
        ?>
    </table>
</body>
</html>