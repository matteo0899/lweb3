<?php
 $conn = mysqli_connect("localhost","root","","compito3"); // connessione al DB host/nome utente/password/nome DB
 	if(mysqli_connect_errno()){
		echo "Impossibile connettersi";
		exit();
	}
?>