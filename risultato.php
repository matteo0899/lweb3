<?xml version = "1.0" encoding="UTF-8"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Esito</title>
		<link rel="stylesheet" href="css/quiz.css" type="text/css" />
	</head>
	<body>
	
	 <br />
	</body>
</html>
<?php
  $giuste = 0;
  $sbagliate="";
   if(isset($_POST['invio'])){
		if(!empty($_POST['domanda1']) && !empty($_POST['domanda2']) && !empty($_POST['domanda3']) && !empty($_POST['domanda4']) && !empty($_POST['domanda5'])){
		    $vet = array( // risposte inserite dall'utente
			  1 => $_POST['domanda1'],
			  2 => $_POST['domanda2'],
			  3 => $_POST['domanda3'],
			  4 => $_POST['domanda4'],
			  5 => $_POST['domanda5']);
			  
			  $risposte = array( // risposte corrette
			  1 => "2154",
			  2 => "Na'vi",
			  3 => "Parcheggiatore",
			  4 => "The Bamboo Lounge",
			  5 => "Al Pacino");
			  
			  for($i=1;$i<6;$i++){
		          if(isset($vet[$i]) && $vet[$i] == $risposte[$i]) // se la risposta data è corretta
				     $giuste++;
				  else
				     $sbagliate.="$i, ";					 
			  }
			echo "<html><h1 style='text-align:center;font-size:40px;'>RISULTATO :  $giuste/5</h1></html>";
			if($giuste < 5) // ci sono delle risposte errate
				echo"<html><br /><h2 style='text-align:center;' >Domande errate : $sbagliate</h2><br /></html>";/*modificare lo style della scritta*/
				echo "<html>
						<p class='testodomande'><strong>1) In quale anno è ambientato il film Avatar?</strong></p>					
						<p>La tua risposta: $vet[1] </p>
						<p>Risposta corretta: $risposte[1]</p>						
						<p><br /></p>
						
						<p class='testodomande'><strong>2) Qual'&egrave; il nome della razza umanoide originaria di Pandora?</strong></p>	
						<p>La tua risposta: $vet[2] </p>
						<p>Risposta corretta: $risposte[2]</p>										
						<p><br /></p>
						
						<p class='testodomande'><strong>3) Qual'&egrave; il primo lavoro da gangster di Henry Hill?</strong></p>
						<p>La tua risposta: $vet[3] </p>
						<p>Risposta corretta: $risposte[3]</p>					      
					    <p><br /></p>
						
						<p class='testodomande'><strong>4) Qual'&egrave; il nome del bar che viene bruciato da Tommy DeVito, Henry Hill e Jimmy Conway?</strong></p>
						<p>La tua risposta: $vet[4]</p>
						<p>Risposta corretta: $risposte[4]</p>							
						<p><br /></p>
						
						<p class='testodomande'><strong>5) Chi interpreta Michael Corleone nel Padrino ?</strong></p>	
						<p>La tua risposta: $vet[5] </p>
						<p>Risposta corretta: $risposte[5]</p>
						<div class='pulsanti'>				
						<button><a href='quiz.php' style='color: #000;font-weight:bold;'>Torna al quiz</a></button>
						<button><a href='index.php' style='color: #000;font-weight:bold;'>Vai alla home</a></button>	
						</div>			
				</html>";		   	 		
		}else
			{
			echo "<h1>Si prega di rispondere a TUTTE le domande</h1>";
			}
		 
	}  
?>