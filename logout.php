<?php
    session_start();

    // Verifica della presenza di un utente loggato

    if(isset($_SESSION['email'])) {
    
        $_SESSION = []; // Reset dell'array di sessione
        session_destroy(); // Chiusura sessione
        header('Location: login.php'); // Reindirizzamento
        exit; // Fine script

    } else {
        header('Location: login.php'); // Reindirizzamento
        exit; // Fine script
    }
?>

