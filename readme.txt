De website komt te bestaan uit verschillende componenten.

Core.php
Het Core.php bestand bevat een Class met hierin functies die op elke pagina opnieuw kunnen worden gebruikt. Hierin zitten zowel functies met een return value als functies zonder return value.

Pages.php
Het Pages.php bestant bevat een Class met hierin functies met betrekking tot paginas in de website. Hierin zitten functies die geen return value hebben maar die bedoeld zijn om inhoud van paginas weer te geven.

Index.php
In index.php komen de Core.php en Pages.php samen. Er word eerst een variabele aangemaakt van bijde Classes die daarna aangevraagd kunnen worden. Verder zit in de Index.php nog wat HTML om het skelet op te bouwen.