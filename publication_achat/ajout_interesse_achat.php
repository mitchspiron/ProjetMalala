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

            $pseudo_interesse=validate($_POST['pseudo_interesse']);
            $numTel_interesse=validate($_POST['numTel_interesse']);
            $mail_interesse=validate($_POST['mail_interesse']);
            
            if (empty($pseudo_interesse)) {
                header("Location: form_pub_achat.php?error=pseudo_interesse is required");
                exit();
            } else if (empty($numTel_interesse)) {
                header("Location: form_pub_achat.php?error=numTel_interesse is required&");
                exit();
            } else if (empty($mail_interesse)) {
                header("Location: form_pub_achat.php?error=mail_interesse is required&");
                exit();
            } else {
                    $sql2 = "INSERT INTO interesse(pseudo_interesse, numTel_interesse, mail_interesse) VALUES('$pseudo_interesse', '$numTel_interesse', '$mail_interesse')";
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