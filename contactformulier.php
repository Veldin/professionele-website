<!DOCTYPE html>
<?php
	session_start();
	require ('core.php');
	require ('pages.php');
	
	
	$core = new Core;
	$pages = new Pages;
	
	
?>
<html>
	<head>
		<?php
			echo '<title>Harambe College - '.$core->paginaTitel().'</title>';
		?>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" rel="stylesheet" type="text/css">
		<?php //Bepaal de taal
			$core->taal();
		?>
	</head>
	<body>
		<?php 
			//
		

					echo'<div class="contactformulier">';
						$pages->contactformulier();
					echo '</div>';
		?>
	</body>
</html>

