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
		
			echo '<div id="container">';
				echo '<div id="header">';
					echo '<div id="header_inner">';
				
					echo '</div>';
				echo '</div>';
				
				echo '<div id="headimage">';

				echo '</div>';
				
				
				echo '<div id="content">';
					echo '<div id="page" class="'.$core->paginaTitel(false).'">';
						$core->load();
					echo '</div>';
				
				
					echo '<div id="footer">';
						$pages->footer();
					echo '</div>';
				echo '</div>';
			echo '</div>';
		?>
	</body>
</html>





