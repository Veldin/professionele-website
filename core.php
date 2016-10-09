<?php
//Een class met Core functies
class Core { 
	
	//Functie om de pagina te laden.
	function load(){
		global $pages;

		//Als pagina is aangegeven set de Pagina variabele.
		//Als de pagina niet is aangegeven - ga naar de Homepage.
		if (empty($_GET["p"])){ 
			$page = 'Home';
		}else{
			$page = $_GET["p"];
		}
		
		//Laad of de aangegeven pagina bestaat. 
		//Als deze niet bestaat - ga naar de notfound pagina.
		if (method_exists($pages,$page)){
			echo $pages->$page();
		}else{
			echo $pages->notfound();
		}	
	}

	// Functie die de pagina titel returned voor in de titel. (Lagestreep _ voor spatie)
	function paginaTitel($spatie = true){
		if (empty($_GET["p"])){ 
			$page = 'home';
		}else{
			if($spatie == true){
				$page = str_replace("_"," ",$_GET["p"]); //Voor het tonen op pagina
			}else{
				$page = strtolower($_GET["p"]); //Voor in de code
			}
		}
		
		return $page;
	}
	
	//Functie voor het verkrijgen van de huidige taal.
	function getTaal(){
		if (empty($_SESSION["taal"])){ 
			$_SESSION["taal"] = 'nl';
		}
		
		return $_SESSION["taal"];
	}
	
	//Functie om de taal te veranderen
	function taal(){
	
		if (empty($_SESSION["taal"])){ 
			$_SESSION["taal"] = 'nl';
		}
	
		if (!empty($_GET["t"])){ 
			$_SESSION["taal"] = $_GET["t"];
		}
		
	
		if($_SESSION["taal"] == 'en'){
			echo '<style>.dutch{display:none;}</style>';
		}else{
			echo '<style>.english{display:none;}</style>';
		}
	}

}
?>