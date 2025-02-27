<?php
// L'URL del WSDL che descrive il servizio SOAP
$wsdl_url = "http://localhost/sayhello";  // Indica il percorso del file WSDL

// Creazione di un oggetto SoapClient che utilizza il file WSDL
// SoapClient è una classe PHP che consente di consumare un web service SOAP
$client = new SoapClient($wsdl_url); 

// Impostiamo un nome da passare al metodo sayHello
$name = "Davide"; 

// Chiamata del metodo sayHello sul server SOAP, passando il nome
// Il risultato della chiamata sarà la risposta del server SOAP
echo $client->sayHello($name);  // Il risultato della funzione sayHello viene stampato sullo schermo
?>
