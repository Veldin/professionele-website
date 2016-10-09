<?php
//Een class met al mijn paginas als functies

class Pages { 
	//Hoofd pagina
	function home(){
		echo 'Home pagina<br>';
		echo '<span class="dutch" >Deze tekst is in nederlands!</span>';
		echo '<span class="english" >this text is in english!</span>';
	}
	
	//De footer word op elke standaard pagina geladen aan de onderkant.
	function footer(){
		echo 'Footer!';
	}
	
	//De notfound pagina. Deze word aangeroepen als een pagina word aangeroepen die niet bestaat.
	function notfound(){
		echo 'Pagina niet gevonden!';
	}

}
?>