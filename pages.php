<?php
//Een class met al mijn paginas als functies
class Pages {  
	//Hoofd pagina
	function home(){
		global $core;
		
		echo '<div class="coll-100">';
			echo '<a href="index.php?p=School_of_Business">';
				echo '<div class="coll-33">';
					echo '<div class="blok contentMargin business">';
					echo '</div>';
				echo '</div>';
			echo '</a>';
			
			echo '<a href="index.php?p=School_of_Technology">';
				echo '<div class="coll-33">';
					echo '<div class="blok contentMargin technology">';
					echo '</div>';
				echo '</div>';
			echo '</a>';
			
			echo '<a href="index.php?p=contactformulier">';
				echo '<div class="coll-33">';
					echo '<div class="blok contentMargin">';
						echo '<span>Harambe</span>';
						echo '<span>College</span>';
						echo '<span>Info@Harambe-College.com</span>';
						echo '<span>058 244 14 41</span>';
					echo '</div>';
				echo '</div>';
			echo '</a>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div id="breadcrumbs" class="contentMargin">';
				echo $core->breadcrumbs();
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div class="coll-66">';
				echo '<div class="contentMargin">';

					echo '<h1>Welkom</h1>';

					echo '<p class="dutch">Het Harambe College biedt professioneel hoger onderwijs en praktijkgericht onderzoek. Met een “breed” aanbod aan opleidingen leiden we hoogwaardige professionals op. Daarnaast werkt het Harambe College aan nieuwe oplossingen en innovaties voor de beroepspraktijk en de maatschappij. Samen met bedrijven en instellingen ontwikkelen we toepasbare, praktijkgerichte kennis. Het Harambe college is gespecialiseerd in techniek en business waardoor er veel beter aandacht besteed kan worden aan de kwaliteit van de opleidingen. Overigens is het Harambe college een fusie tussen 2 scholen.</P>';
					
					echo '<p class="english">The Harambe college offers professional education and practically oriented research.
					With a wide array of courses we train high-end professionals. 
					The harambe college also works on new solutions and innovations which benefit society.
					Together with other businesses and universities we develop applicable, practically oriented knowledge. 
					The harambe college is specialised in business and technology which allows us to spend more time improving the quality of our studies.
					The harambe college is a product of the fusion of 2 different universities.</P>';
					
					echo '<h2 class="dutch">Waarom het Harambe college?</h2>';
					echo '<h2 class="english">Why Harambe college?</h2>';
					
					echo '<p class="english">The Harambe college offers professional education and practically oriented research.
					With a wide array of courses we train high-end professionals. 
					The harambe college also works on new solutions and innovations which benefit society.
					Together with other businesses and universities we develop applicable, practically oriented knowledge. 
					The harambe college is specialised in business and technology which allows us to spend more time improving the quality of our studies.
					The harambe college is a product of the fusion of 2 different universities.</P>';

					echo '<p class="dutch">Het beste naar boven halen in iedere student. Dat is de missie van het Harambe College. Tijdens je opleiding krijg je daarom veel persoonlijke begeleiding en is er ruime aandacht voor de praktijk. Je krijgt veel mogelijkheden om aan je persoonlijke ontwikkeling te werken, je grenzen te verleggen.
					Bij het Harambe College krijg je onderwijs dat jouw onderzoekende en nieuwsgierige houding stimuleert.</p>';

					
				echo '</div>';
			echo '</div>';
		
			echo '<div class="coll-33">';
				echo '<div class="contentMargin">';
					echo "<div id='news'>";
						echo '<h1>Nieuws</h1>';
						$rss = $core->easy_curl("http://www.nu.nl/rss");
						
						$titleList = $core->fetch($rss, "title");
						$descriptionList = $core->fetch($rss, "description");
						$titles = explode("&&", $titleList);
						$descriptions = explode("&&", $descriptionList);
						for ($x = 2; $x <= 5; $x++) {
							echo "<h2>" . $titles[$x] . "</h2>";
							echo "<p>" . $descriptions[$x] . "</p>";
						}
					echo "</div>";
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function beursrss() {
         global $core;
		
		echo '<div class="coll-100">';
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin business">';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin technology">';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="coll-33">';
				echo '<div class="blok contentMargin">';
					echo '<span>Harambe</span>';
					echo '<span>College</span>';
					echo '<span>Info@Harambe-College.com</span>';
					echo '<span>058 244 14 41</span>';
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div id="breadcrumbs" class="contentMargin">';
				echo $core->breadcrumbs();
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div class="coll-66">';
				echo '<div class="contentMargin">';
					echo '<h1>Beurskoersen</h1>';
                                       
				echo '</div>';
			echo '</div>';
		
			echo '<div class="coll-33">';
				echo '<div class="contentMargin">';
					echo "<div id='beurs'>";
						$rss = html_entity_decode($core->easy_curl("http://www.beursgorilla.nl/rss/rss-aex.asp"));					
                                                $strip = true;
                                                $categoryList = $core->fetch($rss, "category", $strip);
						$descriptionList = $core->fetch($rss, "description", $strip);
                                                $categories = explode("&&", $categoryList);
						$descriptions = explode("&&", $descriptionList);
						for ($x = 2; $x <= 5; $x++) {
                                                        echo $categories[$x];
							echo $descriptions[$x];
						}						
					echo "</div>";
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	// contactformulier
// contactformulier
    function contactformulier(){
		Global $core;
		
		echo'<div class="coll-100 contentMargin">';
			echo '<div class="coll-100" id="breadcrumbs">';
				echo $core->breadcrumbs();
			echo '</div>';
		
			echo'<div class="coll-100">';
				echo'<div class="form">';  
					echo'<h1>Contact</h1>';
					echo'<span class="dutch">Om contact met ons te maken, verzoeken wij u om dit contactformulier volledig in the vullen.</span>';
					echo'<span class="english">To contact us, please fill in the contact form below.</span>';
					echo'<form name="form" action="#" method="post">';
						echo'<p><span class="dutch">Naam:</span><span class="english">Name:</span><br> <input type="text" name="name"></p>';
						echo '<p><span class="english">Email address:</span><span class="dutch">Emailadres:</span><br><input type="text" name="mail"></p>';
						echo'<p><span class="english">Type your message here:</span><span class="dutch">Type hier uw bericht:</span></p><textarea name="text"></textarea>';
						echo'<p><input type="submit" name="submit" value="submit"></p>';
					echo '</form>';
				echo'</div>';
				
				echo'<div class="form2 contentMargin">';
				if(isset($_POST["submit"])){
					$text = htmlentities($_POST["text"]);
					$name = htmlentities($_POST["name"]);      
					$mail = htmlentities($_POST["mail"]);
				   
					if (empty($_POST["name"]) OR empty($_POST["text"]) OR empty($_POST["mail"])) {
					   
						//mist iets
						if (empty($_POST["name"]) AND empty($_POST["text"]) AND empty($_POST["mail"])) {
							echo '<p><span class="dutch">U heeft uw naam, emailadres en bericht niet ingevuld.</span></p>';
							echo '<p><span class="english">You did not fill in your name, email nor message.</span></p>';   
						}
						elseif (empty($_POST["name"]) AND empty($_POST["text"]) ){
							echo'<p><span class="dutch">U heeft uw naam en bericht niet ingevuld.</span></p>';
							echo'<p><span class="english">You did not fill in your name nor message.</span></p>';
						}
						elseif (empty($_POST["name"]) AND empty($_POST["mail"]) ){
								echo'<p><span class="dutch">U heeft uw naam en emailadres niet ingevuld.</span></p>';
								echo'<p><span class="english">You dit not fill in your name nor email.</span></p>';
						}
						elseif (empty($_POST["text"]) AND empty($_POST["mail"]) ){
								echo'<p><span class="dutch">U heeft uw bericht en emailadres niet ingevuld.</span></p>';
								echo'<p><span class="english">You did not fill in your email nor message.</span></p>';
						}
						elseif (empty($_POST["name"])){
							echo'<p><span class="dutch">U heeft uw naam niet ingevuld.</span></p>';
							echo'<p><span class="english">You did not fill in your name.</span></p>';
						}
						elseif (empty($_POST["text"])){
							echo'<p><span class="dutch">U heeft uw bericht niet ingevuld.</span></p>';
							echo'<p><span class="english">You did not fill in your message.</span></p>';
						}
						elseif (empty($_POST["mail"])){
							echo'<p><span class="dutch">U heeft uw emailadres niet ingevuld.</span></p>';
							echo'<p><span class="english">You did not fill in your email.</span></p>';
						}
						else{}
					}else{
						if(!filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
							echo'<div class="form">';
								echo '<p><span class="dutch">'.$name.' ,bedankt voor de reactie. Er wordt zo spoedig mogelijk gereageerd naar '.$mail.".</span></p>";
								echo '<p><span class="english">'.$name.' ,thanks for your response. We will respond as soon as possible to '.$mail.".</span></p>";
							echo'</div>';
						}
					   
						else{
							echo'<div class="form2">';
								echo'<p><span class="dutch">'.$mail.' is een ongeldig emailadres'.'</span></p>';
								echo'<p><span class="english">'.$mail.' is not a valid emailadres'.'</span></p>';
							echo'</div>';
						}
					}
				}
				echo '</div>';
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	//logo
	/* function logo(){
		echo '<a href="index.php"><img src="images/harambe_logo.png" alt="logo"></a>';
		
	} */
	
	//De navigator word op elke standaard pagina geladen aan de bovenkant.
	function navigator(){
		global $core;
	
		echo '<ul id="navigator">';
		
			echo '<li><a href="index.php?p=home">
				<span class="dutch">Kies je opleiding</span>
				<span class="english">Choose your program</span>
			</a></li>';
			
			echo '<li><a href="index.php?p=School_of_Business">
				<span>School of Business</span>
			</a></li>';
			
			echo '<li><a href="index.php?p=School_of_Technology">
				<span>School of Technology</span>
			</a></li>';
			
			echo '<li><a href="index.php?p=galerij">
				<span class="dutch">Galerij</span>
				<span class="english">Gallery</span>
			</a></li>';

			echo '<li><a href="index.php?p=contactformulier">
				<span>Contact</span>
			</a></li>';

			echo '<li class="right english"><a href="index.php?p='.$core->paginaTitel(false).'&t=nl">
				<span id="flag_dutch">Flag</span>
			</a></li>';
			echo '<li class="right dutch"><a href="index.php?p='.$core->paginaTitel(false).'&t=en">
				<span id="flag_english">Flag</span>
			</a></li>';

		echo '</ul>';
		echo '<div class="clear"></div>';
		
		/* echo '<a href="index.php?p=kiesjeopleiding"><span>Kies je opleiding</span></a>';
		echo '<a href="index.php?p=schoolofbusiness"><span>School of business</span></a>';
		echo '<a href="index.php?p=schooloftechnology"><span>School of technology</span></a>';
		echo '<a href="index.php?p=imageboard"><span>Imageboard</span></a>';
		echo '<a href="index.php?p=contac"><span>Contact</span></a>';
		
		echo '<span class="dutch">';
			echo '<a href="index.php?t=en"><span>Engels</span></a>';
			echo '<a href="index.php?t=nl"><span>Nederlands - actief</span></a>';
		echo '</span>';
		
		echo '<span class="english">';
			echo '<a href="index.php?t=en"><span>Engels - actief</span></a>';
			echo '<a href="index.php?t=nl"><span>Nederlands</span></a>';
		echo '</span>'; */
		
	}
	
	function galerij(){
		global $core;
		
		//Gallerij
		//Geeft weer hoeveel bestanden zich bevinden in de directory in de vorm van een array.
		$dir = 'images/submitted/';
		$array = scandir($dir);
		//Het aantal bestanden weergegeven in enkel een nummer.
		$count = count($array) - 2;
		//Het los weergeven van elke afbeeldin inclusief index nummer.
		$files = '';
		foreach($array as $file){
			$files = $file . '@@' . $files; 
		}
		//echo $files;
		$picPaths = explode('@@',$files);
		$paths = '';
		for($a = 0; $a < $count; $a++){
				$picData = explode('&&',$picPaths[$a]);
				$index = $picData[0];
				$path = $dir . $index . "&&" . $picData[1];
				$name = $picData[1];
				$titles = explode('.', $name);
				$title = $titles[0];
				$images[$index]['title'] = $title;
				$images[$index]['locaties'] = $path;
	
		}
		//The images are numberd up, so the heigher the number the newer the image, as we want newest first!
		ksort($images);
		$images = array_values($images);
		
		
		$perpage = 9; //9 images per page.
		$totalpage = ceil(count($images) / $perpage); //Amount of pages
		
		
		//Get what page the user is on
		if (empty($_GET["l"])){ 
			$list = 1;
		}else{
			$list = $_GET["l"];
		}
		
		$startimage = (($list -1) * $perpage);
		$endimage = $startimage + $perpage -1;
		
/* 		echo '<hr>';
		echo $perpage.'<hr>';
		echo $totalpage.'<hr>';
		echo $list.'<hr>';
		echo $startimage.' <-start<hr>';
		echo $endimage.'  <-end<hr>'; */
		
		
		//Begin pagina opmaak
		echo '<div class="coll-100 contentMargin">';
		
			echo '<div class="coll-100">';
				echo '<div id="breadcrumbs">';
					echo $core->breadcrumbs();
				echo '</div>';
			echo '</div>';
		
			echo '<div class="coll-100">';
				echo '<h1 class="dutch">Galerij</h1>';
				echo '<h1 class="english">Gallery</h1>';
			echo '</div>';
			echo '<div class="clear"></div>';
		
			//tonen van controls
			echo '<div class="coll-100">';
				echo '<div class="coll-40"></div>';
				echo '<div class="coll-20">';
					echo '<div class="control">';
						if($list > 1){
							$minus = $list - 1;
							echo '<a href="index.php?p=galerij&l='.$minus.'"> < </a>';
						}
					echo '</div>';
					echo '<div class="control">';
						echo $list;
					echo '</div>';
					echo '<div class="control">';
						if($list < $totalpage){
							$plus = $list + 1;
							echo '<a href="index.php?p=galerij&l='.$plus.'"> > </a>';
						}
					echo '</div>';
				echo '</div>';
				echo '<div class="coll-40"></div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
			
			//tonen van afbeeldingen
			echo '<div class="coll-100">';
			for($x = $startimage; $x <= $endimage; $x+=3) {
					echo '<div class="coll-100">';
						for($i = $x; $i < ($x+3); $i++){ //doe het per 3
							if(isset($images[$i])){
								echo '<div class="coll-33">';
									echo '<div class="coll-5">';
									
									echo '</div>';
									
									echo'<div class="coll-90">';
										echo '<div class="vert-90" style="background-image: url('.$images[$i]["locaties"].')" alt="'.$images[$i]["title"].'">';
										echo '</div>';
										
										echo '<div class="vert-10">';
											echo $images[$i]['title'];
										echo '</div>';
									echo '</div>';
									
									echo '<div class="coll-5">';
									
									echo '</div>';
								echo '</div>';
							}
						}
					
					echo '</div>';
					echo '<div class="clear"></div>';
			}
			echo '</div>';
			echo '<div class="clear"></div>';
		 
				
			//tonen van controls onderkant
			echo '<div class="coll-100">';
				echo '<div class="coll-40"></div>';
				echo '<div class="coll-20">';
					echo '<div class="control">';
						if($list > 1){
							$minus = $list - 1;
							echo '<a href="index.php?p=galerij&l='.$minus.'"> < </a>';
						}
					echo '</div>';
					echo '<div class="control">';
						echo $list;
					echo '</div>';
					echo '<div class="control">';
						if($list < $totalpage){
							$plus = $list + 1;
							echo '<a href="index.php?p=galerij&l='.$plus.'"> > </a>';
						}
					echo '</div>';
				echo '</div>';
				echo '<div class="coll-40"></div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
			
		echo '</div>';
		echo '<div class="clear"></div>';
			//Beginnen echoen galerij items.
				//Voor elke pagina 3 rijen echoen.
		/* $counter = 0;
		for ($x = 0; $x < 3; $x++){
				echo '<div class="coll-100">';
				//Voor elke rij 3 foto's echoen.
				$i = 0;
				for($i = 0; $i < 3; $i++){
					echo '<div class="coll-33">';
						echo '<div class="coll-5">';
						echo '</div>';
						echo'<div class="coll-90">';
							echo '<div class="vert-90" style="background-image: url('.$locs[$counter].')" alt="'.$picNamen[$counter].'">';
							echo '</div>';
							echo '<div class="vert-10">';
								echo '<p>'. $picNamen[$counter] .'</p>';
							echo '</div>';
						echo '</div>';
						echo '<div class="coll-5">';
						echo '</div>';
					echo '</div>';
					$counter++;
				}
				echo '</div>';
				echo '<div class="clear"></div>';
		} */
	}
	//De footer word op elke standaard pagina geladen aan de onderkant.
	function footer(){
		global $core;
	
		echo '<div class="coll-100 contentMargin">';
			echo '<div class="coll-50">';
				echo '<div class="coll-50">';
					echo '<p class="lijstjes dutch">Studies bij het Harambe College';
					echo '
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p=School_of_Business">School of Business</a></li>
							<li class="dutch"><a href="index.php?p=School_of_Technology">School of Technology</a></li>
							<br>
						</ul>
						</p>';
					echo '<p class="lijstjes english">Studies at Harambe College
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p=School_of_Business">School of Business</a></li>
							<li class="english"><a href="index.php?p=School_of_Technology">School of Technology</a></li>
							<br>
						</ul>
						</p>';
						
					echo '<p class="lijstjes dutch";>Afstuderen bij het Harambe College';
					echo '
						<ul class="footerlists dutch";>
							<li class="dutch"><a href="index.php?p=bedrijfs_economie">Bedrijfs Economie</a></li>
							<li class="dutch"><a href="index.php?p=Business_Information_Management">Business Information Management</a></li>
							<li class="dutch"><a href="index.php?p=Civiele_Techniek_en_Waterbouw">Civiele Techniek en Waterbouw</a></li>
							<li class="dutch"><a href="index.php?p=Informatica">Informatica</a></li>
						</ul>
						</p>';
					echo '<p class="lijstjes english";>Graduate at Harambe College';
					echo '
						<ul class="footerlists english";>
							<li class="english"><a href="index.php?p=bedrijfs_economie">Business Economy</a></li>
							<li class="english"><a href="index.php?p=Business_Information_Management">Business Information Management</a></li>
							<li class="english"><a href="index.php?p=Civiele_Techniek_en_Waterbouw">Civil Tech and Engineering</a></li>
							<li class="english"><a href="index.php?p=Informatica">IT</a></li>
						</ul>
						</p>';
				echo '</div>';
				echo '<div class="coll-50">';
					echo '<p class="lijstjes dutch";>Organisatie';
					echo ' 
						<ul class="footerlists dutch";>
							<li class="dutch"><a href="index.php?p=about">Over het Harambe College</a></li>
							<li class="dutch"><a href="index.php?p=contact">Contact Formulier</a></li>
							<br>
						</ul>
						</p>';
					echo '<p class="lijstjes english";>Organisation';
					echo ' 
						<ul class="footerlists english";>
							<li class="english"><a href="index.php?p=about">About Harambe College</a></li>
							<li class="english"><a href="index.php?p=contact">Contact</a></li>
							<br>
						</ul>
						</p>';
						
					echo '<p class="lijstjes dutch";>Kies taal / Switch languages';
					echo '
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p='.$core->paginaTitel(false).'&t=nl">Nederlands / Dutch</a></li>
							<li class="dutch"><a href="index.php?p='.$core->paginaTitel(false).'&t=en">Engels / English</a></li>
						</ul>
						</p>';
					echo '<p class="lijstjes english">Kies taal / Switch languages';
					echo '
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p='.$core->paginaTitel(false).'&t=nl">Nederlands / Dutch</a></li>
							<li class="english"><a href="index.php?p='.$core->paginaTitel(false).'&t=en">Engels / English</a></li>
						</ul>
						</p>';
						/*sluiten div coll-100*/
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				echo '<span><a href="http://www.facebook.com/"><img class="smlogos" src="images/facebooklogo.png" alt="facebook logo"></a></span>
				<span><a href="http://www.twitter.com/"><img class="smlogos" src="images/twitterlogo.png" alt="twitter logo"></a></span>
				<span><a href="http://www.instagram.com/"><img  class="smlogos" src="images/instagramlogo.png" alt="instagram logo"></a></span>';
				/*sluiten div coll-50*/
			echo '</div>';
			/*sluiten div coll-100*/
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function imageuploading(){
		global $core;             
                
		
		echo '<div class="coll-100">';
			echo '<div id="breadcrumbs" class="contentMargin">';
						echo $core->breadcrumbs();
			echo '</div>';
			echo '<div class="contentMargin">';
				echo '<h1>Upload images</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		echo '<div class="coll-100">';
			echo '<div class="contentMargin">';
				echo '<form action="#" method="post" enctype="multipart/form-data">';
					echo '<span class="dutch">Selecteer het plaatje dat je wil uploaden:<br></span>';
					echo '<span class="english">Select image to upload:<br></span>';
					echo '<input type="file" name="fileToUpload" id="fileToUpload"><br>';
					echo '<span class="dutch">Selecteer titel:<br></span>';
					echo '<span class="english">select title:<br></span>';
					echo '<input type="text" name="title" required><br>';
					echo '<input type="submit" value="Upload Image" name="submit">';
                 echo '</form>';
                 echo '<br>' . $core->imageuploading();
				
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo '<div class="coll-100">';
			echo '<div class="contentMargin">';
				echo '<div class="dutch"><h1>Pagina niet gevonden!</h1>De aangevraagde pagina is niet gevonden.</div>';
				echo '<span class="english"><h1>Page not found!</h1>The requested page was not found.</span>';
			echo '</div>';
		echo '</div>';
		
	}
		// pagina voor School of Technology
	function School_of_Technology(){

		echo '<div class="coll-100 dutch">';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
					echo '<h1>School of Technologie</h1>';
				echo '<div class="textvak">';
					echo '<img src="images\lerencomp.jpg" class="informatikaas2" alt="Bezig achter de computer">';
					echo '<br><br>';
					echo '<img src="images\SoTgroep.jpg" class="informatikaas2" alt="groepswerk bovenaf">';
				echo '</div>';
				echo '</div>';
				echo '<div class="coll-90">';
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
				echo '<div class="textvak2">';
				echo '<h2>School of Technology</h2><br>';
				echo '<p>ICT is overal om ons heen te vinden. Jij bent als informaticus de specialist in het maken van grote en complexe informatiesystemen die snel, efficiënt en veilig werken. Zo kun je denken aan het ontwikkelen van een webshop (bijvoorbeeld Bol.com of Zalando), of het maken van een app (bijvoorbeeld Appie of Facebook), maar ook aan het analyseren van grote hoeveelheden data van social media (bijvoorbeeld analyseren van Tweets). Bij het ontwikkelen van deze systemen kom je in aanraking met verschillende programmeertalen. Zo leer je in het eerste jaar programmeren in (X)HTML en PHP. 
						<br><br>Naast het programmeren en ontwikkelen van verschillende toepassingen leer je ook samenwerken met medestudenten of met studenten van andere opleidingen. Na het volgen van de opleiding Informatica kun je aan de slag als bijvoorbeeld programmeur of applicatieontwikkelaar. Vanuit deze functies kun je doorgroeien naar ICT consultant, projectleider ICT of software architect.
						<br><br>Ben jij geïnteresseerd in nieuwe technologische ontwikkelingen, nieuwsgierig, een beetje eigenzinnig en een doorzetter, dan is de opleiding Informatica iets voor jou!
						<br><br><br>
					Voor meer informatie over de opleidingen binnen de School of Technology:
					<br><br><a href="index.php?p=Civiele_Techniek_en_Waterbouw" id="gewoonlijstje">Meer weten over de studie Civiele Techniek en Waterbouw? Klik hier.</a>
					<br><a href="index.php?p=Informatica" id="gewoonlijstje">Meer weten over de studie Informatica? Klik hier.</a>
					</p>';
				echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		
		//Engelse versie
		echo '<div class="coll-100 english">';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
					echo '<h1>School of Technologie</h1>';
				echo '<div class="textvak">';
					echo '<img src="images\lerencomp.jpg" class="informatikaas2" alt="working behind a pc">';
					echo '<br><br>';
					echo '<img src="images\SoTgroep.jpg" class="informatikaas2" alt="groupwork from above">';
				echo '</div>';
				echo '</div>';
				echo '<div class="coll-90">';
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				echo '<div class="coll-90">';
				echo '<div class="textvak2">';
				echo '<h2>School of Technology</h2><br>';
				echo '<p>IT is all around you. You as a computer scientist are a specialist in the designing and making of large and complex information systems which are fast, efficient and secure.
					For example, creating an online store (i.e Bol.com or Zalando.nl), making an app (i.e. Appie or Facebook) but also analysing large amounts of data from social media (for instance, analysing tweets).
					During development of these and similar systems you will come into contact with multiple programming languages.
					During your first year you will learn how to program in X(HTML) and PHP.
					<br><br>Alongside programming you will learn how to work together with other students from your own and other courses. After your study you can start working as a programmer or app developer.
					Using these functions as a base, you can grow to become an IT-consultant, IT project leader or software architect.
					<br><br>Are you interested in new technological developments, curious, a little bit stubborn and a real go-getter then this study might just be something for you!
					<br><br><br>
					For more information about the schools in the School of Technology check out the following:
					<br><br><a href="index.php?p=Civiele_Techniek_en_Waterbouw" id="gewoonlijstje">Want to learn more about the school of Civil Tech and Enginering? Click here.</a>
					<br><a href="index.php?p=Informatica" id="gewoonlijstje">Want to learn about the school of IT? Click here.</a>
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
	
	// template voor text paginas
		//school of busness //school of tech
	function tekstpagina(){
		global $core;
		
		//breadcrumbs sectie
		echo '<div class="coll-100">';
			echo '<div id="breadcrumbs" class="contentMargin">';
				echo $core->breadcrumbs();
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		
		//header sectie
		echo '<div class="coll-100">';
			echo '<div class="contentMargin">';
				echo '<h1>School of business</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';
		
			//Linker kolom
			echo '<div class="coll-50" >';
					echo '<div class="contentMargin img maneninpak2">';
					echo '</div>';
					echo '<div class="contentMargin img studenten1">';
					echo '</div>';
			echo '</div>';
			
			//Rechter kolom
			echo '<div class="coll-50">';
					echo '<h2 class="english">School of business</h2>';
			
					echo '<p class="dutch">Kies je voor en opleiding in de school of business, dan ben je verzekerd van een goede start van een carrière in het bedrijfsleven of de non-profit sector. Bedrijven vormen het hart van de Nederlandse economie. Kranten staan vol van ontwikkelingen op bedrijfseconomisch vlak die invloed hebben op de samenleving. Denk aan overnames, reorganisaties, fusies, winstdelingen en advertenties. Bedrijfseconomen bestuderen organisaties en hun omgeving vanuit verschillende invalshoeken.</p>';
					
					echo '<p class="dutch">Binnen de bacheloropleiding Bedrijfseconomie specialiseer je je in één van de vier kerndisciplines: accounting, financiering, management of marketing. Je kunt daarna doorstromen naar de verschillende van deze vakgebieden.</p>';
					
					echo '<p class="dutch">Bedrijfseconomen worden bijvoorbeeld, afhankelijk van hun specialisatie, accountant bij PwC, marketing manager bij Bol.com of financieel analist bij een multinational. Ook zien we veel afgestudeerden in functies als organisatieadviseur, logistiek manager of beleggingsadviseur.</p>';
					
					echo '<p class="english">When you choose school of business you are assured of a good start in a business career or the non-profit sector. Businesses form the heart of the Dutch economy. Papers are full of development on the Business economical field which directly affect society. Think of takeovers, reorganizations, fusions, profit sharing and advertisements. Business economics study organisations and their surrounding from different perspectives.</p>';
					
					echo '<p class="english">During the bachelor study Business economics you will specialize into one of the four core disciplines: accounting, financing, management or marketing. After that you will be able to go to one of these different fields of expertise.</p>';

					echo '<p class="english">Business economics will be put to work as , depending on their speciality, accountant at PwC, Marketing manager at Bol.com or financial analyst working for a multinational organisation. We also see a lot of graduates as organisation advisors, logistical managers or stocks advisors. </p>';

					echo '<h2 class="english">Afstudeerrichtingen</h2>';
					echo '<h2 class="dutch">Specialisations</h2>';
					
					echo '<p>';
					echo '<a href="index.php?p=bedrijfs_economie">
						<span class="english">Business Economics</span>
						<span class="dutch">Bedrijfs Economie</span>
					</a>';
					
					echo '<br>';
					
					echo '<a href="index.php?p=Business_Information_Management">Business information management.</a>';
					echo '</p>';
					
			echo '</div>';
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	// pagaina voor Informatica
	function Informatica(){
		global $core;
		
		echo '<div class="coll-100 dutch contentMargin">';
			echo '<div class="contentMargin" id="breadcrumbs">';
				echo $core->breadcrumbs();
			echo '</div>';
		
			echo '<div class="coll-66 ">';
			echo '<div class="coll-90">';
			echo '<div>';
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
			echo '<div>';
			echo '<img src="images\informatikaas.jpg" class="informatikaas" alt="informatikaas">';
			echo '<img src="images\informatikaas2.jpg" class="informatikaas" alt="informatikaas met suit">';
			echo '<img src="images\informatikaas3.jpg" class="informatikaas" alt="informatikaas toetsenbord">';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		
		//engelse versie
		echo '<div class="coll-100 english contentMargin">';
			echo '<div class="contentMargin" id="breadcrumbs">';
				echo $core->breadcrumbs();
			echo '</div>';
			
			echo '<div class="coll-66">';
			echo '<div class="coll-90">';
			echo '<div>';
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
	
	function School_of_Business(){
	global $core;
	echo'<div class="wrapperbusiness">';
	echo'<div class="coll-100" id="breadcrumbs">';
		echo $core->breadcrumbs();
	echo'</div>';
	echo'<div class="coll-100">';
	echo'<span class="dutch"><h1>School of Business</h1></span>';
	echo'<span class="english"><h1>School of Business</h1></span>';
	echo'</div>';
	echo'<div class="coll-40">';
	echo'<div class="fotobusiness">';
	echo'<img src="images/maneninpak2.jpg" alt="stockfoto">';
	echo'<br><br><br>';
	echo'<img src="images/studenten1.jpg" alt="stockfoto">';
	echo'</div>';
	echo'</div>';
	echo'<div class="coll-40">';
	echo'<div class="tekstbusiness">';
	echo'<span class="dutch"><h2>School of business</h2></span>';
	echo'<span class="english"><h2>School of Business</h2></span>';
	echo'<span class="dutch"><p>Kies je voor Bedrijfseconomie, dan ben je verzekerd van een goede start van een carrière in het bedrijfsleven of de non-profit sector. Bedrijven vormen het hart van de Nederlandse economie. Kranten staan vol van ontwikkelingen op bedrijfseconomisch vlak die invloed hebben op de samenleving. Denk aan overnames, reorganisaties, fusies, winstdelingen en advertenties. Bedrijfseconomen bestuderen organisaties en hun omgeving vanuit verschillende invalshoeken.</p></span>';
	echo'<span class="english"><p>When you choose Business economics you are assured of a good start in a business career or the non-profit sector. Businesses form the heart of the Dutch economy. Papers are full of development on the Business economical field which directly affect society. Think of takeovers, reorganizations, fusions, profit sharing and advertisements. Business economics study organisations and their surrounding from different perspectives.</p></span>';
	echo'<br>';
	echo'<p class="dutch">Binnen de bacheloropleiding Bedrijfseconomie specialiseer je je in één van de vier kerndisciplines: accounting, financiering, management of marketing. Je kunt daarna doorstromen naar de verschillende van deze vakgebieden.</p>';
	echo'<p class="english">During the bachelor study Business economics you will specialize into one of the four core disciplines: accounting, financing, management or marketing. After that you will be able to go to one of these different fields of expertise.</p>';
	echo'<br>';
	echo'<p class="english">Business economics will be put to work as , depending on their speciality, accountant at PwC, Marketing manager at Bol.com or financial analyst working for a multinational organisation. We also see a lot of graduates as organisation advisors, logistical managers or stocks advisors.</p>';
	echo'<p class="dutch">Bedrijfseconomen worden bijvoorbeeld, afhankelijk van hun specialisatie, accountant bij PwC, marketing manager bij Bol.com of financieel analist bij een multinational. Ook zien we veel afgestudeerden in functies als organisatieadviseur, logistiek manager of beleggingsadviseur.</p>';
	echo'</div>';;
	echo '</div>';
	echo'<div class="clear">';
	echo'</div>';
	echo'</div>';
	}
}
?>