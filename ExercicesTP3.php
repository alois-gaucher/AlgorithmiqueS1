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
