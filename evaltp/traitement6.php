<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$montantDeclare = $_POST['montantDeclare'];
		$age = $_POST['age'];
		$dpt = $_POST['dpt'];
		$taxe = 0;

		switch ($age) {
			case 18:
				$taxe += 10;
				break;

			default:
				$taxe += 15;
				break;
		}
		if ($dpt == 10 or 51) {
				$taxe += 15;
			}
		else {
			$taxe += 30;
		}

		if ($montantDeclare < 150) {
			$taxe = $taxe / 2;
		}

		else if ($montantDeclare > 300) {
			$taxe = $taxe * 2;
		}

		echo $taxe;

	 ?>
</body>
</html>