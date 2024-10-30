<?php if(isset($_SESSION['message'])) :?>
  <div class="fixed-top mt-4">
      <div class="container">
          <div class="row">
              <div class="col-5">
                  <div class="alert alert-<?php echo $_SESSION['message']['type']?> alert-dismissible fade show" role="alert">
                      <?php echo $_SESSION['message']['msg']?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>   
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php unset($_SESSION['message']);
      endif;?>