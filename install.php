<?php

include("connection.php");	

//funzione che verifica la presenza di una tabella nel database
function if_table_exists ($conn,$tablename)
{
	//controllo se il nome della tabella passato esiste nel db
	$result = mysqli_query($conn,"SHOW TABLES LIKE '".$tablename."'");
	//conto il numero di righe risultanti
	$row=mysqli_num_rows($result);
	//$row è maggiore di 0
	if($row>0)
	{
		return true;
	}else{	
		return false;
	}
}


$table=	"CREATE TABLE if NOT EXISTS utente(
			id INT(11) NOT NULL AUTO_INCREMENT ,
			nome VARCHAR(30) NOT NULL ,
			cognome VARCHAR(30) NOT NULL ,
			email VARCHAR(30) NOT NULL ,
			password VARCHAR(30) NOT NULL ,
			PRIMARY KEY (id))";

$aggiungi = "INSERT INTO utente (nome,cognome,email,password) VALUES  
		('Matteo','Rossi','a@','pass1'),
		('Mario','Bianchi','b@','pass2'),
		('Aldo','Basso','c@','pass3'),
		('Gianna','Gianni','d@','pass4'),
		('Paolo','Paoli','e@','pass5')";

if(if_table_exists($conn,"utente"))
{
	//se la tabella esista non bisogra nè crearla nè popolarla
	//echo 'La tabella esiste!';
}
else

{
	mysqli_query($conn,$table);
		echo 'Tabella creata';
   	mysqli_query($conn,$aggiungi);
		//echo '<br />Tabella popolata';
        
	}
	 
mysqli_close($conn);
?>

