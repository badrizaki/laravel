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
      <form action="" class="form-horizontal" id="form-add" name="form-add" method="PUT" role="form" enctype="multipart/form-data">
         <?php echo e(csrf_field()); ?>

         <div class="modal-body">
            <div id="alert" class="notif"></div>

            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" name="driverName" class="form-control" id="Name" placeholder="Name" required="" />
               </div>
            </div>

            <div class="form-group">
               <label for="mobile1" class="col-sm-2 control-label">Mobile 1</label>
               <div class="col-sm-10">
                  <input type="text" name="mobile1" class="form-control" id="mobile1" placeholder="Mobile 1" />
               </div>
            </div>

            <div class="form-group">
               <label for="mobile2" class="col-sm-2 control-label">Mobile 2</label>
               <div class="col-sm-10">
                  <input type="text" name="mobile2" class="form-control" id="mobile2" placeholder="Mobile 2" />
               </div>
            </div>

            <div class="form-group">
               <label for="mobile3" class="col-sm-2 control-label">Mobile 3</label>
               <div class="col-sm-10">
                  <input type="text" name="mobile3" class="form-control" id="mobile3" placeholder="Mobile 3" />
               </div>
            </div>

            <div class="form-group">
               <label for="accountNo" class="col-sm-2 control-label">Account No</label>
               <div class="col-sm-10">
                  <input type="text" name="accountNo" class="form-control" id="accountNo" placeholder="Account No" />
               </div>
            </div>

            <div class="form-group">
               <label for="accountName" class="col-sm-2 control-label">Account Name</label>
               <div class="col-sm-10">
                  <input type="text" name="accountName" class="form-control" id="accountName" placeholder="Account Name"/>
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
      saveManager.submit("form-add", "<?php echo e(route('driverStore')); ?>");
   });
</script>