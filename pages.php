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
	
	// contactformulier
	function contactformulier(){
		echo'<form name="form" action="#" method="post">';
			echo'<p><span class="dutch">Naam:</span><span class="english">Name:</span><br> <input type="text" name="name"></p>';
			echo '<p><span class="english">emailadres:</span><span class="dutch">emailadres:</span><br><input type="text" name="mail"></p>';
			echo'<br><textarea name="text"></textarea>';
			echo'<p><input type="submit" name="submit" value="submit"></p>';
		echo '</form>';	
			
		if(isset($_POST["submit"])){
			$text = htmlspecialchars($_POST["text"]);
			$name = htmlspecialchars($_POST["name"]);		
			$mail = htmlspecialchars($_POST["mail"]);
			
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
	
	//logo
	/* function logo(){
		echo '<a href="index.php"><img src="images/harambe_logo.png" alt="logo"></a>';
		
	} */
	
	//De navigator word op elke standaard pagina geladen aan de bovenkant.
	function navigator(){

		echo '<ul id="navigator">';
			echo '<li><a href="index.php?p=home">Kies je opleiding</a></li>';
			echo '<li><a href="index.php?p=home">School of Business</a></li>';
			echo '<li><a href="index.php?p=home">School of Technology</a></li>';
			echo '<li><a href="index.php?p=home">Imageboard</a></li>';
			echo '<li><a href="index.php?p=home">Contact</a></li>';
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
				echo '<h1>Galerij</h1>';
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