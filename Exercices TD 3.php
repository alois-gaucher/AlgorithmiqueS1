<!-- Nom prénom age -->
<!-- HTML -->
<form action="traitement.php" method="GET">
			<p>Nom: <input type="text" name="nom"></p>
			<p>Prénom: <input type="text" name="prenom"></p>
			<p>Age: <input type="text" name="age"></p>
			<p><input type="submit" name="Enregistrer"></p>
</form>

<!-- PHP -->
<?php 
			$nom = $_GET['nom'];
			$prenom = $_GET['prenom'];
			$age = $_GET['age'];

			echo 'Vous êtes '.$prenom.' '.$nom.', vous avez '.$age.' ans';			
?>

<!-- Calculatrice -->
<!-- HTML -->
<form action="traitement.php" method="POST">
			<p>Nombre 1: <input type="text" name="nombre1"></p>
			<p>Nombre 2: <input type="text" name="nombre2"></p>
			<p>
				<select name="operande">
				<option value="+">Addition</option>
				<option value="-">Soustraction</option>
				<option value="*">Multiplication</option>
				<option value="/">Division</option>
				</select>
			</p>
			<p><input type="submit" name="Calcul"></p>
		</form>

<!-- PHP -->
<?php 
			$nombre1 = $_POST['nombre1'];
			$nombre2 = $_POST['nombre2'];
			$operande = $_POST['operande'];

			switch ($operande) {
				case "+":
					$resultat = $nombre1+$nombre2;
					break;
				case "-":
					$resultat = $nombre1-$nombre2;
					break;
				case "*":
					$resultat = $nombre1*$nombre2;
					break;
				case "/":
					$resultat = $nombre1/$nombre2;
					break;
			}

			echo $nombre1.''.$operande.''.$nombre2.'='.$resultat;
		 ?>


<!-- Table de multiplication -->
<!-- HTML -->
<form action="traitement.php" method="POST">
			<p>Nombre A: <input type="text" name="nombreA"></p>
			<p>Nombre de lignes: <input type="text" name="nombreB"></p>
			<p><input type="submit" name="Calcul"></p>
</form>

<!-- PHP -->
<?php 
			/* Table de multiplication par 9 */
			$nombreA = $_POST['nombreA'];
			$nombreB = $_POST['nombreB'];
			$multiplication = 0;
			$i = 1;
			echo '<style type=text/css>
   			table tbody tr:nth-child(odd) { background-color: red; }
			</style>';
			echo '<table border="1">';
			echo '<td>';
			while ($i <= $nombreB)
			{
				$multiplication = $i * $nombreA;
				echo '<tr><td>'.$i.' x '.$nombreA.' =</td>';
				echo '<td>'.$multiplication.'</tr>';
				$i++;
			}
			echo '</td>';
			echo '</table>';
		 ?>