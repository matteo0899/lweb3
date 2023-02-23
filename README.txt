Componenti del gruppo:
-Matteo Politi
Repository Git-Hub:
https://github.com/matteo0899/lweb3
Descrizione svolgimento:
Per l'applicazione di ciò che è stato visto a lezione riguardo l'uso XML (DOM in questo caso) ho deciso di rappresentare una videoteca, 
dotata di pagina di login, pagine specifiche per ogni film composte da tutte le informazioni inerenti il film compreso il trailer
e di un quiz che permetta a gli utenti di testare la loro conoscenza cinematografica.

Ho realizzato una pagina di registrazione (register.php) che permetta all'utente di entrare e poter visionare i contenuti.
Il sito web è infatti realizzato utilizzando il meccanismo delle sessioni, ed i contenuti sono pertento accedibili unicamente ad utenti
loggati.

Se la registrazione è avvenuta correttamente si è indirizzati alla pagina di login, dove sarà possibile loggarsi ed accedere ai contenuti

Nella homepage è possibile avere una panoramica sui film (locandina,nome film) informazioni all'interno del file Videoteca.xml.
Cliccando su uno qualsiasi dei film è possibile vedere le informazioni del film nello specifico (ISAN,titolo,anno,cast,genere) specificate sempre
nel file Videoteca.xml inoltre è possibile riprodurre il trailer nel player a fondo pagina (l'url del video è specificato nel file xml)

E' stato inoltre inserito un quiz, al termine del quale una volta aver risposto a TUTTE le domande, si visualizza il punteggio, le risposte corrette
marchiate in verde e quelle errate marchiate in rosso.

