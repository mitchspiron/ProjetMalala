<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
    session_start();
$db= mysqli_connect('localhost','root','','publicad');


if (isset($_POST['verifier']))
{
    $pseudo=$_POST['pseudo'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $num=$_POST['num'];
    $type_permis=$_POST['type_permis'];

    if(empty($pseudo))
    {
        header("Location:form_verification.php?error= pseudo required");
        exit();
    }else if(empty($nom))
    {
        header("Location:form_verification.php?error= nom required");
        exit();
    }else if(empty($prenom))
    {
        header("Location:form_verification.php?error= prenom required");
        exit();
    }else if(empty($num))
    {
        header("Location:form_verification.php?error= numero de permis required");
        exit();
    }else if(empty($type_permis))
    {
        header("Location:form_verification.php?error= type du permis required");
        exit();
    }else 
    {
        $sql = "SELECT * FROM clients WHERE pseudo='$pseudo' AND nom='$nom' AND prenom='$prenom'AND num='$num' AND type_permis='$type_permis'";
        
        $result = mysqli_query($db, $sql);

        $data = mysqli_fetch_array($result);

        if ($data[0] == 0) {
            echo "
            <script type='text/javascript'>

            $(document).ready(function(){
                swal({
                    title: 'Oops !',
                    text: 'Erreur, veuillez réessayé',
                    icon: 'error',
                    buttons:'Réessayer',
                  }).then(function() {
                      window.location = 'form_verification.php';
                  })
                });

            </script>
            ";
        exit();
        }
        else {
            echo "
            <script type='text/javascript'>

            $(document).ready(function(){
                swal({
                    title: 'Good job $nom $prenom!',
                    text: 'Voulez-vous vendre un permis ?!',
                    icon: 'success',
                    button: ['Annuler','Oui'],
                  }).then(function() {
                      window.location='vente.php'
                    });
            });

            </script>
        ";
        exit();
        }
    }
}
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>