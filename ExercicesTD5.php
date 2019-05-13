<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			$nbJoursM = 0;
			$nbJoursB = 0;
			/*Mois*/
			$TableMois = ['Mois','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'];
			/*Températures à Barcelone*/
			$tabBarcel = ['Barcelone',8,9,11,12,16,20,22,23,21,16,12,10];
			/*Températures à Madrid*/
			$tabMadrid = ['Madrid',6,8,11,12,16,21,25,25,20,14,9,7];

			echo "<table border=2px><tr>";
			for($i = 0; $i < count($tabBarcel); $i++)
				{
					echo "<tr>";
					echo "<td>" .$TableMois[$i]."</td>"; 		/*Case du mois*/
					echo "<td>" .$tabMadrid[$i]."</td>";		/*Case température Madrid*/
					echo "<td>" .$tabBarcel[$i]. "</td>";		/*Case température Barcelone */

					if ($tabMadrid[$i] > $tabBarcel[$i])
						{
							echo "<td> Madrid </td>";
							$nbJoursM++;
						}
					elseif ($tabMadrid[$i] < $tabBarcel[$i])
						{
							echo "<td> Barcelone </td>";
							$nbJoursB++;
						}
					elseif ($tabMadrid[$i] = $tabBarcel[$i])
						{
							echo "<td> Égalité </td>";
							$nbJoursB++;
							$nbJoursM++;
						}

					echo "</tr>";
				}
				echo "</table>". "</br>";

				/* Calcul du nombre de jours où il fait plus beau et affichage du résultat */
				if ($nbJoursM > $nbJoursB)
					{
						echo "Vous devriez partir à Madrid";
					}
				elseif ($nbJoursB > $nbJoursM)
					{
						echo "Vous devriez partir à Barcelone"; 
					}
				else 
					{ 
						echo "Peu importe!";
					}
				
		?>

	</body>
</html>
