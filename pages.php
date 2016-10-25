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
					echo '<p class="lijstjes";>Studies bij het Harambe College';
					echo '
						<ul class="footerlists";>
							<li><a href="School_of_Business.php";>School of Business</a></li>
							<li><a href="School_of_Technology.php";>School of Technology</a></li>
						</ul>
						<br>
						</p>';
					echo '<p class="lijstjes";>Afstuderen bij het Harambe College';
					echo '
						<ul class="footerlists";>
							<li><a href="bedrijfs_economie.php";>Bedrijfs Economie</a></li>
							<li><a href="Business_Information_Management.php";>Business Information Management</a></li>
							<li><a href="Civiele_Techniek_en_Waterbouw.php";>Civiele Techniek en Waterbouw</a></li>
							<li><a href="Informatica.php";>Informatica</a></li>
						</ul>
						</p>';
				echo '</div>';
				echo '<div class="coll-50">';
					echo '<p class="lijstjes";>Organisatie';
					echo ' 
						<ul class="footerlists";>
							<li><a href="Over_het_Harambe_College.php";>Over het Harambe College</a></li>
							<li><a href="Contact_Formulier.php";>Contact Formulier</a></li>
						</ul>
						<br>
						</p>';
					echo '<p class="lijstjes";>Kies taal / Switch languages';
					echo '
						<ul class="footerlists";>
							<li><a href="/* link van Robin */".php;>Nederlands / Dutch</a></li>
							<li><a href="/* link van Robin */.php";>Engels / English</a></li>
						</ul>
						</p>';
				echo '</div>';
			echo '</div>';
			echo '<div class="coll-50">';
				
			echo '</div>';
		echo '</div>';
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo 'Pagina niet gevonden!';
	}

}
?>