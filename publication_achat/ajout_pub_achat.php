<?php
    $db= mysqli_connect('localhost','root','','publicad');

    if (isset($_POST['ajouter'])) 
        {
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $pseudo_ach=validate($_POST['pseudo_ach']);
            $nom_ach=validate($_POST['nom_ach']);
            $prenom_ach=validate($_POST['prenom_ach']);
            $mail_ach=validate($_POST['mail_ach']);
            $type_permis_ach=validate($_POST['type_permis_ach']);
            $localisation_ach=validate($_POST['localisation_ach']);
            $substance_ach=validate($_POST['substance_ach']);
        
            
            if (empty($pseudo_ach)) {
                header("Location: form_pub_achat.php?error=pseudo_ach is required");
                exit();
            } else if (empty($nom_ach)) {
                header("Location: form_pub_achat.php?error=nom_ach is required&");
                exit();
            } else if (empty($prenom_ach)) {
                header("Location: form_pub_achat.php?error=nb_carre is required&");
                exit();
            } else if (empty($mail_ach)) {
                header("Location: form_pub_achat.php?error=nb_carre is required&");
                exit();
            } else if (empty($type_permis_ach)) {
                header("Location: form_pub_achat.php?error=nb_carre is required&");
                exit();
            } else if (empty($localisation_ach)) {
                header("Location: form_pub_achat.php?error=nb_carre is required&");
                exit();
            } else if (empty($substance_ach)) {
                header("Location: form_pub_achat.php?error=prix is required&");
                exit();
            } else {
                    $sql2 = "INSERT INTO acheteur(pseudo_ach, nom_ach, prenom_ach, mail_ach,type_permis_ach ,localisation_ach , substance_ach) VALUES('$pseudo_ach', '$nom_ach', '$prenom_ach', '$mail_ach', '$type_permis_ach' ,  '$localisation_ach', '$substance_ach' )";
                    $result2 = mysqli_query($db, $sql2);

                    if ($result2) {
                        header("Location: pub_achat.php?success=ajout reussi");
                        exit();
                    } else {
                        header("Location: form_pub_achat.php?error=unknown error occurred 2");
                        exit();
                    }
                }

        }
?>