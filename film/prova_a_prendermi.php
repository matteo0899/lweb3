<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm11-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="http://localhost/compito3/css/film.css" type="text/css" />
		<div class="topbar">
		
		<div class="btn">
			<a href="../index.php">Home</a>
			<img src="http://localhost/compito3/img/home.jpg" />			
		</div>
        <div class="btn">
			<a href="../quiz.php">Quiz</a>
			<img src="http://localhost/compito3/img/quiz.png" />
		</div>
		<div class="btn">
			 <a href="../logout.php">Logout</a>
			 <img src="http://localhost/compito3/img/logout.png" />		 	 
		</div>

		</div>
	</head>

	<body>
	<?php
   session_start();
    if(!isset($_SESSION['permesso'])){
	   header('Location: login.php');
	}
	 $videoteca = simplexml_load_file("../videoteca.xml") or die ("Errore!");	
	 	echo "<br /><h1 style='text-align:center'>",$videoteca->film[7]->titolo."</h1>";
		$url = $videoteca->film[7]->trailer;		
?>
      <br />
      <p class="locandina"><img src="<?php echo $videoteca->film[7]->copertina; ?>" /></p>
	  <div style="margin-left:29.6%;">
	  <br /> 
		 <?php
		        echo "<p>ISAN : ", $videoteca->film[7]->attributes()->ISAN . "<br> </p>";
				echo "<p>Anno : ", $videoteca->film[7]->anno . "<br> </p>";
			    echo "<p>Durata : ", $videoteca->film[7]->durata . "&nbsp;minuti<br></p>";
				echo "<p>Genere : ", $videoteca->film[7]->genere . "<br></p>";
				echo "<p>Regista : ", $videoteca->film[7]->regista->nome_regista . "&nbsp;" .$videoteca->film[7]->regista->cognome_regista . "<br></p>";		   	
			    echo "<span>Cast : </span>";
				foreach($videoteca->film[7] as $cast){
					if(strlen($cast->nome_attore)>0 && strlen($cast->cognome_attore)>0)
					   echo $cast->nome_attore . "&nbsp;" . $cast->cognome_attore . ", ";
				}
		 ?>
	  </div>
	    <br />
		<br />
	    <h2 style="text-align:center;">Trama</h2>
		<div class="trama" style="width:600px;margin-left:auto;margin-right:auto;display:block;">
		 <p style="text-align:center;"><?php echo $videoteca->film[7]->trama ?></p>
		 </div>
		<br />
		<br />
		<h2 style="text-align:center;">Trailer</h2>
		<p style="text-align:center;"><embed src="<?php echo $url; ?>" width="650" height="400" title="Prova a prendermi - trailer"></p>
	</body>
</html>
	