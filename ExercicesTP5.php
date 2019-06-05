<!-- Exercice 1-->
<?php
		/* Fonction mail */
		function sendMail($destinataire, $sujet, $message)
		{
			mail($destinataire, $sujet, $message);
		}
?>
