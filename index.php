<?xml version ="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm11-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: login.php');
	   
	   $videoteca = simplexml_load_file("videoteca.xml") or die ("Errore");
	   $email = $_SESSION['email'];
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/index.css" type="text/css" />
		<div class="sidebar">
		  <p><img src="./img/home.jpg" /><br /><a class="active" href="index.php">Home</a></p>
		  <p><img src="./img/quiz.png" /><a class="active" href="quiz.php">Quiz</a></p>
		  <p><img src="./img/logout.png" /><a class="active" href="logout.php">Esci</a></p>
		</div>
	</head>

	<body>
		<br />
		<div class="home">
	     <img class="banner-home" src="./img/banner_home.png"/>
		<!--INIZIO RIGA -->
          <div class="riga">
		     <!--COLONNA 1 -->
				 <div class="colonna">
				   <button name="btn0" class="icone"><a href="./film/inception.php"><img src="./img/copertine/inception1.jpg" /></a></button>
                    <p><?php echo $videoteca->film[0]->titolo; ?></p>
				 </div>
			 <!--COLONNA 2 -->
			<div class="colonna">
			   <button name="btn1" class="icone"><a href="./film/io_sono_leggenda.php"><img src="./img/copertine/io_sono_leggenda1.jpg" /></a></button>
				   <p><?php echo $videoteca->film[1]->titolo; ?></p>
			</div>
			<!--COLONNA 3 -->
			<div class="colonna">
			   <button name="btn2" class="icone"><a href="./film/district9.php"><img src="./img/copertine/district9_1.jpg" /></a></button>
                   <p><?php echo $videoteca->film[2]->titolo; ?></p>
			</div>
		  </div> 
		  <!--FINE RIGA --> 
		  
		  <!--INIZIO RIGA -->
          <div class="riga">
		     <!--COLONNA 1 -->
			 <div class="colonna">
			   <button name="btn3" class="icone"><a href="./film/avatar.php"><img src="./img/copertine/avatar1.jpg" /></a></button>
					<p><?php echo $videoteca->film[3]->titolo; ?></p>
			 </div>
			 <!--COLONNA 2 -->
			<div class="colonna">
			   <button name="btn4" class="icone"><a href="./film/interstellar.php"><img src="./img/copertine/interstellar1.jpg" /></a></button>
					<p><?php echo $videoteca->film[4]->titolo; ?></p>
			</div>
			<!--COLONNA 3 -->
			<div class="colonna">
			   <button name="btn5" class="icone"><a href="./film/lei.php"><img src="./img/copertine/lei1.jpg" /></a></button>
					<p><?php echo $videoteca->film[5]->titolo; ?></p>
			</div>
		  </div> 
		  <!--FINE RIGA --> 
		  
		  <!--INIZIO RIGA -->
          <div class="riga">
		     <!--COLONNA 1 -->
			 <div class="colonna">
			   <button name="btn6" value="6" class="icone"><a href="./film/taken.php"><img src="./img/copertine/taken1.jpg" /></a></button>
					<p><?php echo $videoteca->film[6]->titolo; ?></p>
			 </div>
			 <!--COLONNA 2 -->
			<div class="colonna">
			   <button name="btn7" value="7" class="icone"><a href="./film/prova_a_prendermi.php"><img src="./img/copertine/prova_a_prendermi1.jpg" /></a></button>
					<p><?php echo $videoteca->film[7]->titolo; ?></p>
			</div>
			<!--COLONNA 3 -->
			<div class="colonna">
			   <button name="btn8" value="8" class="icone"><a href="./film/quei_bravi_ragazzi.php"><img src="./img/copertine/Quei_bravi_ragazzi1.jpg" /></a></button>
					<p><?php echo $videoteca->film[8]->titolo; ?></p>
			</div>
		  </div> 
		  <!--FINE RIGA --> 
		</div> <!--FINE HOME -->
            
	</body>
	</html>
	