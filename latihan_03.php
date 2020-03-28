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
        <tr style="background: gray">
            <td>NIM</td>
            <td>NAMA</td>
            <td>UMUR</td>
        <tr>
    <?php  
        $i =1;
        while ($i <= 10){
        ?>
        <tr>
            <td>181511012</td>
            <td>FAHMI WIDIANTO</td>
            <td>20</td>
        </tr>
    <?php
    $i=$i+1;
    }
    ?>

    </table>
</body>
</html>