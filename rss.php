<!--
	Creator: Mark Meerlo
	Mail: Markmeerlo@hotmail.com
	Date: 13/10/2016
	File: rss.php
		Description: Example of how to call the fetch function in combination with easy_curl.
-->


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

			$titleList = $feed->fetch($rss, "title");
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
			}



	?>
	</head>

	<body>
	</body>
</html>