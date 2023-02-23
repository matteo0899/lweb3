<?xml version = "1.0" encoding="UTF-8"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	   
<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: login.php');
?> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>QUIZ XHTML-CSS</title>
		<link rel="stylesheet" href="css/quiz.css" type="text/css" />
	</head>
	<body>
	  <img src="img/logo_lweb.png" alt="logo pagina" class="logo" />
	  <h1 class="titolo">Testa le tue conoscenze con il nostro quiz</h1>
	  <br />
	  <form action="risultato.php" method="post">
	  
	  
		<p class="testodomande"><strong>1) In quale anno è ambientato il film Avatar?</strong></p>
		<select name = "domanda1" id="1">
		    <option disabled selected value>-- Scegli una risposta --</option>
			<option disabled value = "2370">2370</ option>		
			<option value = "2154">2154</ option>
			<option value = "2089">2089</ option>						
		</select>
		
		<p class="testodomande"><strong>L'elemento &lt;span&gt; e' block level oppure inline ?</strong></p>
		<input type="checkbox" name="domanda2" value="blocklevel" disabled /><label>block-level</label><br />
		<input type="checkbox" name="domanda2" value="inline" checked disabled /><label>inline</label><br /><br />

		<p class="testodomande"><strong>Indicare uno strumento per la validazione di documenti html</strong></p>
		<input type="text" placeholder="w3cvalidator" name="domanda3" disabled /><br />

		<p class="testodomande"><strong>Quale tra i seguenti NON e' un linguaggio di markup?</strong></p>
		<input type="checkbox" name="domanda4" value="HTML" disabled /><label>HTML</label><br />
		<input type="checkbox" name="domanda4" value="UML" checked  disabled /><label>UML</label><br />
		<input type="checkbox" name="domanda4" value="XML" disabled /><label>XML</label><br />

		<p class="testodomande"><strong>A cosa serve la DTD ?</strong></p>
		<input type="checkbox" name="domanda5" value="d51" checked disabled /><label>A definire le componenti ammesse nella costruzione di un documento XML.</label><br />
		<input type="checkbox" name="domanda5" value="d52" disabled /><label>A definire lo stile di una pagina HTML</label><br />
		<input type="checkbox" name="domanda5" value="d53" disabled /><label>Permette di costruire pagine web dinamiche</label><br />

		<p class="testodomande"><strong>In un documento HTML qual è il posto corretto per fare riferimento a un foglio di stile esterno?</strong></p>
		<input type="checkbox" name="domanda6" value="head" checked disabled /><label>Nella sezione head</label><br />
		<input type="checkbox" name="domanda6" value="body" disabled /><label>Nella sezione body</label><br />
		<input type="checkbox" name="domanda6" value="footer" disabled /><label>Nella sezione footer</label><br />

		<p class="testodomande"><strong>Quale comando viene utilizzato per cambiare il colore di un elemento di testo?</strong></p>
		<input type="checkbox" name="domanda7" value="textcolor" checked disabled /><label>text-color</label><br />
		<input type="checkbox" name="domanda7" value="fgcolor" disabled /><label>fgcolor</label><br />
		<input type="checkbox" name="domanda7" value="fontcolor" disabled /><label>font-color</label><br />

		
		<p>
		<br />
		<br />
		</p>
	</form>
	</body>
	<footer><p style="text-align:center;"><a style='color:#fff;' href='index.php'>Torna alla home</a></p></footer>
</html>
