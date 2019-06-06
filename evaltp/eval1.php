<!DOCTYPE html>
<html>
<head>
	<title>Evaluation php</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$produit = 1;
		$place = 7;
		$max = $place * $place;
		for ($i=$place; $i<$max; $i++)
		{
			$produit = $produit * $i * $place;
		}
		echo '<p>Produit: '.$produit.'</p>'."\n";
	 ?>
</body>
</html>