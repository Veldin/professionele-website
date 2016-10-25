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
					echo '<h1>Nieuws</h1>';
					$rss = $core->easy_curl("http://www.nu.nl/rss");
					$feed['title'] = $core->fetch($rss, "title", "title");
					$feed['description'] = $core->fetch($rss, "description", "description");
					
					for ($x = 1; $x <= 4; $x++) {
						echo '<h2>'.$feed['title'][$x].'</h2>';
						echo $feed['description'][$x];
					} 

					
				echo '</div>';
			echo '</div>';
			
			echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="clear"></div>';

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