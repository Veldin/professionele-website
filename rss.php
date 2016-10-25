<!DOCTYPE html>
<?php
	require ('core.php');

	$core = new Core;
	$feed = new Rss;


	$rss = $core->easy_curl("http://www.nu.nl/rss");

?>

<html>
	<head>
		<title>Rss Test</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php
			//Dit is een voorbeeld code om bepaalde te laten zien hoe je bepaalde elementen kunt ophalen.

			/* $titleList = $feed->fetch($rss, "title");
			$linkList = $feed->fetch($rss, "link");
			$descriptionList = $feed->fetch($rss, "description");
			$dc_creatorList = $feed->fetch($rss, "dc:creator");


			$titles = explode("&&", $titleList);
			$links = explode("&&", $linkList);
			$descriptions = explode("&&", $descriptionList);
			$dc_creators = explode("&&", $dc_creatorList);
			


			for($x = 2; $x < count($titles); $x++){
				echo $titles[$x] . "<br>";
				echo $links[$x] . "<br>";
				echo $descriptions[$x] . "<br>";
				echo $dc_creators[($x)] . "<br><br>";
			} */


/* 	$feed$core->fetch($rss, "<title>", "</title>");
	echo $feed . "<br>"; */
/*
	$rssString = explode( "<item>", $rss);
	$articles= count($rssString);
	class rss {
		function fetchTitle($rssString, $tagS, $end){
			foreach($rssString as $article){
				$varS = explode($begin, $article);
				$varE = explode($end, $article);
				$varELen = strlen($varE[1]);
				$varSLen = strlen($varS[1]);
				$length = $varSLen - $varELen;
			
				$var = substr($varS[1], 0, $length);
			}
		}
}*/

	?>
	</head>

	<body>
	</body>
</html>