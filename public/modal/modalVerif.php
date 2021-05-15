<div class="modal fade" id="verif_<?php echo $row['id_clients'];?>"role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Bienvenu<?php echo $row['nom'];?>
                </h4>
            </div>
            <div class="modal-body">
                <p> Voulez-vous vendre le permis <?php $row['num']?></p>
            </div>
            <div class="modal-footer">
                <a href="vente" class="btn btn-primary"> Oui </a>
                <button type="button" class="btn btn-primary" data-dismiss="modal"> Annuler </button>
            </div>
        </div>
    </div>
</div>