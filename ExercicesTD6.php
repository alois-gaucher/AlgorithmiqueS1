<!-- Exercice 1 -->
<?php

	$pays = ['France', 'Belgique', 'Allemagne', 'Angleterre', 'Espagne'];

	echo "<table border=2px><tr>";
	for($i = 0; $i < count($pays); $i++)
		{
			echo '<ul>';
			echo '<li>'.$pays[$i].'</li>';
			echo '</ul>';
		}
?>


<!-- Exercice 2 -->
<?php
	//prix Nobel de physique
	$tableau = [
	['Nom' => 'Einstein', 'Prenom' => 'Albert', 'Annee' => 1921, 'Image' => '<img src="https://www.historyonthenet.com/authentichistory/1946-1960/1-cworigins/19460509_Albert_Einstein_To_Northwestern_U_Students-EINSTEINTN.jpg">', 'Description' => 'Pour ses contributions à la physique théorique, spécialement pour sa découverte de la loi de l\'effet photoélectrique.'], 
	['Nom' => 'Schrödinger' , 'Prenom' => 'Erwin', 'Annee' => 1933, 'Image' => '<img src="https://itknowledgeexchange.techtarget.com/overheard/files/2017/08/schroedinger.jpg">', 'Description' => 'Pour la découverte de nouvelles formes productives de la théorie atomique.'],
	['Nom' => 'Kao', 'Prenom' => 'Charles', 'Annee' => 2009, 'Image' => '<img src="https://www.biografias.es/files/star/thumb/c/charles-kao_4kmq5.jpg">', 'Description' => 'Pour une avancée dans les communications par fibre optique.'],
	];
		echo "<table border=1px><tr>";
		for($i = 0; $i < count($tableau); $i++)
			{
				echo "<td>" .$tableau[$i]['Nom']."</td>";
		        echo "<td>" .$tableau[$i]['Prenom']."</td>";
		        echo "<td>" .$tableau[$i]['Annee']."</td>";
		        echo "<td>" .$tableau[$i]['Image']."</td>";
		        echo "<td>" .$tableau[$i]['Description']."</td>";  					
				echo "</tr>";
			}
		echo "</table>";
	?>

<!-- Exercice 3 -->
<form action="index.php" method="post">
	<?php
	/* Couleurs */
	$tCouleur = ['Bleu', 'Rouge', 'Jaune', 'Cyan', 'Noir', 'Gris', 'Vert', 'Marron'];
	echo '<p>';
		for($i = 0; $i < count($tCouleur); $i++)
		{
			echo '<input type="checkbox" name="couleur[]" value="'.$tCouleur[$i].'">';
			echo $tCouleur[$i];
			echo '</br>';
		}
	echo '</p>';
	echo '<input type="submit" value="Envoyer"/>';
	echo '</br>';
	echo '<p>';
	foreach($_POST['couleur'] as $valeur)
	{
	   echo "Vous aimez la couleur $valeur</br>";
	}
	if(!$_POST['couleur']){
   	echo "Aucune checkbox n'a été cochée";
	}
	echo '</p>';
	?>
	</form>
