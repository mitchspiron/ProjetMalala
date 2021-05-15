<?php $db= mysqli_connect('localhost','root','','publicad');?>
<!--====================================== MODAL INTERESSE ACHAT ========================================-->
<div class="modal fade"  id="interesse2_<?php echo $row['id_ach'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Le permis de <?php echo $row['pseudo_ach']?> vous intéresse? Veuillez entrer vos contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="wrap p-l-55 p-r-55">
				<form class="login100-form validate-form" action="ajout_pub" method="post">
          <div class="wrap-input100 validate-input m-b-23" data-validate = "E-mail is required">
            <span class="label-input100">Numéros téléphone</span>
            <input class="input100" type="text" placeholder="Entrez votre numéro" class="form-control" name="contact_tel" id="contact_tel" value="">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-23" data-validate = "E-mail is required">
            <span class="label-input100">E-mail</span>
            <input class="input100" type="text" placeholder="Entrez votre adresse mail" class="form-control" name="contact_mail" id="contact_mail" value="">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Envoyer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>