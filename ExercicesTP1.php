<!-- Exercice 2 -->
$sexe = 'Homme';
			$departement = 'Aube';
			if ($sexe == 'Homme') {
				if ($departement == 'Aube') {
					echo '<p>Vous êtes un homme et vous venez de l\'Aube, félicitations</p>';
				}
				else {
					echo '<p>Vous êtes un homme et vous venez d\'ailleurs, félicitations</p>';
				}
			}
			else if ($sexe == 'Femme') {
				if ($departement == 'Aube') {
					echo '<p>Vous êtes une femme et vous venez de l\'Aube, félicitations</p>';
				}
				else {
					echo '<p>Vous êtes une femme et vous venez d\'ailleurs, félicitations</p>';
				}
			}

<!-- Exercice 3 -->
/* Affichage des nombres compris entre 20 et 50 */
				$i = 20;
				while ($i <= 50) {
					echo $i."\n".'</br>';
					$i++;
				}

<!-- Exercice 4 -->
/* Table de multiplication par 8 */
			$i = 1;
			$multiplication = 0;
			while ($multiplication < 95)
			{
				$multiplication = $i * 8;
				echo $i.' x 8 = '.$multiplication.'</br>';
				$i++;
			}

<!-- Exercice 5 -->
/* Table de multiplication par 9 */
			$i = 1;
			$multiplication = 0;
			echo '<style type=text/css>
   			table tbody tr:nth-child(odd) { background-color: red; }
			</style>';
			echo '<table border="1">';
			echo '<td>';
			while ($i <= 15)
			{
				$multiplication = $i * 9;
				echo '<tr><td>'.$i.' x 9 =</td>';
				echo '<td>'.$multiplication.'</tr>';
				$i++;
			}
			echo '</td>';
			echo '</table>';