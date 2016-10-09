_____
Project professionele website is a project made by students of the Stenden University of Applied Sciences.
_____

//In het kort!//
De website komt te bestaan uit verschillende componenten.

Core.php
Het Core.php bestand bevat een Class met hierin functies die op elke pagina opnieuw kunnen worden gebruikt. Hierin zitten zowel functies met een return value als functies zonder return value.

Pages.php
Het Pages.php bestant bevat een Class met hierin functies met betrekking tot paginas in de website. Hierin zitten functies die geen return value hebben maar die bedoeld zijn om inhoud van paginas weer te geven.

Index.php
In index.php komen de Core.php en Pages.php samen. Er word eerst een variabele aangemaakt van bijde Classes die daarna aangevraagd kunnen worden. Verder zit in de Index.php nog wat HTML om het skelet op te bouwen.

<//Het aanroepen van paginas!//>
Het aanroepen van paginas word gedaan door de $_GET["p"].
bijvoorbeeld /index.php?p=home is de home pagina.
Als de $_GET["p"] niet geset is zal de home pagina getoond worden . (?p=home)
Als er een pagina niet bestaat zal ?p=notfound getoond worden.

Om een nieuwe pagina te maken maak je simpel een functie aan met de naam van de pagina die je wilt maken (met underscore _ als spatie). In deze functie kan je dan doen wat je wilt met de PHP code. Daarna is deze aan te roepen.

<//Het veranderen van taal!//>
Het veranderen van de taal zal gedaan worden door de $_GET["t"] variabele. Deze word opgeslaggen in de $_SESSION["taal"].
?t=nl om de taal naar het nederlands te zetten.
?t=en om de taal naar het engels te zetten.
Als $_GET["t"] niet gedefineert is word het standart op nederlands gezet. Als de gekozen taal niet word ondersteund zal deze op het nederlands gezet worden.

Het laten zien van de andere talen op de website in de HTML word gedaan door de .dutch en .english CSS classes. Als de taal van de gebruiker engels is zal de .dutch class onzichtbaar worden en vise versa.


