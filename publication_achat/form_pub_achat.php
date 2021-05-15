<?php $db= mysqli_connect('localhost','root','','publicad'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../public/assets/bootstrap.min.css" rel="stylesheet">
    <!--===============================================================================================-->
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
<body>
	<div class="row"  id ="rech1">
		<div class="col-12 col-sm-6">
			<div class="limiter">
				<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
					<div class="wrap-login100 p-l-55 p-r-55 p-t-65">
						<form class="login100-form validate-form" action="ajout_pub_achat.php" method="post">
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

							<div class="wrap-input100 validate-input m-b-23">
								<span class="label-input100">Numeros Utilisateur</span>
                                <?php
                                $db= mysqli_connect('localhost','root','','publicad');
                  
                                function checkKeys($db, $randStr)
                                    {
                                        $keyExists="";
                                        $sql= "SELECT* FROM pseudo";
                                        $result= mysqli_query($db, $sql);
                              
                                      while ($row= mysqli_fetch_assoc($result))
                                     {
                                         if($row['pseudo']=$randStr){
                                             $keyExists = true;
                                             break;
                                         }else {
                                             $keyExists = false;
                                         }
                                      }
                                         return $keyExists;
                                    }
                                 
                                function generateKey($db)
                                 {
                                     $keyLength= 5;
                                     $str= 'AZERTYUIOPQSDFGHJKLMWXCVBN123456789';
                                     $randStr= substr(str_shuffle($str), 0 , $keyLength);
                                 
                                     $checkKey = checkKeys($db, $randStr);
                                 
                                     while ($checkKey == true)
                                     {
                                         $randStr = substr(str_shuffle($str), 0,$keyLength);
                                         $checkKey = checkKeys($db, $randStr);
                                     }
                                     return $randStr;
                                 }
                              
                                ?>
								<input class="input100" type="text" placeholder="Votre numeros utilisation" name="pseudo_ach" autocomplete="off" value="
                                <?php echo generateKey($db);?>
                                " readonly>
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>
						
							<div class="row">
								<div class="col-12 col-sm-6 wrap-input100 validate-input m-b-23" data-validate = "Username is required">
									<span class="label-input100">Nom</span>
									<input class="input100" type="text" placeholder="Votre Nom" class="form-control" name="nom_ach" id="nom_ach">
									<span class="focus-input100" data-symbol="&#xf206;"></span>
								</div>

								<div class="col-12 col-sm-6 wrap-input100 validate-input m-b-23" data-validate = "Username is required">
									<span class="label-input100">Prénom</span>
									<input class="input100" type="text" placeholder="Votre Prenom" class="form-control" name="prenom_ach" id="prenom_ach">
									<span class="focus-input100" data-symbol="&#xf206;"></span>
								</div>
							</div>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "E-mail is required">
								<span class="label-input100">E-mail</span>
								<input class="input100" type="text" placeholder="Entrez votre adresse mail" class="form-control" name="mail_ach" id="mail_ach" value="">
								<span class="focus-input100" data-symbol="&#xf206;"></span>
							</div>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
								<span class="label-input100">Type de permis</span>
								<select name="type_permis_ach" class="form-control" required="required" autocomplete="off">
									<?php 
										$query = "SELECT * FROM permis";
										$do = mysqli_query($db, $query);
										while ($row = mysqli_fetch_array($do))  
										{
											echo '<option>'.$row['nom_permis'].'</option>';
										}
									?>
								</select>
							</div>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
								<span class="label-input100">Substance</span>
								<select name="substance_ach" class="form-control" required="required" autocomplete="off"> 
										<?php 
											$sub = "SELECT * FROM substance";
											$listesub = mysqli_query($db, $sub);
											while($row = mysqli_fetch_array($listesub)){
												echo '<option>'.$row['nom_sub'].'</option>';
											}
										?>
								</select>
							</div>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Type de permis is required">
								<span class="label-input100">Localisation</span>
								<select name="localisation_ach" class="form-control" required="required" autocomplete="off"> 
										<?php 
											$local = "SELECT * FROM localisation";
											$listelocal = mysqli_query($db, $local);
											while($row = mysqli_fetch_array($listelocal)){
												echo '<option>'.$row['lieu'].'</option>';
											}
										?>
								</select>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit" name="ajouter">
										Ajouter
									</button>
								</div>
							</div>
							<div class="text-right p-t-8 p-b-31 position-relative">
								<a href="pub_achat.php">
									ANNULER
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="wrap" style="margin-top:50%;">
				<p>
					"Pour pouvoir publier et afficher vos publication de cherche veuiller remplir le formulaire selon vos demande et ce que vous rechercher"
				</p>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
