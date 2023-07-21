<div id="editModal" class="modal fade bd-example-modal-lg">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Word & Sentence</h5>
            </div>
            <?php 
                $formId = "editForm";
                include "components/pages/index/add.php"; 
            ?>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancelModalButton" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>