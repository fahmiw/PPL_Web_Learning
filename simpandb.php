<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dbakademis");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nim = $_POST['txt_nim'];
$nama = $_POST['txt_nama'];
$umur = $_POST['txt_umur'];
$alamat = $_POST['txt_alamat'];
 
// Attempt insert query execution
$sql = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$umur', '$alamat')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "<a href = 'latihan_08.php'>kembali</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    "<a href = 'latihan_08.php'>kembali</a>";
}
 
// Close connection
mysqli_close($link);
?>