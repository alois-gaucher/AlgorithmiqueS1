<!-- Exercice 1-->
<!-- PHP -->
<?php
		/* Fonction mail */
		function sendMail($destinataire, $sujet, $message)
		{
			mail($destinataire, $sujet, $message);
		}
?>

<!-- Exercice Upload -->
<!-- HTML -->
<body>
	<!-- Form Upload -->
	<form action="index.php" method="post" enctype="multipart/form-data">
	    Sélectionnez une image à uploader:
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submit">
	</form>
</body>

<!-- Script d'Upload -->
<!-- PHP -->
<?php
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "Le fichier est une image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "Le fichier n'est pas une image.";
		        $uploadOk = 0;
		    }
		}
		echo '<img src="uploads/'.$target_file.'">';
?>
