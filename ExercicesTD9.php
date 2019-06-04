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

<!-- Exercice 2 -->
<!-- HTML -->
<form action="index.php" method="GET">
	<div>
	    <label for="nom">Nom</label></br>
	    <input type="text" name="Nom" id="nom" />
	</div>
	<div>
	    <label for="prenom">Prénom</label></br>
	    <input type="text" name="Prenom" id="prenom" />
	</div>
	<div>
	    <label for="datenaissance">Date de naissance</label></br>
	    <input type="date" name="datenaissance" id="datenaissance">
	</div>
	<div>
	    <label for="telephone">Téléphone</label></br>
	    <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
	</div>
	<div>
	    <label for="adresse">Adresse</label></br>
	    <input type="text" name="adresse" id="adresse" />
	</div>
	<div>
		<input type="submit" name="envoyer">
	</div>
	</form>

<!-- Exercice 3 -->
<!-- HTML -->
<form action="index.php" method="GET">
	<div>
	    <label for="nom">Nom: </label><input type="text" name="Nom" id="nom"/>
	</div>
	<div>
	    <label for="prenom">Prénom: </label><input type="text" name="Prenom" id="prenom"/>
	</div>
	<div>
	    <label for="datenaissance">Date de naissance: </label><input type="date" name="datenaissance" id="datenaissance">
	</div>
	<div>
	    <label for="telephone">Téléphone: </label><input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
	</div>
	<div>
	    <label for="adresse">Adresse: </label><input type="text" name="adresse" id="adresse"/>
	</div>
	<div>
		</br>
		<input type="submit" name="envoyer">
	</div>
	</form>
