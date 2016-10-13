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
	$feed->fetch($rss, "<item>", "</item>");
	echo $feed . "<br>";
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