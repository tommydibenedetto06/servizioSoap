<?php
// La funzione che gestisce la richiesta SOAP
// Prende un nome e restituisce una stringa di saluto
function sayHello($name) {
    return "Ciao " . $name . ", sarai lieto di sapere che sto funzionando!"; // Restituisce un saluto
}

// Creazione di un oggetto SoapServer
// Questo oggetto è il server SOAP che gestisce le richieste
// Passiamo il percorso del file WSDL per configurare il server
$server = new SoapServer("sayhello");  // Il file WSDL è "sayhello" (senza estensione)


// Registriamo la funzione sayHello nel server SOAP
$server->addFunction("sayHello"); // Registra la funzione che il server deve eseguire quando viene chiamata

// Gestiamo la richiesta SOAP
$server->handle();  // La funzione `handle()` esegue il processo di ascolto e risposta
?>
