<style>
.modal{ z-index: 20; }
.modal-backdrop{ z-index: 10; }​
</style>
<div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title" id="myLargeModalLabel">Information</h4>
      </div>
      <form action="" class="form-horizontal" id="form-update" name="form-update" method="PUT" role="form" enctype="multipart/form-data">
         <?php echo e(csrf_field()); ?>

         <input type="hidden" name="fleetId" value="<?php echo e($fleet->fleetId); ?>">
         <div class="modal-body">
            <div id="alert" class="notif"></div>

            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" name="fleetName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e($fleet->fleetName); ?>" />
               </div>
            </div>

            <div class="form-group">
               <label for="Seq" class="col-sm-2 control-label">Seq</label>
               <div class="col-sm-10">
                  <input type="text" name="fleetSeq" class="form-control" id="Seq" placeholder="Seq" required="" value="<?php echo e($fleet->fleetSeq); ?>" />
               </div>
            </div>

            <div class="form-group">
               <label for="Color" class="col-sm-2 control-label">Color</label>
               <div class="col-sm-10">
                  <input type="text" name="fleetColor" class="form-control" id="Color" placeholder="Color" required="" value="<?php echo e($fleet->fleetColor); ?>" />
               </div>
            </div>

         </div>
         <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-info waves-effect text-left"> Save </button>
            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
         </div>
      </form>
   </div>
</div>
<script src="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/loadingoverlay.min.js')); ?>"></script>
<script>
   $(document).ready(function()
   {
      saveManager.submit("form-update", "<?php echo e(url('administration/fleet/update')); ?>");
   });
</script>