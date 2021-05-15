<?php $db= mysqli_connect('localhost','root','','publicad'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--=================================Favicons============================================-->
    <link href="../public/assets/img/Inkedlogo_LI.jpg" rel="icon">
    <title>Vente</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link href="../public/assets/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link href="../public/assets/vendor/bootstrap/css/bootstrap.min.jquery" rel="stylesheet">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
        <script href="../public/assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet"></script>
    <!--===============================================================================================-->
        <link href="../public/assets/css/style.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/css/util_form.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/main_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/vendor/select2/select2.min.css">
</head>


<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
            <img src="../public/assets/img/LOGO_BCMM.jpg">
        </h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active">
                    <a href="index.php">
                    Accueil
                    </a>
                </li>
                <li class="drop-down">
                    Publication
                    <ul>
                        <li>
                            <a href="pub_vente.php">
                                Publication de Vente de Permis
                            </a>
                        </li>
                        <li>
                            <a href="../publication_achat/pub_achat.php">
                                Publication de recherche de Permis
                            </a> 
                        </li>
                    </ul>
                <li>
                    <a href="essaie">
                        Essaie
                    </a>
                </li>
                <li>
                    <a href="#portfolio">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="contact">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<body>
<div class=""></div>
        <div class="row"  id ="rech1">
            <div class="col-12 col-sm-6">
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100 p-l-55 p-r-55 p-t-65">
                            <form class="login100-form validate-form" id="" action="ajout_pub_vente.php" method="post">
                                <div class="position-relative">
                                    <h2 class="login100-form-title">
                                        Formulaire
                                    </h2>
                                </div>

                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="error">
                                        <?php echo $_GET['error']; ?>
                                    </div>
                                <?php } ?>
                                <div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
                                    <span class="label-input100">pseudo</span>
                                    <input class="input100" type="number" placeholder="numero de série" name="nb_carre" autocomplete="off">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>                            
                                </div>

                                <div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
                                    <span class="label-input100">Localisation</span>
                                    <select name="localisation" class="form-control" required="required" autocomplete="off"> 
                                        <?php 
                                            $loc = "SELECT * FROM localisation";
                                            $listeloc = mysqli_query($db, $loc);
                                            while($row = mysqli_fetch_array($listeloc)){
                                                echo '<option>'.$row['lieu'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
                                    <span class="label-input100">Substance</span>
                                    <select name="substance" class="form-control" required="required" autocomplete="off">
                                    <?php 
                                        $sub = "SELECT * FROM substance";
                                        $listesub = mysqli_query($db, $sub);
                                        while($row = mysqli_fetch_array($listesub)){
                                            echo '<option>'.$row['nom_sub'].'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>

                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100">Nombre de carrée</span>
                                    <input class="input100" type="number" placeholder="Nombre de carré" name="nb_carre" autocomplete="off">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>

                                <div class="wrap-input100 validate-input m-b-23" >
                                    <span class="label-input100">Prix</span>
                                    <input class="input100" type="number" placeholder="Nombre de carré" name="prix" autocomplete="off">
                                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button name="publier" class="login100-form-btn" type="submit">
                                            Publier
                                        </button>
                                    </div>
                                </div>
                                <a href="index.php" class="ca">Acceuil</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6" style="margin-top:15%;">
                <div class="wrap">
                    <p class="text-center">
					    <img src="../public/assets/img/template.png" class="col-md-3  align-items-center justify-content-center" alt=""><br>
                        " VEUILLER REMPLIR CE FORMULAIRE"
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>