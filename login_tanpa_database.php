<!-- 	Author 	: Fahmi Widianto
		NIM 	: 181511012 -->

<html>
<head>
	<title>Login</title>
</head>
<body>
		<div class = "container form-signin"x>

			<?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				session_start();
               if ($_POST['username'] == 'ali' && 
                  $_POST['password'] == 'abcd') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'ali';
                  
                  echo 'Kamu memasukan username dan password benar';
                  header("location:template.php?content=home.php"); 
               }else {
                  $msg = 'Anda salah memasukan username atau password';
               }
            }
         ?>
		</div>

		<div class="container">
			<center>
			<form 	class = "form-signin" role = "form"
            		action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            		?>" 
            		method = "post"
            		style ="
            				width:	250px;
            				border:	1px solid black;
            				padding : 25px;" >
            <h4 class = "form-signin-heading" >
            	<?php echo $msg; 
            	?>		
            </h4>
            <h2>LOGIN</h2><br>
            <label 	for="username">username  </label>
            <input 	type = "text" class = "form-control" 
               		name = "username" placeholder = "username" 
               		required autofocus><br><br>
            <label 	for="password">password  </label>
            <input 	type = "password" class = "form-control"
               		name = "password" placeholder = "password" required><br><br>
            <p 		align = "right"><button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               		name = "login" >Login</button></p>
         	</form>
         </center>
		</div>
</body>
</html>