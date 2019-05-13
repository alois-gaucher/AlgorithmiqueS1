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
