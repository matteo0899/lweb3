<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" href="css/quiz.css" type="text/css" />
		<div class="topbar">
		  <a class="attivo" href="index.php"><img src="./img/home.jpg" />Home</a>
		  <a class="attivo" href="quiz.php"><img src="./img/quiz.png" />Quiz</a>
		  <a class="attivo" href="logout.php"><img src="./img/logout.png" />Esci</a>
		</div>
</head>
<body>
<div class="center">
    <?php 
    error_reporting(E_ALL & ~E_WARNING); // disattiva soltanto i warning
	$Domande = array(
		1 => array(
			 'Domanda' => 'In quale anno è ambientato il film Avatar?',
			 'Risposte' => array(
			 	'A' => '2370',
			    'B' => '2154',
				'C' => '2089'
			  ),
			   'Corretta' => 'B'
			),
		2 => array(
			 'Domanda' => 'Il nome della razza umanoide originaria di Pandora',
			 'Risposte' => array(
			 	'A' => 'Navi',
			    'B' => 'Nagi',
				'C' => 'Naqui'
			  ),
			  'Corretta' => 'A'
			),			
		3 => array(
			 'Domanda' => 'Qual\'è il primo lavoro da gangster di Henry Hill?',
			 'Risposte' => array(
			 	'A' => 'Contrabbando di sigarette',
			    'B' => 'Furto di auto',
				'C' => 'Parcheggiatore'
			  ),
			  'Corretta' => 'C'
			),
		4 => array(
			 'Domanda' => 'Qual\'è il nome del bar che viene bruciato da Tommy DeVito, Henry Hill e Jimmy Conway?',
			 'Risposte' => array(
			 	'A' => 'The Bamboo Lounge',
			    'B' => 'Gino\'s Pizzeria',
				'C' => 'The Three Clubs'
			  ),
			  'Corretta' => 'A'
			),
		5 => array(
			 'Domanda' => 'Chi interpreta Michael Corleone nel Padrino ?',
			 'Risposte' => array(
			 	'A' => 'Marlon Brando',
			    'B' => 'Robert De Niro',
				'C' => 'Al Pacino'
			  ),
			  'Corretta' => 'C'
			)			
	); 
    ?>

    <form action="#" method="post" name="quizz" id="quiz">

    <ol>
    <?php foreach ($Domande as $Errate => $val){ ?>

    <li>
        <h4><?php echo $val['Domanda']; ?></h4>            <!--Stampa a schermo ogni domanda-->
        <?php 
            foreach ($val['Risposte'] as $lettera => $Risposta){ 
            $testo = 'domanda-'.$Errate.'-risposte-'.$lettera;
        ?>
        <div>
            <input type="radio" name="risposte[<?php echo $Errate; ?>]" id="<?php echo $testo; ?>" value="<?php echo $lettera; ?>" />
            <label for="<?php echo $testo; ?>"> <?php echo $Risposta; ?> </label>
        </div>
        <?php } ?>
    </li>

    <?php } ?>
    </ol>
	<p><input type="submit" class="invio" name="invio" value="INVIO" />&emsp;<input type="reset" class="reset" value="CANCELLA" /></p>
    </form>

    <?php

    $corrette = array();

    foreach ($Domande as $risposte) {
        $corrette[] = $risposte['Corretta'];
    }

      if (isset($_POST['risposte'])){
            $Risposte = $_POST['risposte']; 
            foreach ($Risposte as $Key => $val){
                //echo $Key . $Value . '<br>'; 
            }
      }
      
       if(isset($_POST['invio'])){
		    $punti = 0; 
		    for($i=0; $i < count($corrette); $i++) {
		        if ($Risposte[$i+1] == $corrette[$i]) 
		            $punti++;
		    }
		        echo "<br /><h1 style='text-align:left;'>Punteggio: " . $punti . "/5</h1>"; ?>
				<br />
		        <h2>Le tue risposte</h2>
				<br />
		         <ol>
		         <?php
		            foreach ($Domande as $Errate => $val){ ?>
		        <li>
		            <h4><?php   
		            echo $val['Domanda']; ?></h4>
		         </li>
		            <?php   
		                foreach ($val['Risposte'] as $lettera => $Risposta){
		                ?>
		                <div>
		                <?php
		                if ($lettera == $val['Corretta']) {
		                    if($Risposte[$Errate] == $val['Corretta']){
		                        echo "<span style='color: green';>" . $lettera.' '.$Risposta . "</span>";
		                    }else{
		                        echo "<span style='color: red';>" . $lettera.' '.$Risposta . "</span>";
		                    }
		            ?>
		           
		                <?php 
		                }
		                else {
		                    echo $lettera.' '.$Risposta;
		                }   
		                ?>
		                </div>
		                <?php } ?>
		        </li>
		     
		       <?php } } ?>
		        </ol>
</div>				
</body>
</html>
