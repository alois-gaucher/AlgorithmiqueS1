<!DOCTYPE html>
<html>
<head>
	<title>Révisions</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	/* Question 6 */
	$age = 13;
	echo 'Je m\'appelle Machin et je suis ';
	if ($age >= 18) {
		echo 'majeur</br>';
	}
	else {
		echo 'mineur</br>';
	}
?>

<?php
	/* Question 7 */

	for ($i=0; $i < 10; $i++) {
		echo 'Je vais avoir une bonne note </br>';
	}
?>

<?php
	/* Question 8 */
	$i = 0;
	while ($i<10)
	 {
		echo 'Je vais avoir une bonne note </br>';
		$i++;
	}
?>


	/* Exercice 9 */
	<form action ="formulaire_get_tp3.html" method="GET">
	/* Facultatif */
<?php
	$nom = $GET[nom];
	$age = $GET[age];
	/**/
	echo 'Bonjour, je m\'appelle'.$GET[nom].'j\'ai'.$GET[age].'ans';
 ?>

 <!-- Tableau -->
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
  ?>

</body>
</html>
