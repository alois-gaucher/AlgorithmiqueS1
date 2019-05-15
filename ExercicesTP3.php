<!-- Exercice 1 -->

<!-- HTML -->
<form action="index.php" method="POST">
			<p>Nom: <input type="text" name="nom"></p>
			<p>Prénom: <input type="text" name="prenom"></p>
			<p>Année:
				<select name="annee">
				<option value="MMI1">MMI1</option>
				<option value="MMI2">MMI2</option>
				<option value="MMI1D">MMI1D</option>
				<option value="MMI2D">MMI2D</option>
			</p>
			<p><input type="submit" name="Enregistrer"></p>
</form>

<!-- PHP -->
<?php 
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$annee = $_POST['annee'];
			echo 'Vous êtes '.$prenom.' '.$nom.', vous êtes en '.$annee.'';			
?>

<!-- Exercice 2 -->
<!-- PHP -->
<?php 

	$tableau = [];
	for($i = 0; $i < 20; $i++)
		{
			$tableau[$i] = rand(1,50);
			echo $tableau[$i].' ';
			echo '</br>';
		}
		$tableau[21] = min($tableau);
		echo 'Minimum: '.$tableau[21].'</br>';
		$tableau[22] = max($tableau);
		echo 'Maximum: '.$tableau[22].'</br>';
		$tableau[23] = array_sum($tableau)/count($tableau);
		echo 'Moyenne: '.$tableau[23].'</br>';

?>
