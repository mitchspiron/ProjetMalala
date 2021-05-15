<?php
		$db= mysqli_connect('localhost','root','','publicad');

		if (isset($_POST['publier'])) 
			{
				function validate($data)
				{
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}

				$localisation=validate($_POST['localisation']);
				$substance=validate($_POST['substance']);
				$nb_carre=validate($_POST['nb_carre']);
				$prix=validate($_POST['prix']);
			
				
				if (empty($localisation)) {
					header("Location: form_pub_vente.php?error=localisation is required");
					exit();
				} else if (empty($substance)) {
					header("Location: form_pub_vente.php?error=substance is required&");
					exit();
				} else if (empty($nb_carre)) {
					header("Location: form_pub_vente.php?error=nb_carre is required&");
					exit();
				} else if (empty($prix)) {
					header("Location: form_pub_vente.php?error=prix is required&");
					exit();
				} else {
						$sql2 = "INSERT INTO vente(localisation, substance, nb_carre, prix) VALUES('$localisation', '$substance', '$nb_carre', '$prix')";
						$result2 = mysqli_query($db, $sql2);
						if ($result2) {
							header("Location: pub_vente.php?success=ajout reussi");
							exit();
						} else {
							header("Location: form_pub_vente.php?error=unknown error occurred 2");
							exit();
						}
					}
			} else {
				header("Location: form_pub_vente.php?error=unknown error occurred 1");
				exit();

			}
	?>