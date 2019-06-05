<!-- Exercice 1-->
<?php
		/* Fonction mail */
		fonction sendMail($destinataire, $sujet, $message)
		{
			mail($destinataire, $sujet, $message);
		}
?>
