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
	
	//Functie die de breadcrumbs terug geeft
	function breadcrumbs(){
		global $core;
		
		//Mogelijke crumbs
		$crumb['Home'] = "<a href='index.php'>Home</a>";
		$crumb['Galerij'] = "<a href='index.php?p=galerij'>
		<span class='dutch'>Galerij</span>
		<span class='english'>Gallery</span>
		</a>";
		$crumb['Contact'] = "<a href='index.php?p=contactformulier'>Contact</a>";
		$crumb['Imageuploading'] = "<a href='index.php?p=Imageuploading'>Image uploading</a>";
		
		$crumb['School_of_business'] = "<a href='index.php?p=School_of_Business'>
		<span>School of Business</span>
		</a>";
		
		$crumb['bedrijfs_economie'] = "<a href='index.php?p=bedrijfs_economie'>
		<span class='dutch'>Bedrijfs Economie</span>
		<span class='english'>Business Economics</span>
		</a>";
		
		$crumb['business_information_management'] = "<a href='index.php?p=School_of_Business'>
		<span>Business Information Management</span>
		</a>";
		
		$crumb['School_of_technology'] = "<a href='index.php?p=School_of_Technology'>
		<span>School of Technology</span>
		</a>";
		
		$crumb['civiele_techniek_en_waterbouw'] = "<a href='index.php?p=Civiele_Techniek_en_Waterbouw'>
		<span class='dutch'>Civiele Techniek en Waterbouw</span>
		<span class='english'>Civil Tech and Engineering</span>
		</a>";
		
		$crumb['Informatica'] = "<a href='index.php?p=Informatica'>
		<span class='english'>Computer sciences</span>
		<span class='dutch'>Informatica</span>
		</a>";
		
		//Sorteren van crumbs om breadcrumbs te maken.
		switch (strtolower($core->paginaTitel(false))) {
			case 'home':
				return $crumb['Home'];
				break;
			case 'galerij':
				return $crumb['Home'].$crumb['Galerij'];
				break;
			case 'contactformulier':
				return $crumb['Home'].$crumb['Contact'];
				break;
			case 'imageuploading':
				return $crumb['Home'].$crumb['Galerij'].$crumb['Imageuploading'];
				break;	
			case 'school_of_business':
				return $crumb['Home'].$crumb['School_of_business'];
				break;	
			case 'bedrijfs_economie':
				return $crumb['Home'].$crumb['School_of_business'].$crumb['bedrijfs_economie'];
				break;	
			case 'business_information_management':
				return $crumb['Home'].$crumb['School_of_business'].$crumb['business_information_management'];
				break;					
			case 'school_of_technology':
				return $crumb['Home'].$crumb['School_of_technology'];
				break;
			case 'civiele_techniek_en_waterbouw':
				return $crumb['Home'].$crumb['School_of_technology'].$crumb['civiele_techniek_en_waterbouw'];
				break;
			case 'informatica':
				return $crumb['Home'].$crumb['School_of_technology'].$crumb['Informatica'];
				break;
			default:
				return $crumb['Home'];
				break;
		}
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
	
	function setGoogleMapLocation($street, $place, $windowText)
	{
		require_once "EasyGoogleMap.class.php";

		$googlemaps_api_key = "AIzaSyDM_k10aRxmq30_Zvf2Syu32EDnjWTdyT8";

		$gm = & new EasyGoogleMap($googlemaps_api_key);
		
		$gm->SetAddress($street . " , " . $place);
		$gm->SetInfoWindowText($windowText);
		$gm->mMapType = TRUE;
		$gm->SetMapWidth("300");
		$gm->SetMapHeight("300");
		
		echo $gm->GmapsKey();
		
		echo $gm->GetSideClick();
		echo $gm->MapHolder();
		echo $gm->InitJs();
		echo $gm->UnloadMap();
	}

	//Function to strip content from rss feeds.
    function fetch($rssFeed, $start, $strip){
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
           
           if ($strip == true) {
            $final = strip_tags($sub);
           }
           else {
               $final = $sub;
           }
        //Makes a string with all the stripped content.   
           $list = $list . "&&" . $final;
        }
        //returns the stripped content in a string.
        return $list;
        
    }   
	
	function imageuploading() {
        global $core;
        $target_dir = "images/uploads//";  
        // Check if image file is an actual image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".<br>";
                if (isset($_FILES["fileToUpload"])) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                    if ($core->imagecheck($imageFileType , $target_file) == true) {
                        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                        //call rename function
                        $core->renameimage($target_file, $target_dir, $imageFileType);
                        echo "File was uploaded";
                    } else {
                        echo "File was not uploaded";
                    }
                }         
            } else {
                echo "File is not an image.";
                return;
            }
        }
    }
     
	//Controleren of het geselecteerde bestand een afbeelding is.
    function imagecheck($imageFileType, $target_file) { 
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.<br>";
            return false;
        }    
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            return false;
        } else {
            return true;
        }
    }
    
	//Hernoemen van bestanden.
    function renameimage($target_file, $target_dir, $imageFileType) {
        $output = htmlspecialchars($_POST["title"]);
        $title = str_replace(" ","_", $output);
        $dirarray = scandir("images/submitted");
        natsort($dirarray);
        $dirarray = array_values($dirarray);
        if (array_key_exists(2, $dirarray)) {
            $number = end($dirarray);
            if (count($dirarray) >= 13 ) {
                $number = substr($number, 0, 2) + 1;
                rename($target_file, $target_dir . $number . "&&" . $title . "." . $imageFileType);
            }
            else {
                $number = substr($number, 0, 1) + 1;
                rename($target_file, $target_dir . $number . "&&" . $title . "." . $imageFileType);
            }
        } else {
            rename($target_file, $target_dir . "1&&" . $title . "." . $imageFileType);
        }
        return;
    } 
}
?>