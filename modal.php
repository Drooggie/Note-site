<!-- Modal  -->

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

<div class="modal modal-custom fade" id="deleteBuffer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Buffer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="outputDeleteBuffer">
            </div>
        </div>
    </div>
</div>