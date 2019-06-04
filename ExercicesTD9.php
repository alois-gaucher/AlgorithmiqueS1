<!-- Exercice 1 -->
<!-- PHP -->
	<?php
		$tableau = [1, 2, 3, 4, 5, 8, 37, 261, 363];
		function tableau($tableau) 
		{ 	
			$somme = 0;
		    echo '<table border=1px><tr>';
			for($i = 0; $i < count($tableau); $i++)
				{
					echo '<tr>';
					echo '<td>'.$tableau[$i].'</td>';
					echo '</tr>';
				}
			echo '</table>';

			for($z = 0; $z < count($tableau); $z++)
				{
					$somme = $somme + $tableau[$z];
				}
			return $moyenne = ($somme / count($tableau));
		} 

		/*Appel de ma fonction*/
		$moyenne = tableau($tableau);
		echo '</br>';
		echo 'La moyenne des valeurs est '.$moyenne.'';
	?>
