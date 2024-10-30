<!-- Modal  -->

<?php
if (isset($_POST['confirmDeleteBtn'])) {
    deleteMultipleTodo($_POST['delete_ids']);
}
?>

<div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method='post'>
                    <input type="hidden" name='todo_id' id="outputTodoID">
                    <select name="status" id="status" class="form-control">
                        <option value="ongoing" selected>Ongoing</option>
                        <option value="abandoned">Abandoned</option>
                        <option value="done">Done</option>
                    </select>
                    <div class="modal-footer">
                        <button class="btn btn-primary" name="changeStatusBtn">Change status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal-delete-buffer" class="hidden">
    <div class="modal-container">
        <div class="modal-delete-buffer-header">
            <h5>Delete Buffer</h5>
            <button class="btn modal-delete-buffer-close-btn">Close</button>
        </div>
        <div id='modal-delete-buffer-body'></div>
        <div class="modal-delete-buffer-footer">

            <a id="modal-delete-confirm-show" class="btn btn-danger float-right">
                Delete
            </a>

        </div>
    </div>
</div>

<div id="modal-delete-confirm" class="hidden">
    <div class="modal-delete-confirm-container">
        <div class="modal-delete-confirm-header">
            <h5>Are you sure?</h5>
            <button class="btn modal-delete-buffer-close-btn" id="modal-delete-confirm-close">Close</button>
        </div>
        <div class="modal-delete-confirm-body">
            <form action="" method="post">
                <input type="hidden" name="delete_ids" id="delete_ids" value="">
                <button class="btn-danger" name="confirmDeleteBtn">Confirm</button>
            </form>
        </div>
    </div>
</div>

<div class="overlay hidden"></div>