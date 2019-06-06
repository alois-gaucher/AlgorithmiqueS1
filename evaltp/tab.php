<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		function moyenne($note1,$note2)
		{
			$moyenne = ($note1 + $note2) / 2;
			return $moyenne;
		}
		echo moyenne(18,13);echo'</br>';
		echo moyenne(13,12);
	 ?>
</body>
</html>