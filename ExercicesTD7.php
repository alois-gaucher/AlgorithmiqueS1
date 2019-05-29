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
