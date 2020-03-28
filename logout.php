<!-- 	Author 	: Fahmi Widianto
		NIM 	: 181511012 -->

<?php
session_start();

session_destroy();

header('URL:login_tanpa_database.php');
?>