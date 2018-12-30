<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['website_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="_delete" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header alert-secondary" style="border-bottom: 1px solid #d6d8db;">
            <h5 class="modal-title" id="_delete"><b>Delete</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php $del=mysqli_query($conn,"select * from bookmark where website_id='".$row['website_id']."'"); $drow=mysqli_fetch_array($del); ?>
            <div class="container-fluid">
              <h5 class="text-center">Link: <b><?php echo $drow['website_name']; ?></b></h5>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <a href="delete.php?id=<?php echo $row['website_id']; ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
          </div>
        </div>
      </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['website_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="_edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header alert-secondary" style="border-bottom: 1px solid #d6d8db;">
            <h5 class="modal-title" id="_edit"><b>Edit</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php $edit=mysqli_query($conn,"select * from bookmark where website_id='".$row['website_id']."'"); $erow=mysqli_fetch_array($edit); ?>
            <div class="container-fluid">
              <form method="POST" action="edit.php?id=<?php echo $erow['website_id']; ?>">
                <div class="row">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-tag fa-fw fa-flip-horizontal text-primary"></i></span>
                    </div>
                    <input type="text" class="form-control" name="website_name" placeholder="Website name" value="<?php echo $erow['website_name']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-external-link-alt fa-fw text-primary"></i></span>
                    </div>
                    <input type="text" class="form-control" name="website_link" placeholder="Website address" value="<?php echo $erow['website_link']; ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-check"></span> Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- /.modal -->
