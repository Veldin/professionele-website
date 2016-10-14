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
	
	//Functie voor het ophalen van externe paginas.
	function easy_curl($url, $backup = true){

		//Cleaned filename for backuping (also; folderd)
		$filename = $url;
		$filename = str_replace(":","&&",$filename);
		$filename = str_replace("?","))",$filename);
		$filename = str_replace("/","((",$filename);
		
		$filename = 'curl/'.$filename.'.txt';
		
		if (file_exists($filename) && $backup == true) {
			//File already exsists!
			$line = fgets(fopen($filename, 'r'));
			$timeout = 300000;
			
			if( (time() - $line) > $timeout){
				return $this->easy_curl($url, false);
			}else{
				return file_get_contents($filename, true);
			}
			
		} else { //Does not exist or timed out or ignore backup
		
			$ch = curl_init();  
			curl_setopt($ch, CURLOPT_URL, $url);  
			curl_setopt($ch, CURLOPT_HEADER, 0);  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			
			$output = curl_exec($ch); 
			curl_close($ch);
			
			//File does not already exsists!
			$myfile = fopen($filename, "w") or die("Unable to open file!");
			
			//write time and next line
			fwrite($myfile, time()."\r\n");
			
			fwrite($myfile, $output);
			fclose($myfile);
		
		}
		return $output;
	}
	
	//Function to strip content from rss feeds.
    function fetch($rssFeed, $start){
    	//define the tags.
    	$tagS = "<" . $start . ">";
    	$tagE = "</" . $start . ">";
    	//
    	$rssString = explode("<item>", $rssFeed);
    	$tagELen = strlen($tagE);

    	//Initialisation of list.
    	$list = "";


    	//Defines what chars to strip.
        foreach($rssString as $article){
            $varS = explode($tagS, $article);
            $varE = explode($tagE, $article);
            $varELen = strlen($varE[1]);
            $varSLen = strlen($varS[1]);
            $length = $varSLen - $varELen - $tagELen;

        //Strips content of defined tag.
           $sub = substr($varS[1], 0, $length);
        //Makes a string with all the stripped content.   
           $list = $list . "&&" . $sub;

        }
		echo '<hr>';
			
		echo '<hr>';
		
        //returns the stripped content in a string.
        return $list;
	}
}
?>