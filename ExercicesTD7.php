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
		$moyenne = ($nombre1 + $nombre2) / 2; 
		return $moyenne; 
	} 

	//appel de ma fonction 
	$m = moyenne(4, 2); 
	echo 'La moyenne est de ' . $m;
?>

<!-- Exercice 3 -->
	<?php
		$tableau = [1, 2, 3, 4, 5, 8, 37, 261, 363];
		function tableau($tableau) 
		{ 
		    echo "<table border=1px><tr>";
			for($i = 0; $i < count($tableau); $i++)
				{
					echo '<tr>';
					echo '<td>'.$tableau[$i].'</td>';
					echo '</tr>';
				}
			echo "</table>";
		} 

		/*Appel de ma fonction*/
		tableau($tableau);
	?>
