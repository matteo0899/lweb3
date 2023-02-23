<?xml version ="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/logincss.css">
</head>
   <form method="post">
    <div class="form">
       <h1>LOGIN</h1>
	     <div class="input">
			   <input type="text" class="inputT" name="email" placeholder="Email"/><br />
			   <input type="password" class="inputT" name="password" placeholder="Password"/><br />
			   <input type="submit" name="loginbtn" class="invio" value="LOGIN" />
	   	 </div>
		     <br /><p class="link">Non sei registrato? <a href="register.php">Crea un account</a></p>
	</div>
	</form>
</html>

<?php

if(isset($_POST['email']) && isset($_POST['password'])){
	//assegno i valori contenuti in $_POST a 2 variabili
	
	$email = $_POST['email']; 
	$password = $_POST['password'];
	include("connection.php");
 	
	if($conn){ // se la connessione avviene correttamente
		
      if(isset($_POST['loginbtn'])) { // controllo che i campi siano settati
   	     
		if(empty($email) || empty($password)) // controllo campi vuoti
	     
			echo '<p style="color:#fff;text-align:center;font-size:20px;">Email o password mancanti</p>';
	     
		else{
	  	 
			$query = "SELECT * FROM utente WHERE email='$email' AND
			          password='$password'";
	        $ris = mysqli_query($conn,$query);
			  
			if(mysqli_num_rows($ris)>0){ // c'è una corrispondenza nel DB
			    session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['data'] = time();
				$_SESSION['permesso'] = 1000;
				header("location: index.php");
			    exit();
			   
			}else
				echo '<p style="color:#ff7f27;text-align:center;font-size:20px;">Email o password errati</p>';
	    }	  		
	  }
	  mysqli_close($conn);
	}else
      echo 'Connessione fallita';
  
}
?>