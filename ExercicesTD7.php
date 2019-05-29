<!-- Exercice 1 -->
<?php 
		function calculVolume($cote1, $cote2, $hauteur) 
		{ 
		    $volume = $cote1 * $cote2 * $hauteur ; 
		    return $volume; 
		} 

		//appel de ma fonction 
		$v = calculVolume(4, 2, 2); 
		echo 'Le volume est de ' . $v;
?>

<!-- Exercice 2 -->
<?php 
	function moyenne($nombre1, $nombre2) 
	{ 
		$moyenne = $nombre1 + $nombre2 / 2; 
		return $moyenne; 
	} 

	//appel de ma fonction 
	$m = moyenne(4, 2); 
	echo 'La moyenne est de ' . $m;
?>
