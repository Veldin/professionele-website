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
	
	function galerij(){
		
		//Gallerij
		//Geeft weer hoeveel bestanden zich bevinden in de directory in de vorm van een array.
		$dir = 'images/submitted/';
		$array = scandir($dir);
		//Het aantal bestanden weergegeven in enkel een nummer.
		$count = count($array) - 2;
		
		//echo $count . "<br>";


		//Het los weergeven van elke afbeeldin inclusief index nummer.
		$files = '';
		foreach($array as $file){
			$files = $file . '@@' . $files; 
		}
		//echo $files;

		$picPaths = explode('@@',$files);
		$paths = '';

		//Returns index number.
		$indexes = "";
		$picTitles = "";
		$locaties = "";
		for($a = 0; $a < $count; $a++){
			//echo $picPaths[$a] . "<br>";
				$picData = explode('&&',$picPaths[$a]);
				$index = $picData[0];
				$path = $dir . $index . "&&" . $picData[1];
				$name = $picData[1];

				$titles = explode('.', $name);
				$title = $titles[0];


				//Array_merge
				//Array_chunk
				$indexes = $index . "@@" . $indexes;

				

				
				$picTitles = $title . "@@" . $picTitles;
				
			

				$locaties = $path . "@@" . $locaties;
				
				//echo $index . "   -   " . $title . "   |-|   ". $path . "<br>";
		}

		$number = explode('@@', $indexes);
		$picNamen = explode('@@', $picTitles);
		$locs = explode('@@', $locaties);

		
		for($y = 0; $y < $count; $y++){
			
			//echo $number[$y] ."<br>";
			//echo $picNamen[$y] ."<br>";
			//echo $locs[$y] ."<br>";
		}
	
			//Beginnen echoen galerij items.
				//Voor elke pagina 3 rijen echoen.
$counter = 0;
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
			
		}
	}
	//De footer word op elke standaard pagina geladen aan de onderkant.
	function footer(){
		echo 'Footer!';
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