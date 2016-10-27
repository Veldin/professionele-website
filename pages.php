<?php
//Een class met al mijn paginas als functies

class Pages {  
	//Hoofd pagina
	function home(){
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
					echo '<h1>Welkom</h1>';
					
					echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
					
					echo '<h2>Header 2</h2>';
					echo "<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>";
					
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
	
	//logo
	function logo(){
		echo '<a href="index.php"><img src="images/harambe_logo.png" alt="logo"></a>';
		
	}
	
	//De navigator word op elke standaard pagina geladen aan de bovenkant.
	function navigator(){

		echo '<a href="index.php?p=kiesjeopleiding"><span>Kies je opleiding</span></a>';
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
		echo '</span>';
		

	}
	
	//De footer word op elke standaard pagina geladen aan de onderkant.
	function footer(){
		echo 'Footer!';
	}
	
	//logo
	function logo(){
		echo '<a href="index.php"><img src="images/harambe_logo.png" alt="logo"></a>';
		
	}
	
	//De navigator word op elke standaard pagina geladen aan de bovenkant.
	function navigator(){

		echo '<a href="kiesjeopleiding.php"><span>Kies je opleiding</span></a>';
		echo '<a href="schoolofbusiness.php"><span>School of business</span></a>';
		echo '<a href="schooloftechnology.php"><span>School of technology</span></a>';
		echo '<a href="imageboard.php"><span>Imageboard</span></a>';
		echo '<a href="contact.php"><span>Contact</span></a>';

	}
	
	// contactformulier
	function contactformulier(){
		
	echo'<form name="form" action="#" method="post">';
		echo'<p><span class="dutch">Naam:</span><span class="english">Name:</span><br> <input type="text" name="name"></p>';
		echo '<p><span class="english">emailadres:</span><span class="dutch">emailadres:</span><br><input type="text" name="mail"></p>';
		echo'<br><textarea name="text"></textarea>';
		echo'<p><input type="submit" name="submit" value="submit"></p>';
	echo '</form>';	
		
	if(isset($_POST["submit"])){
		$text = $_POST["text"];
		$name = $_POST["name"];		
		$mail = $_POST["mail"];
		if(!filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
			echo '<span class="dutch">'.$name.' ,bedankt voor de reactie. Er wordt zo spoedig mogelijk gereageerd naar '.$mail.".</span>";
			echo '<span class="english">'.$name.' ,thanks for your response. We will respond as soon as possible to '.$mail.".</span>";
		}
		else{
			echo'<span class="dutch">'.$mail.' is een ongeldig emailadres'.'</span>';
			echo'<span class="english">'.$mail.' is not a valid emailadres'.'</span>';
		}
		
	}else{
		
	}
	

		
	
		
		
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo 'Pagina niet gevonden!';
	}

	function test(){
		echo "test";
	}

}
?>