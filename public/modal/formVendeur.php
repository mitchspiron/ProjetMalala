
<div class="modal fade" id="vente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="color: white;">Retirer un client</h4>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sûre de vouloir retirer ce client ?</p>
				<h2 class="text-center"><?php echo $row['pseudo']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Annuler</button>
                <a href="supp_clients?rm=<?php echo $row['id_clients']; ?>" class="btn btn-primary">Oui</a>
            </div>
        </div>
    </div>
</div>