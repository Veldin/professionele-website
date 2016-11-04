<?php
//Een class met al mijn paginas als functies

class Pages {  

	//Hoofd pagina
	function home(){
	
		echo '<div class="coll-100">';
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin">';
					echo 'school of business';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin">';
					echo 'school of business';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin">';
					echo 'school of business';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div class="coll-66">';
				echo '<div class="contentMargin">';
					echo '<h1>Welkom</h1>';
					echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
					
				echo '</div>';
			echo '</div>';
		
			echo '<div class="coll-33">';
				echo '<div class="contentMargin">';
					echo '<h1>Nieuws</h1>';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';

	}
	
	//De footer word op elke standaard pagina geladen aan de onderkant.
	function footer(){
		echo '<div class="coll-100">';
			echo '<div class="coll-50">';
				echo '<div class="coll-50">';
					echo '<p class="lijstjes dutch">Studies bij het Harambe College';
					echo '
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p=School_of_Business";>School of Business</a></li>
							<li class="dutch"><a href="index.php?p=School_of_Technology";>School of Technology</a></li>
							<br>
						</ul>
						</p>';
					echo '<p class="lijstjes english">Studies at Harambe College
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p=School_of_Business";>School of Business</a></li>
							<li class="english"><a href="index.php?p=School_of_Technology";>School of Technology</a></li>
							<br>
						</ul>
						</p>';
						
					echo '<p class="lijstjes dutch";>Afstuderen bij het Harambe College';
					echo '
						<ul class="footerlists dutch";>
							<li class="dutch"><a href="index.php?p=bedrijfs_economie";>Bedrijfs Economie</a></li>
							<li class="dutch"><a href="index.php?p=Business_Information_Management";>Business Information Management</a></li>
							<li class="dutch"><a href="index.php?p=Civiele_Techniek_en_Waterbouw";>Civiele Techniek en Waterbouw</a></li>
							<li class="dutch"><a href="index.php?p=Informatica";>Informatica</a></li>
						</ul>
						</p>';
					echo '<p class="lijstjes english";>Graduate at Harambe College';
					echo '
						<ul class="footerlists english";>
							<li class="english"><a href="index.php?p=bedrijfs_economie";>Business Economy</a></li>
							<li class="english"><a href="index.php?p=Business_Information_Management";>Business Information Management</a></li>
							<li class="english"><a href="index.php?p=Civiele_Techniek_en_Waterbouw";>Civil Tech and Engineering</a></li>
							<li class="english"><a href="index.php?p=Informatica";>IT</a></li>
						</ul>
						</p>';
				echo '</div>';
				echo '<div class="coll-50">';
					echo '<p class="lijstjes dutch";>Organisatie';
					echo ' 
						<ul class="footerlists dutch";>
							<li class="dutch"><a href="index.php?p=about";>Over het Harambe College</a></li>
							<li class="dutch"><a href="index.php?p=contact";>Contact Formulier</a></li>
							<br>
						</ul>
						</p>';
					echo '<p class="lijstjes english";>Organisation';
					echo ' 
						<ul class="footerlists english";>
							<li class="english"><a href="index.php?p=about";>About Harambe College</a></li>
							<li class="english"><a href="index.php?p=contact";>Contact</a></li>
							<br>
						</ul>
						</p>';
						
					echo '<p class="lijstjes dutch";>Kies taal / Switch languages';
					echo '
						<ul class="footerlists dutch";>
							<li class="dutch"><a href="index.php?t=nl";>Nederlands / Dutch</a></li>
							<li class="dutch"><a href="index.php?t=en";>Engels / English</a></li>
						</ul>
						</p>';
					echo '<p class="lijstjes english";>Kies taal / Switch languages';
					echo '
						<ul class="footerlists english";>
							<li class="english"><a href="index.php?t=nl";>Nederlands / Dutch</a></li>
							<li class="english"><a href="index.php?t=en";>Engels / English</a></li>
						</ul>
						</p>';
						/*sluiten div coll-100*/
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				echo '<span><a href="http://www.facebook.com/"><img class="smlogos" src="facebooklogo.png" alt="facebook logo"></a></span>
				<span><a href="http://www.twitter.com/"><img class="smlogos" src="twitterlogo.png" alt="twitter logo"></a></span>
				<span><a href="http://www.instagram.com/"><img  class="smlogos" src="instagramlogo.png" alt="instagram logo"></a></span>';
				/*sluiten div coll-50*/
			echo '</div>';
			/*sluiten div coll-100*/
		echo '</div>';
	}
	// pagina voor School of Technology
	function School_of_Technology(){
		echo '<div class="coll-100">';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
				echo '<div class="textvak">';
				echo '<img src="images\Home_SchoolOfTechnology.png">';
				echo '</div>';
				echo '</div>';
				echo '<div class="coll-90">';
				echo '<div class="textvak">';
				echo '<h1>School of Technology</h1><br>';
				echo '<p>Lulkoek is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren 60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
				<br>
				 Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar "lorem ipsum" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).
				<br>
				 In tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, "Lorem ipsum dolor sit amet..", komt uit een zin in sectie 1.10.32.
				</p>';
				echo '</div>';
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
				echo '<div class="textvak2">';
				echo '<h1>School of Technology</h1><br>';
				echo '<p>Lulkoek is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren 60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
				<br>
				 Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar "lorem ipsum" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).
				<br>
				 In tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, "Lorem ipsum dolor sit amet..", komt uit een zin in sectie 1.10.32.
				</p>';
				echo '<br><br><p>Lulkoek is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren 60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
				<br>
				 Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot "Hier uw tekst, hier uw tekst" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar "lorem ipsum" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).
				<br>
				 In tegenstelling tot wat algemeen aangenomen wordt is Lorem Ipsum niet zomaar willekeurige tekst. het heeft zijn wortels in een stuk klassieke latijnse literatuur uit 45 v.Chr. en is dus meer dan 2000 jaar oud. Richard McClintock, een professor latijn aan de Hampden-Sydney College in Virginia, heeft één van de meer obscure latijnse woorden, consectetur, uit een Lorem Ipsum passage opgezocht, en heeft tijdens het zoeken naar het woord in de klassieke literatuur de onverdachte bron ontdekt. Lorem Ipsum komt uit de secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" (De uitersten van goed en kwaad) door Cicero, geschreven in 45 v.Chr. Dit boek is een verhandeling over de theorie der ethiek, erg populair tijdens de renaissance. De eerste regel van Lorem Ipsum, "Lorem ipsum dolor sit amet..", komt uit een zin in sectie 1.10.32.
				</p>';
				echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	// pagina voor Civiele techniek en waterbouw
	function Civiele_Techniek_en_Waterbouw(){
		echo '<div class="coll-100 english">';
			echo '<div class="coll-50">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<h1>Civil technology and waterworks</h1>
			<br>
			<h3>Is a bridge for you more than a crossing over a river or road and can you see more possibilities? For instance a tunnel, dyke or parking garage?</h3>
			<br>
			During your study Civil technology and waterworks you will design and build a yacht and a tunnel, you will learn all about designing and construction of roads and railroad tracks. You will begin to actively work on the infrastructure of our country. This study is so diverse that there is enough challenge for you, who knows? Perhaps you will soon go to work as a civil engineer creating our living environment!
			</p>
			<br>
			<br>
			<p>
			<h2>Designing, executing and furnishing.</h2>
			<br>
			Civil technology is also called Road and Water architecture. You will work based on development, designing and monitoring infrastructure in our country. For instance: transport (bridges, tunnels, viaducts and roads), protection against water (dykes), water management (channels, water treatment) and public places (parking garages, schools and hospitals).
			During road construction projects every project is different. Together with your project team you will find the best solution to every specific problem. What are the demands, the situation, what type of soil and how many traffic is expected. Every project will result in you being challenged yet again and will result in unique final results.
			<br><br>
			</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<img src="images\designers.jpg">
			<br><br>
			<h2>What job area will you be able to work in?</h2>
			<br>
			You won’t need to worry about getting a job, dutch civil engineers have a well regarded international reputation. With your Civil technology diploma you will be able to work at organisation bureaus, contractors, project leaders or contract specialists.
			</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-100">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			?>
			
			<div id="map">

		<script>
			function myMap() {
			var mapCanvas = document.getElementById("map");
			var mapOptions = {
  
			center: new google.maps.LatLng(52.778249, 6.912252), 
			zoom: 15
			// Voor Stenden
	
			//center: new google.maps.LatLng(52.744699, 6.899738),
			//zoom: 18
			// Voor mijn huis :)
	
		}
		var map = new google.maps.Map(mapCanvas, mapOptions);
		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
	
	</div>
			<?php
			echo '</div>';
			echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		
		//nederlandse versie
	echo '<div class="coll-100 dutch">';
			echo '<div class="coll-50">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<h1>Civiele techniek en waterbouw</h1>
			<br>
			<h3>Is een brug voor jou meer dan een oversteek over een rivier of weg en zie jij ook meer mogelijkheden met een tunnel, dijk of parkeergarage?</h3>
			<br>
			Al tijdens de opleiding HBO Civiele Techniek ontwerp en bouw jij een jachthaven en een tunnel, leer je alles over het ontwerpen en aanleggen van wegen en sporen en ga je serieus aan de slag met de inrichting van ons land. Het vakgebied is zo breed, dat er voor jou voldoende uitdaging is. Wie weet geef jij als civiel ingenieur straks vorm aan onze woon- en leefomgeving!
			</p>
			<br>
			<br>
			<p>
			<h2>Ontwerpen, uitvoering en inrichten</h2>
			<br>
			Civiele Techniek wordt ook wel Weg- en Waterbouwkunde genoemd. Je werkt aan de ontwikkeling, het ontwerp en het beheer van infrastructuur voor de inrichting van het land. Denk maar aan: transport (bruggen, tunnels, viaducten en (water-)wegen), bescherming tegen water (dijken en een stormvloedkering), watermanagement en waterbeheer (gemalen, sluizen, kanalen en afvalwaterzuivering) en openbare voorzieningen (parkeergarages, scholen en ziekenhuizen).
			Bij weg- en waterbouw is elk project anders. Samen met je projectteam zoek je naar de beste oplossing voor een specifiek probleem. Wat zijn de eisen, wat is de situatie, hoe is de grond, hoeveel verkeer is er? Elk project word je opnieuw uitgedaagd en lever je een uniek eindproduct op. 
			<br><br>
			</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<img src="images\designers.jpg" alt="designers">
			<br><br>
			<h2>Waar kun je aan de slag na de hbo-opleiding Civiele Techniek?</h2>
			<br>
			Over een baan hoef jij je geen zorgen te maken; Nederlandse civiel ingenieurs hebben internationaal een goede reputatie. Met de hbo-opleiding Civiele Techniek kun je aan de slag bij advies- en organisatiebureaus, aannemers, rijksoverheid, provincies, gemeenten en waterschappen.
			Je gaat bijvoorbeeld bij Ballast Nedam, BAM, Dura Vermeer of Arcadis aan het werk als ontwerper, constructeur, opzichter, uitvoerder, werkvoorbereider, projectleider of contractspecialist.
			</p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-100">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			?>
			
			<div id="map">

			<script>
			function myMap() 
			{
				var mapCanvas = document.getElementById("map");
				var mapOptions = {
  
				center: new google.maps.LatLng(52.778249, 6.912252), 
				zoom: 15
				// Voor Stenden
	
				//center: new google.maps.LatLng(52.744699, 6.899738),
				//zoom: 18
				// Voor mijn huis :)
	
				}
				var map = new google.maps.Map(mapCanvas, mapOptions);
			}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
	
			</div>
			<?php
			echo '</div>';
			echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	// pagaina voor Informatica
	function Informatica(){
		echo '<div class="coll-100 dutch">';
			echo '<div class="coll-66">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<h1>Informatica</h1>
			<br>
			<h3>Als informaticus ben je in staat complexe ICT-systemen te analyseren, ontwerpen, realiseren en implementeren, waarbij je rekening houdt met de wensen van de opdrachtgever of gebruiker van het systeem.</h3>
			<br>

			ICT is overal om ons heen te vinden. Jij bent als informaticus de specialist in het maken van grote en complexe informatiesystemen die snel, efficiënt en veilig werken. Zo kun je denken aan het ontwikkelen van een webshop (bijvoorbeeld Bol.com of Zalando), of het maken van een app (bijvoorbeeld Appie of Facebook), maar ook aan het analyseren van grote hoeveelheden data van social media (bijvoorbeeld analyseren van Tweets). Bij het ontwikkelen van deze systemen kom je in aanraking met verschillende programmeertalen. Zo leer je in het eerste jaar programmeren in html en PHP. Naast het programmeren en ontwikkelen van verschillende toepassingen leer je ook samenwerken met medestudenten of met studenten van andere opleidingen. Na het volgen van de opleiding Informatica kun je aan de slag als bijvoorbeeld programmeur of applicatieontwikkelaar. Vanuit deze functies kun je doorgroeien naar ICT consultant, projectleider ICT of software architect.
			Ben jij geïnteresseerd in nieuwe technologische ontwikkelingen, nieuwsgierig, een beetje eigenzinnig en een doorzetter, dan is de opleiding Informatica iets voor jou!
			</p>
			<p>
			<br>
			<h2>Hoe is de opleiding opgebouwd?</h2>
			<br>
			Bij de opleidingen van Het Harambe College voelt iedereen zich welkom en hoort iedereen erbij. Studenten en docenten kennen elkaar en weten elkaar te vinden. De docenten doen er alles aan om je te begeleiden bij je studie op een manier die bij jou past. Dit vraagt van jou betrokkenheid en een actieve inzet. Samen maken we het onderwijs.
			Kenmerkend voor het onderwijs van Het Harambe College is de aandacht voor:
			<ul id="gewoonlijstje">
			<li id="gewoonlijstje"> - De kennisbasis van het beroep</li>
			<li id="gewoonlijstje"> - Handelen in de beroepspraktijk</li>
			<li id="gewoonlijstje"> - Je eigen professionele identiteit</li>
			</ul>
			<br>
			Al deze elementen komen steeds aan bod tijdens de opleiding. In het begin ligt de nadruk op het ontwikkelen van kennis en vaardigheden, maar direct komt ook de praktijk aan bod. Je leert reële beroepsvraagstukken aan te pakken, in samenwerking met medestudenten, docenten, professionals uit de praktijk en praktijkgerichte onderzoekers. In het begin krijg je veel begeleiding van je docent, later neem je steeds meer het heft in eigen handen. Tijdens je studie leer je jezelf steeds beter kennen en ontdek je wat jouw unieke kwaliteiten zijn als beroepsbeoefenaar.</p>
			<br><br>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-33">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<img src="images\informatikaas.jpg" class="informatikaas" alt="informatikaas">';
			echo '<img src="images\informatikaas2.jpg" class="informatikaas" alt="informatikaas met suit">';
			echo '<img src="images\informatikaas3.jpg" class="informatikaas" alt="informatikaas toetsenbord">';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		
		//engelse versie
		echo '<div class="coll-100 english">';
			echo '<div class="coll-66">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<p>
			<h1>Computer sciences</h1>
			<br>
			<h3>As a computer scientist you are able to analyze, design, realize and implement  complex IT systems, where you take into account the wishes of the client and the end-user.</h3>
			<br>
			It is all around you. You as a computer scientist are a specialist in the designing and making of large and complex information systems which are fast, efficient and secure.
			For example, creating an online store (i.e Bol.com or Zalando.nl), making an app (i.e. Appie or Facebook) but also analysing large amounts of data from social media (for instance, analysing tweets).
			During development of these and similar systems you will come into contact with multiple programming languages.
			During your first year you will learn how to program in html and PHP. Alongside programming you will learn how to work together with other students from your own and other courses. After your study you can start working as a programmer or app developer.
			Using these functions as a base, you can grow to become an IT-consultant, IT project leader or software architect.
			Are you interested in new technological developments, curious, a little bit stubborn and a real go-getter then this study might just be something for you!
			</p>
			<br><br>
			<br>
			<h2>How is the Study structured?</h2>
			<br>
			Everyone feels welcome and is a part of our studies at Harambe college.                                                              Students and teachers know each other and know where to find each other. Teachers will do everything they can to guide you during your study in a way that suits you. This requires involvement and an active attitude of every student, together we are education.                      
			Some characteristics of the Harambe college is our attention for: 
			<ul id="gewoonlijstje">
			<li id="gewoonlijstje"> - Knowledge of the associated job</li>
			<li id="gewoonlijstje"> - Knowing how to act in a professional practice</li>
			<li id="gewoonlijstje"> - Your own professional identity</li>
			</ul>
			<br>
			All of these elements will reappear during your study here at Harambe college. At the beginning the emphasis is on developing knowledge and skills, but practice will be a big part from the beginning as well. Students will learn how to tackle realistic professional issues, whilst working together with peer students, teachers, professionals and practice based researchers. You will receive generous amounts of counseling by your teacher during the beginning, as time passes, you will start to work and solve problems more individually.                                  During your study you will learn more about yourself and you will find out what your unique qualities are as a job practitioner.
			';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '<div class="coll-33">';
			echo '<div class="coll-90">';
			echo '<div class="textvak">';
			echo '<img src="images\informatikaas.jpg" class="informatikaas" alt="informatikaas">';
			echo '<img src="images\informatikaas2.jpg" class="informatikaas" alt="informatikaas with suit">';
			echo '<img src="images\informatikaas3.jpg" class="informatikaas" alt="informatikaas keyboard">';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo 'Pagina niet gevonden!';
	}

}
?>