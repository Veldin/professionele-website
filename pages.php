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

					echo '<h1 class="dutch">Welkom</h1>';
					echo '<h1 class="english">Welcome</h1>';

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
						//$rss = $core->easy_curl("http://feeds.bbci.co.uk/news/rss.xml");
						
						$strip = true;
						$titleList = $core->fetch($rss, "title", $strip);
						
						$descriptionList = $core->fetch($rss, "description", $strip);
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
                                                $strip = false;
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
					echo'<p class="dutch">Om contact met ons te maken, verzoeken wij u om dit contactformulier volledig in the vullen.</p>';
					echo'<p class="english">To contact us, please fill in the contact form below.</p>';
					echo'<form name="form" action="#" method="post">';
						echo'<p><span class="dutch">Naam:</span><span class="english">Name:</span><br> <input type="text" name="name">';
						echo '<br><span class="english">Email address:</span><span class="dutch">Emailadres:</span><br><input type="text" name="mail">';
						echo'<br><span class="english">Type your message here:</span><span class="dutch">Type hier uw bericht:</span><br><textarea name="text"></textarea></p>';
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
		
			echo '<div class="uploadlink">
				<span class="dutch"><a href="index.php?p=Imageuploading">Image uploading</a></span>
				<span class="english"><a href="index.php?p=Imageuploading">Image uploading</a></span>
			</div>';
		
			//tonen van controls
			
			echo '<div class="coll-100">';
				echo '<div class="coll-40"></div>';
				echo '<div class="coll-20">';
				
					if($list > 1){
						$minus = $list - 1;
						echo '<div class="control">';
							echo '<a href="index.php?p=galerij&l='.$minus.'"> < </a>';
						echo '</div>';
					}else{
						echo '<div class="control hidden">';
						echo '</div>';
					}
					
					
					echo '<div class="control">';
						echo $list;
					echo '</div>';

					if($list < $totalpage){
						$plus = $list + 1;
						echo '<div class="control">';
						echo '<a href="index.php?p=galerij&l='.$plus.'"> > </a>';
						echo '</div>';
					}else{
						echo '<div class="control hidden">';
						echo '</div>';
					}
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
										echo '<div class="vert-90" style="background-image: url('.$images[$i]["locaties"].')" >';
										echo '</div>';
										
										echo '<div class="vert-10">';
											echo ucfirst(str_replace("_"," ",$images[$i]['title']));
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
					if($list > 1){
						$minus = $list - 1;
						echo '<div class="control">';
							echo '<a href="index.php?p=galerij&l='.$minus.'"> < </a>';
						echo '</div>';
					}else{
						echo '<div class="control hidden">';
						echo '</div>';
					}
					
					echo '<div class="control">';
						echo $list;
					echo '</div>';

					if($list < $totalpage){
						$plus = $list + 1;
						echo '<div class="control">';
						echo '<a href="index.php?p=galerij&l='.$plus.'"> > </a>';
						echo '</div>';
					}else{
						echo '<div class="control hidden">';
						echo '</div>';
					}
					
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
					echo '<div class="lijstjes dutch">';
							echo 'Studies bij het Harambe College';
							echo '<ul class="footerlists dutch">';
								echo '<li class="dutch"><a href="index.php?p=School_of_Business">School of Business</a></li>';
								echo '<li class="dutch"><a href="index.php?p=School_of_Technology">School of Technology</a></li>';
							echo '</ul>';
					echo '</div>';
					
					echo '<div class="lijstjes english">Studies at Harambe College
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p=School_of_Business">School of Business</a></li>
							<li class="english"><a href="index.php?p=School_of_Technology">School of Technology</a></li>
						</ul>
						</div>';
						
					echo '<div class="lijstjes dutch">Afstuderen bij het Harambe College';
					echo '
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p=bedrijfs_economie">Bedrijfs Economie</a></li>
							<li class="dutch"><a href="index.php?p=Business_Information_Management">Business Information Management</a></li>
							<li class="dutch"><a href="index.php?p=Civiele_Techniek_en_Waterbouw">Civiele Techniek en Waterbouw</a></li>
							<li class="dutch"><a href="index.php?p=Informatica">Informatica</a></li>
						</ul>
						</div>';
					echo '<div class="lijstjes english">Graduate at Harambe College';
					echo '
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p=bedrijfs_economie">Business Economics</a></li>
							<li class="english"><a href="index.php?p=Business_Information_Management">Business Information Management</a></li>
							<li class="english"><a href="index.php?p=Civiele_Techniek_en_Waterbouw">Civil Tech and Engineering</a></li>
							<li class="english"><a href="index.php?p=Informatica">Computer sciences</a></li>
						</ul>
						</div>';
				echo '</div>';
 				echo '<div class="coll-50">';
					echo '<div class="lijstjes dutch">Organisatie';
					echo ' 
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p=contactformulier">Contact Formulier</a></li>
						</ul>
						</div>';
					echo '<div class="lijstjes english">Organisation';
					echo ' 
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p=about">About Harambe College</a></li>
							<li class="english"><a href="index.php?p=contact">Contact</a></li>
						</ul>
						</div>';
						
					echo '<div class="lijstjes dutch">Kies taal / Switch languages';
					echo '
						<ul class="footerlists dutch">
							<li class="dutch"><a href="index.php?p='.$core->paginaTitel(false).'&t=nl">Nederlands / Dutch</a></li>
							<li class="dutch"><a href="index.php?p='.$core->paginaTitel(false).'&t=en">Engels / English</a></li>
						</ul>
						</div>';
					echo '<div class="lijstjes english">Kies taal / Switch languages';
					echo '
						<ul class="footerlists english">
							<li class="english"><a href="index.php?p='.$core->paginaTitel(false).'&t=nl">Nederlands / Dutch</a></li>
							<li class="english"><a href="index.php?p='.$core->paginaTitel(false).'&t=en">Engels / English</a></li>
						</ul>
						</div>';
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
				echo '<h1 class="dutch">Pagina niet gevonden!</h1><div class="dutch">De aangevraagde pagina is niet gevonden.</div>';
				echo '<h1 class="english">Page not found!</h1><span class="english">The requested page was not found.</span>';
			echo '</div>';
		echo '</div>';
		
	}
	
	// pagina voor Civiele techniek en waterbouw
	function Civiele_Techniek_en_Waterbouw_old(){
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
					echo '<h2>School of business</h2>';
			
					echo '<p class="dutch">Kies je voor en opleiding in de school of business, dan ben je verzekerd van een goede start van een carrière in het bedrijfsleven of de non-profit sector. Bedrijven vormen het hart van de Nederlandse economie. Kranten staan vol van ontwikkelingen op bedrijfseconomisch vlak die invloed hebben op de samenleving. Denk aan overnames, reorganisaties, fusies, winstdelingen en advertenties. Bedrijfseconomen bestuderen organisaties en hun omgeving vanuit verschillende invalshoeken.</p>';
					
					echo '<p class="dutch">Binnen de bacheloropleiding Bedrijfseconomie specialiseer je je in één van de vier kerndisciplines: accounting, financiering, management of marketing. Je kunt daarna doorstromen naar de verschillende van deze vakgebieden.</p>';
					
					echo '<p class="dutch">Bedrijfseconomen worden bijvoorbeeld, afhankelijk van hun specialisatie, accountant bij PwC, marketing manager bij Bol.com of financieel analist bij een multinational. Ook zien we veel afgestudeerden in functies als organisatieadviseur, logistiek manager of beleggingsadviseur.</p>';
					
					echo '<p class="english">When you choose school of business you are assured of a good start in a business career or the non-profit sector. Businesses form the heart of the Dutch economy. Papers are full of development on the Business economical field which directly affect society. Think of takeovers, reorganizations, fusions, profit sharing and advertisements. Business economics study organisations and their surrounding from different perspectives.</p>';
					
					echo '<p class="english">During the bachelor study Business economics you will specialize into one of the four core disciplines: accounting, financing, management or marketing. After that you will be able to go to one of these different fields of expertise.</p>';

					echo '<p class="english">Business economics will be put to work as , depending on their speciality, accountant at PwC, Marketing manager at Bol.com or financial analyst working for a multinational organisation. We also see a lot of graduates as organisation advisors, logistical managers or stocks advisors. </p>';

					echo '<h2 class="dutch">Afstudeerrichtingen</h2>';
					echo '<h2 class="english">Specialisations</h2>';
					
					echo '<p class="afstudeerrichtingen">';
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
	function Informatica_old(){
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
	
	function Informatica(){
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
				echo '<h1 class="dutch">Informatica</h1>';
				echo '<h1 class="english">Computer sciences</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';
		

			//Linker kolom
			echo '<div class="coll-50">';

				echo '<h2 class="dutch">Informatica</h2>';
				echo '<h2 class="english">Computer sciences</h2>';
			
				echo '<b class="dutch">Als informaticus ben je in staat complexe ICT-systemen te analyseren, ontwerpen, realiseren en implementeren, waarbij je rekening houdt met de wensen van de opdrachtgever of gebruiker van het systeem.</b>';
				
				echo '<b class="english">As a computer scientist you are able to analyze, design, realize and implement  complex IT systems, where you take into account the wishes of the client and the end-user.</b>';
				
				echo '<p class="dutch">ICT is overal om ons heen te vinden. Jij bent als informaticus de specialist in het maken van grote en complexe informatiesystemen die snel, efficiënt en veilig werken. Zo kun je denken aan het ontwikkelen van een webshop (bijvoorbeeld Bol.com of Zalando), of het maken van een app (bijvoorbeeld Appie of Facebook), maar ook aan het analyseren van grote hoeveelheden data van social media (bijvoorbeeld analyseren van Tweets). Bij het ontwikkelen van deze systemen kom je in aanraking met verschillende programmeertalen. Zo leer je in het eerste jaar programmeren in (X)HTMLl en PHP.</p>';
				
				echo '<p class="english">It is all around you. You as a computer scientist are a specialist in the designing and making of large and complex information systems which are fast, efficient and secure.
				For example, creating an online store (i.e Bol.com or Zalando.nl), making an app (i.e. Appie or Facebook) but also analysing large amounts of data from social media (for instance, analysing tweets).
				During development of these and similar systems you will come into contact with multiple programming languages.
				During your first year you will learn how to program in html and PHP.</p>';
				
				echo '<p class="dutch">Naast het programmeren en ontwikkelen van verschillende toepassingen leer je ook samenwerken met medestudenten of met studenten van andere opleidingen. Na het volgen van de opleiding Informatica kun je aan de slag als bijvoorbeeld programmeur of applicatieontwikkelaar. Vanuit deze functies kun je doorgroeien naar ICT consultant, projectleider ICT of software architect.</p>';
				
				echo '<p class="english">Alongside programming you will learn how to work together with other students from your own and other courses. After your study you can start working as a programmer or app developer.
				Using these functions as a base, you can grow to become an IT-consultant, IT project leader or software architect.</p>';

				echo '<p class="dutch">Ben jij geïnteresseerd in nieuwe technologische ontwikkelingen, nieuwsgierig, een beetje eigenzinnig en een doorzetter, dan is de opleiding Informatica iets voor jou!</p>';
				
				echo '<p class="english">Are you interested in new technological developments, curious, a little bit stubborn and a real go-getter then this study might just be something for you!</p>';
				
				echo '<p class="dutch">Hoe is de opleiding opgebouwd?</p>';
				echo '<p class="english">How is the Study structured?</p>';
				
				echo '<p class="dutch">Bij de opleidingen van Het Harambe College voelt iedereen zich welkom en hoort iedereen erbij. Studenten en docenten kennen elkaar en weten elkaar te vinden. De docenten doen er alles aan om je te begeleiden bij je studie op een manier die bij jou past. Dit vraagt van jou betrokkenheid en een actieve inzet. Samen maken we het onderwijs.</p>';
				
				echo '<p class="english">Everyone feels welcome and is a part of our studies at Harambe college. Students and teachers know each other and know where to find each other. Teachers will do everything they can to guide you during your study in a way that suits you. This requires involvement and an active attitude of every student, together we are education.</p>';     

				echo '<p class="dutch">Kenmerkend voor het onderwijs van Het Harambe College is de aandacht voor:</p>';
				
				echo '<p class="english">Some characteristics of the Harambe college is our attention for:</p>';
				
				echo '<ul class="english">
					<li>Knowledge of the associated job</li>
					<li>Knowing how to act in a professional practice</li>
					<li>Your own professional identit</li>
				</ul>';
				
				echo '<ul class="dutch">
					<li>De kennisbasis van het beroep</li>
					<li>Handelen in de beroepspraktijk</li>
					<li>Je eigen professionele identiteit</li>
				</ul>';
				
				echo '<p class="dutch">Al deze elementen komen steeds aan bod tijdens de opleiding. In het begin ligt de nadruk op het ontwikkelen van kennis en vaardigheden, maar direct komt ook de praktijk aan bod. Je leert reële beroepsvraagstukken aan te pakken, in samenwerking met medestudenten, docenten, professionals uit de praktijk en praktijkgerichte onderzoekers. In het begin krijg je veel begeleiding van je docent, later neem je steeds meer het heft in eigen handen. Tijdens je studie leer je jezelf steeds beter kennen en ontdek je wat jouw unieke kwaliteiten zijn als beroepsbeoefenaar.</p>';
				
				echo '<p class="english">All of these elements will reappear during your study here at Harambe college. At the beginning the emphasis is on developing knowledge and skills, but practice will be a big part from the beginning as well. Students will learn how to tackle realistic professional issues, whilst working together with peer students, teachers, professionals and practice based researchers. You will receive generous amounts of counseling by your teacher during the beginning, as time passes, you will start to work and solve problems more individually.During your study you will learn more about yourself and you will find out what your unique qualities are as a job practitioner.</p>';

					
			echo '</div>';
			
			//Linker kolom
			echo '<div class="coll-50" >';
					echo '<div class="contentMargin img informatikaas">';
					echo '</div>';
					echo '<div class="contentMargin img informatikaas2">';
					echo '</div>';
					echo '<div class="contentMargin img informatikaas3">';
					echo '</div>';
			echo '</div>';
			
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function School_of_Technology(){
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
				echo '<h1>School of Technology</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';
		
			//Linker kolom
			echo '<div class="coll-50" >';
					echo '<div class="contentMargin img informatikaas">';
					echo '</div>';
					echo '<div class="contentMargin img lerencomp">';
					echo '</div>';
			echo '</div>';
			
			//Rechter kolom
			echo '<div class="coll-50">';
					echo '<h2>School of Technology</h2>';
			
					echo "<p class='dutch'>Welkom bij de School of Technology. Het bedrijfsleven is dringend op zoek naar creatieve denkers, bevlogen ICT'ers en communicatieprofessionals, die ondernemend en proactief zijn en met vernieuwende, creatieve concepten komen. Bij de School of Technology heb je de keuze uit 2 bacheloropleidingen. Je kunt kiezen uit de opleidingen Informatica en Civiele techniek en waterbouw. beide opleidingen hebben verschillende (internationale) richtingen. Dankzij ons wereldwijde netwerk en goede uitwisselingsovereenkomsten kun je tijdens je studie veel internationale ervaring opdoen. Denk aan het volgen van Engelstalig onderwijs, maar ook kun je stagelopen of studeren in het buitenland. Daarbij wordt er nauw samengewerkt met het bedrijfsleven. Vanaf dag één maak je bij ons kennis met de beroepspraktijk via actuele projecten, echte opdrachtgevers, stages en gastsprekers.'</p>";
					
					echo "<p class='english'>Welcome to the school of technology. Businesses are constantly looking for creative thinkers and communication professionals and IT specialists, which are proactive and revitalize the business life with new creative concepts.
At our school of technology you will be able to choose between 2 bachelor studies, computer sciences and Civil technology.
Both studies have different international directions to follow. Due to our worldwide network and quality every student is able to gain a lot of international experience.
Examples are: following an english course or studying abroad.</p>";
					
					echo '<h2 class="dutch">Afstudeerrichtingen</h2>';
					echo '<h2 class="english">Specialisations</h2>';
					
					echo '<p class="afstudeerrichtingen">';
					echo '<a href="index.php?p=informatica">
						<span class="english">Computer sciences</span>
						<span class="dutch">Informatica</span>
					</a>';
					
					echo '<br>';
					
					echo '<a href="index.php?p=Civiele_Techniek_en_Waterbouw">
						<span class="english">Civil Tech and Engineering</span>
						<span class="dutch">Civiele Techniek en Waterbouw</span>
					</a>';
					echo '</p>';
					
					
			echo '</div>';
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function Business_Information_Management(){
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
				echo '<h1>Business Information Management</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';
		

			//linker kolom
			echo '<div class="coll-66">';
					echo '<h2>Business Information Management</h2>';
			
					echo "<p class='dutch'>In de hbo-opleiding Business information Management leer je BIS (Business information systems) toe te passen in organisaties om bedrijfsprocessen en informatiesystemen te verbeteren. Je werkt nauw samen met de gebruikers van informatiesystemen en vervult vaak een brugfunctie tussen de gebruikers, het management en de technisch ontwerpers en beheerders van de informatiesystemen. Hiervoor moet je goed inzicht hebben in de organisatie van het bedrijf, de communicatielijnen, de informatiestromen en de informatiebehoeften. '</p>";
					
					echo "<h2 class='dutch'>Wat zijn de belangrijkste competenties?</h2>";
					
					echo "<p class='dutch'>Door het brede karakter van de opleiding moet je van vele markten thuis zijn. De belangrijkste vakinhoudelijke competenties in deze opleiding zijn: het methodisch ontwerpen, implementeren en beheren van informatiesystemen. Daarnaast moet je communicatief zijn en goed kunnen samenwerken. '</p>";
					
					echo "<h2 class='dutch'>Twee competenties zijn in het bijzonder belangrijk:</h2>";
					
					echo "<p class='dutch'>Analyseren van bedrijfsprocessen, informatiestromen en informatiebehoeften. Je beschrijft deze in functionele specificaties.'</p>";
					
					echo "<p class='dutch'>Adviseren over de toepassing van ICT, rekening houdend met financiële aspecten, bedrijfsvoering, organisatieverandering, haalbaarheid en risico’s.'</p>";
					
					echo "<p class='dutch'>Daarnaast wijzen enkele hogescholen op het belang van taalvaardigheid. Je moet goed kunnen presenteren en rapporteren over abstracte onderwerpen. Met name mbo-doorstromers moeten hier extra inspanning voor leveren.'</p>";
			
					echo "<p class='english'>During Business information management you will learn how to use a BIS (Business information system) in organisations and how to improve information systems. You will work closely with users of information systems and you mostly act as a bridge function between users, management and the technical designers of information systems. This is why you’ll need a good insight into the organisation of the company, the communication lines, the streams of information and information needs).'</p>";
					
					echo "<h2 class='english'>What are the most important competences?</h2>";

					echo "<p class='english'>Due to the wide character of the study you will need to be proficient at a lot of things. The most important job-relevant competences of this study are: methodological design, implementation and administration.'</p>"; 
					
					echo "<h2 class='english'>Two competences are especially important:</h2>";
					
					echo "<p class='english'>Analysing of business processes, currents of information and information needs. A student will describe these in functional requirements.</p>";
					
					echo "<p class='english'>Advice about the use of IT, keeping in mind financial aspects, business execution, organisation change, feasibility and risks.</p>";

					echo "<p class='english'>Apart from this, some schools make clear the need for language skill. A student will need to be able to present and rapport about abstract subjects.'</p>";
			echo '</div>';
			
			//rechter kolom
			echo '<div class="coll-33" >';
					echo "<div id='beurs' class='contentMargin'>";
						$rss = html_entity_decode($core->easy_curl("http://www.beursgorilla.nl/rss/rss-aex.asp"));					
                                                $strip = false;
                                                $categoryList = $core->fetch($rss, "category", $strip);
						$descriptionList = $core->fetch($rss, "description", $strip);
                                                $categories = explode("&&", $categoryList);
						$descriptions = explode("&&", $descriptionList);
						for ($x = 2; $x <= 5; $x++) {
						
							if($core->getTaal() != 'nl'){
								//Translate the stocks
								$descriptions[$x] = str_replace("Laatst","Latest",$descriptions[$x]);
								$descriptions[$x] = str_replace("Verschil","Difference",$descriptions[$x]);
								$descriptions[$x] = str_replace("Vorig Slot","Last results",$descriptions[$x]);
								$descriptions[$x] = str_replace("Hoogste koers","Highest price",$descriptions[$x]);
								$descriptions[$x] = str_replace("Laagste koers","Lowest price",$descriptions[$x]);
								$descriptions[$x] = str_replace("Bied koers","Bid rates",$descriptions[$x]);
								$descriptions[$x] = str_replace("Laat koers","Selling rates",$descriptions[$x]);
									
							}
                            echo $categories[$x];
							echo $descriptions[$x];
						}						
					echo "</div>";
			echo '</div>';
			
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function bedrijfs_economie(){
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
				echo '<h1 class="dutch">Bedrijfs Economie</h1>';
				echo '<h1 class="english">Business Economics</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';
			
			//Linker kolom
			echo '<div class="coll-66">';
					echo '<h2 class="dutch">Bedrijfs Economie</h2>';
					echo '<h2 class="english">Business Economics</h2>';
			
					echo '<p class="dutch">Tijdens de hbo-opleiding Bedrijfseconomie leer je bedrijfsvoering van een onderneming te beheersen. Bedrijfsbeleid wordt omgezet in begrotingen, die weer moeten worden nageleefd. Om dit te kunnen, moet je verstand krijgen van de financiële en de administratieve processen in bedrijven. Bedrijfseconomie is een brede opleiding, waarmee je veel kanten op kunt. Na de voltooiing ervan ben je eerder generalist dan specialist.</p>';
					
					echo '<p class="dutch">Ook het omgaan met zowel de interne en de externe berichtgeving komen aan de orde. Een voorbeeld van interne berichtgeving is het informeren en adviseren van het management. Bij externe berichtgeving kun je denken aan het opstellen van een jaarrekening.</p>';
					
					echo '<p class="dutch">De tendens is dat bedrijfseconomen zich minder bezighouden met de financiële controle achteraf en meer met het sturen en ontwerpen van bedrijfsprocessen. De dagelijkse bezigheden verschuiven steeds meer in de richting van wat een projectmanager of een manager doet. Veel opleidingen sluiten hierop aan door vakken aan te bieden als managementvaardigheden en communicatieve vaardigheden.</p>';
					
					echo '<p class="dutch">Je kunt de studie zowel voltijd, deeltijd als duaal volgen. De keuze aan opleidingsinstituten is heel groot. Elke aanbieder legt het accent weer op andere lesonderwerpen en specialisaties.</p>';
					
					echo "<h2 class='dutch'>Wat kun je ermee worden?</h2>";
					
					echo "<p class='dutch'>Meer dan de helft van de afgestudeerden vindt een baan als 'financiële man' in het bedrijfsleven of de zakelijke dienstverlening. Van de overige bedrijfseconomen werkt ongeveer tien procent in de bankwereld, ongeveer vijf procent bij de overheid, vijf procent in de handel en drie procent bij verzekeraars.</p>";
					
					echo "<ul class='dutch'>";
						echo "<li>hoofd financiële administratie</li>";
						echo "<li>project manager</li>";
						echo "<li>controller</li>";
						echo "<li>accountmanager</li>";
						echo "<li>financieel analist</li>";
						echo "<li>AA-accountant</li>";
						echo "<li>beleggingsadviseur</li>";
					echo "</ul>";
					
					echo "<p class='english'>During your study of Business economics, you will learn how to control the operational management of a business. Company policies are converted into a budget which has to be executed. To be able to do this, students will have to master the financial and administrative processes of businesses. Business economics is a diverse study, which you can use to go many different paths inside a business career path.</p>";
					
					echo "<p class='english'>Dealing with external and internal messaging will also be a part of your courses. An example of internal messaging is the informing and advising of management. External messaging is for example: The making of a yearly bill.</p>";
					
					echo "<p class='english'>Business economics are less involved in the financial check which follows but more with the steering and designing of business processes. The daily works will change more and more into what a project manager or manager does. Many studies link into this by offering courses relevant to managementvaardigheden and communicative skills.</p>";
					
					echo "<p class='english'>It’s possible to enroll on a full-time basis or a half-time basis. There are many different studies and every different school offers different priorities and subjects.</p>";
					
					echo "<h2 class='english'>What jobs will be available?</h2>";

					echo "<p class='english'>More than half of all college graduates finds a job as a ‘financial man’ in the business life. Of the remaining fifty percent almost ten percent works in the banking world, 5 percent government, 5 percent trade and three percent at insurance companies.</p>";
					
					echo "<ul class='english'>";
						echo "<li>head financial administration";
						echo "<li>project manager";
						echo "<li>controller";
						echo "<li>accountmanager";
						echo "<li>financial analyst";
						echo "<li>AA-accountant";
						echo "<li>stock advisor";
					echo "</ul>";
			
			echo '</div>';
					
			//Rechter kolom
			echo '<div class="coll-33" >';
					echo '<div class="contentMargin img informatikaas">';
					echo '</div>';
					
					echo '<div class="contentMargin img lerencomp">';
					echo '</div>';
					
					echo '<div class="contentMargin img lerencomp">';
					echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function Civiele_Techniek_en_Waterbouw(){
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
				echo '<h1 class="dutch">Civiele Techniek en Waterbouw</h1>';
				echo '<h1 class="english">Civil Tech and Engineering</h1>';
			echo '</div>';
		echo '</div>';
		
		echo '<div class="clear"></div>';
		
		//pagina content
		echo '<div class="coll-100">';

			//linker kolom
			echo '<div class="coll-66">';
					
					echo '<h2 class="dutch">Civiele Techniek en Waterbouw</h2>';
					echo '<h2 class="english">Civil Tech and Engineering</h2>';
			
					echo '<b class="dutch">Is een brug voor jou meer dan een oversteek over een rivier of weg en zie jij ook meer mogelijkheden met een tunnel, dijk of parkeergarage?</b>';
					
					echo '<p class="dutch">Al tijdens de opleiding HBO Civiele Techniek ontwerp en bouw jij een jachthaven en een tunnel, leer je alles over het ontwerpen en aanleggen van wegen en sporen en ga je serieus aan de slag met de inrichting van ons land. Het vakgebied is zo breed, dat er voor jou voldoende uitdaging is. Wie weet geef jij als civiel ingenieur straks vorm aan onze woon- en leefomgeving!</P>';
					
					echo '<h2 class="dutch">Ontwerpen, uitvoering en inrichten</h2>';
					
					echo '<p class="dutch">Civiele Techniek wordt ook wel Weg- en Waterbouwkunde genoemd. Je werkt aan de ontwikkeling, het ontwerp en het beheer van infrastructuur voor de inrichting van het land. Denk maar aan: transport (bruggen, tunnels, viaducten en (water-)wegen), bescherming tegen water (dijken en een stormvloedkering), watermanagement en waterbeheer (gemalen, sluizen, kanalen en afvalwaterzuivering) en openbare voorzieningen (parkeergarages, scholen en ziekenhuizen).</P>';
					
					echo '<p class="dutch">Bij weg- en waterbouw is elk project anders. Samen met je projectteam zoek je naar de beste oplossing voor een specifiek probleem. Wat zijn de eisen, wat is de situatie, hoe is de grond, hoeveel verkeer is er? Elk project word je opnieuw uitgedaagd en lever je een uniek eindproduct op. 
					Waar kun je aan de slag na de hbo-opleiding Civiele Techniek?</P>';
					
					echo '<p class="dutch">Over een baan hoef jij je geen zorgen te maken; Nederlandse civiel ingenieurs hebben internationaal een goede reputatie. Met de hbo-opleiding Civiele Techniek kun je aan de slag bij advies- en organisatiebureaus, aannemers, rijksoverheid, provincies, gemeenten en waterschappen.</P>';
					
					echo '<p class="dutch"> Je gaat bijvoorbeeld bij Ballast Nedam, BAM, Dura Vermeer of Arcadis aan het werk als ontwerper, constructeur, opzichter, uitvoerder, werkvoorbereider, projectleider of contractspecialist.</P>';
					
					echo '<b class="english">Is a bridge for you more than a crossing over a river or road and can you see more possibilities? For instance a tunnel, dyke or parking garage?</b>';
					
					echo '<p class="english">During your study Civil technology and waterworks you will design and build a yacht and a tunnel, you will learn all about designing and construction of roads and railroad tracks. You will begin to actively work on the infrastructure of our country. This study is so diverse that there is enough challenge for you, who knows? Perhaps you will soon go to work as a civil engineer creating our living environment!</P>';

					echo '<h2 class="english">Designing, executing and furnishing.</h2>';
					 
					echo '<p class="english">Civil technology is also called Road and Water architecture. You will work based on development, designing and monitoring infrastructure in our country. For instance: transport (bridges, tunnels, viaducts and roads), protection against water (dykes), water management (channels, water treatment) and public places (parking garages, schools and hospitals).</P>';

					echo '<p class="english">During road construction projects every project is different. Together with your project team you will find the best solution to every specific problem. What are the demands, the situation, what type of soil and how many traffic is expected. Every project will result in you being challenged yet again and will result in unique final results.</P>';

					echo '<p class="english">You won’t need to worry about getting a job, dutch civil engineers have a well regarded international reputation. With your Civil technology diploma you will be able to work at organisation bureaus, contractors, project leaders or contract specialists. </P>';

			echo '</div>';
			
						//rechter kolom
			echo '<div class="coll-33" >';
					echo '<div class="contentMargin">';
							echo $core->setGoogleMapLocation("van Schaikweg 94",  "Emmen", "Stenden University </br> ");
					echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';
	}
	
	function School_of_Business(){
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
					echo '<h2>School of business</h2>';
			
					echo '<p class="dutch">Kies je voor en opleiding in de school of business, dan ben je verzekerd van een goede start van een carrière in het bedrijfsleven of de non-profit sector. Bedrijven vormen het hart van de Nederlandse economie. Kranten staan vol van ontwikkelingen op bedrijfseconomisch vlak die invloed hebben op de samenleving. Denk aan overnames, reorganisaties, fusies, winstdelingen en advertenties. Bedrijfseconomen bestuderen organisaties en hun omgeving vanuit verschillende invalshoeken.</p>';
					
					echo '<p class="dutch">Binnen de bacheloropleiding Bedrijfseconomie specialiseer je je in één van de vier kerndisciplines: accounting, financiering, management of marketing. Je kunt daarna doorstromen naar de verschillende van deze vakgebieden.</p>';
					
					echo '<p class="dutch">Bedrijfseconomen worden bijvoorbeeld, afhankelijk van hun specialisatie, accountant bij PwC, marketing manager bij Bol.com of financieel analist bij een multinational. Ook zien we veel afgestudeerden in functies als organisatieadviseur, logistiek manager of beleggingsadviseur.</p>';
					
					echo '<p class="english">When you choose school of business you are assured of a good start in a business career or the non-profit sector. Businesses form the heart of the Dutch economy. Papers are full of development on the Business economical field which directly affect society. Think of takeovers, reorganizations, fusions, profit sharing and advertisements. Business economics study organisations and their surrounding from different perspectives.</p>';
					
					echo '<p class="english">During the bachelor study Business economics you will specialize into one of the four core disciplines: accounting, financing, management or marketing. After that you will be able to go to one of these different fields of expertise.</p>';

					echo '<p class="english">Business economics will be put to work as , depending on their speciality, accountant at PwC, Marketing manager at Bol.com or financial analyst working for a multinational organisation. We also see a lot of graduates as organisation advisors, logistical managers or stocks advisors. </p>';

					echo '<h2 class="dutch">Afstudeerrichtingen</h2>';
					echo '<h2 class="english">Specialisations</h2>';
					
					echo '<p class="afstudeerrichtingen">';
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
}
?>