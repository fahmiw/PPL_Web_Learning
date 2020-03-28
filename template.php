<!-- 	Author 	: Fahmi Widianto
		NIM 	: 181511012 -->

<?php
if (!isset($_GET['content'])){
	$vcontent='latihan_10.php';
}
else
{
	$vcontent=$_GET['content'];
}
?>

<html>
<head>
	<title>Web</title>
	<style>
		table{
		width: 100%;;
		}
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
		}

        tr:nth-child(even){
        background-color: grey;  
		}
        th, td, tr {
        padding: 10px;
		}
	</style>
</head>
<body>
	<table id="01" align="center">
		<tr height="180">
			<td></td>
		</tr>

		<tr height="50">
			<td> 
				<a href="template.php?content=<?php echo 'home.php' ?>">HOME</a> |
				<a href="template.php?content=<?php echo 'berita.php' ?>">BERITA</a> |
				<a href="template.php?content=<?php echo 'latihan_09.php' ?>">MAHASISWA</a> |
				<a href="template.php?content=<?php echo 'latihan_10.php' ?>">SEARCH</a> |
				<a href="template.php?content=<?php echo 'session_destroy.php' ?>">LOGOUT </a>
			</td>
		</tr>
		
		<tr height="260" align="center">
			 <td><?php  if(isset($_GET["content"])) 
    						include($_GET["content"]);
   							session_start(); /* Starts the session */
    						if(!isset($_SESSION['username'])){
    							header("location:login_tanpa_database.php");
    					}		
			 ?></td>
		</tr>
		
		<tr height="100">
			<td></td>
		
		</tr>
	</table>
</body>
</html>