<?php
//Een class met al mijn paginas als functies

class Pages {  

	function lol(){
		
		echo 'lol';
	}
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
	
	function gallery(){
		echo '<div class="coll-100">';
			echo '<p>henk</p>';
			echo '<p>hoi</p>';
		/*sluiten div coll-100*/
		echo '</div>';
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo 'Pagina niet gevonden!';
	}

}
?>