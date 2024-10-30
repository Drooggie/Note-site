

<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <form action="" method='post' class='w-50 mx-auto'>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' id='title' placeholder='Here is your title' class='form-control'>
        </div>
        <div class="form-group form-group-description">
            <label for="description">Description</label>
            <textarea type='text' name='description' id='description' class='form-control' placeholder='Type Description' rows="6"></textarea>
        </div>
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" name='deadline' id='deadline' class='form-control'>
        </div>
        <input type="hidden" name='user_id' id='user_id' value='<?php echo $current_user_id?>'>
        <button name='createTodoBtn' class="btn btn-primary">Create To-do Card</button>

    </form>
</div>