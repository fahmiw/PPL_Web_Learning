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
    <title>LATIHAN 04</title>
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
        <tr style="background: gray">
            <td>NIM</td>
            <td>NAMA</td>
            <td>UMUR</td>
        <tr>

        <?php

        while($row = mysqli_fetch_array($result)){
            echo "<tr>"; 
            echo "<td>". $row['NIM'] . "</td>";
            echo "<td>" . $row['NAMA'] . "</td>";
            echo "<td>" . $row['UMUR'] . "</td>";
            echo "</tr>";
        }
		mysqli_close($con);
        ?>
    </table>
</body>
</html>