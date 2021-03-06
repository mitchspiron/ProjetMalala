<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Publicad</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../public/assets/img/Inkedlogo_LI.jpg" rel="icon">
    <!--===============================================================================================-->
        <link href="../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../public/assets/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link rel="stylesheet" href="../public/assets/css/argon.css?v=1.2.0" type="text/css">
        <!--<link rel="stylesheet" href="assets/css/w3.css" type="text/css">-->
        <scrit href="recherche/recherche.js" rel="stylesheet"></script>
    <!--===============================================================================================-->
        <link href="../public/assets/vendor/bootstrap/css/bootstrap.min.jquery" rel="stylesheet">
    <!--===============================================================================================-->
        <script href="../public/assets/vendor/jquery/jquery.js" rel="stylesheet"></script>
    <!--===============================================================================================-->
        <script href="../public/assets/vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet"></script>
    <!--===============================================================================================-->
        <script href="../public/assets/vendor/jquery/jquery.min.js" rel="stylesheet"></script>
    <!--===============================================================================================-->
        <link href="../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link href="../public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link href="../public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link href="../public/assets/css/style.css" rel="stylesheet">
    <!--===============================================================================================-->
        <link href="../public/assets/css/look.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="../public/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../public/assets/css/util_form.css">
        <link rel="stylesheet" type="text/css" href="../public/assets/css/main_form.css">
    <!--===============================================================================================-->


</head>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
            <img src="../public/assets/img/LOGO_BCMM.jpg">
        </h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active">
                    <a href="../accueil/body.php">
                    Accueil
                    </a>
                </li>
                <li class="drop-down">
                    Publication
                    <ul>
                        <li>
                            <a href="../publication_vente/pub_vente.php">
                                Publication de Vente de Permis
                            </a>
                        </li>
                        <li>
                            <a href="pub_achat.php">
                                Publication de recherche de Permis
                            </a> 
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../accueil/contact.php">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="../accueil/service.php">
                        Service
                    </a>
                </li>
            </ul>
        </nav>
        
    </div>
</header>
<section id="rech2" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Recherche de Permis</h2>
            <p>A propos du Publication cadastrale </p>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8" >
                <a href="form_pub_achat.php" class="btn btn-outline-primary">+Ajout Publication</a>
                <!--<button type="button" id ="#ajout" name="ajout" class="btn btn-outline-primary" data-toggle="modal">+Ajout Publication de recherche</button>-->
            </div>

            <div class="col-12 col-sm-4 text-right">
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" method="POST">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <input class="form-control" id="search" name="search" placeholder="Recherche" type="text">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row icon-boxes" id="resultat">
            <?php 
                $db= mysqli_connect('localhost','root','','publicad');
            
                if (isset($_POST['search']))
                {
                    $searchkey=$_POST['search'];
                    $sql="SELECT * FROM acheteur WHERE type_permis_ach LIKE '%$searchkey%' OR substance_ach LIKE '%$searchkey%' 
                    OR localisation_ach LIKE '%$searchkey%'";
                }else{
                    $sql= "SELECT * FROM acheteur";
                }
                $query = mysqli_query($db,$sql) or die("not found");

                while($row = mysqli_fetch_assoc($query))
                {
                    echo "
                        <div class='col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0' data-aos='zoom-in' data-aos-delay='100'>
                            <div class='icon-box'>
                                <div class='icon'>
                                    <i class='ri-stack-line'></i>
                                </div>
                                <h4 class='title'> Permis{$row['id_ach']}</h4>
                                <p class='description'>
                                    Type de permis:{$row['type_permis_ach']} <br>
                                    Substance: {$row['substance_ach']} <br>
                                    Localisation: {$row['localisation_ach']} <br>
                                </p> <br>
                                <a  href='#interesse2_{$row['id_ach']}' class='btn btn-outline-primary' data-toggle='modal'>Int??ress??</a>
                            </div>
                        </div>
                    ";
                include('../public/modal/modal_interesse_achat.php');

                }

            ?>     
            
        </div>
        <script type="text/javascript" src="../public/recherche/recherche_ach.js"></script>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

<script src="../public/asset/vendor/jquery/dist/jquery.min.js"></script>
<script src="../public/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../public/asset/vendor/js-cookie/js.cookie.js"></script>
<script src="../public/asset/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../public/asset/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- JS -->
<script src="../public/asset/js/argon.js?v=1.2.0"></script>
<script src="../public/asset/css/bootstrap/bootstrap.min.js"></script>
<script src="../public/asset/css/bootstrap/jquery.min.js"></script>

  <!--===============================================================================================-->
	<script src="../public/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../public/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="../public/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../public/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../public/js/main_login.js"></script>
<!--===============================================================================================-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>