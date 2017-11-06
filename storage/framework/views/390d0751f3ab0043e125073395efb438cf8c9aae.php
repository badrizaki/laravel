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

         <input type="hidden" name="cityId" value="<?php echo e($city->cityId); ?>">
         <div class="modal-body">
            <div id="alert" class="notif"></div>

            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" name="cityName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e($city->cityName); ?>" />
               </div>
            </div>
            <div class="form-group">
               <label for="province" class="col-sm-2 control-label">Province</label>
               <div class="col-sm-4" class="form-control">
                  <select name="provinceId" class="form-control" id="province" placeholder="Province" required="required">
                     <option value="">Select Province</option>
                     <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($province->provinceId); ?>"><?php echo e($province->provinceName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
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
      $("#province").val('<?php echo e($city->provinceId); ?>').change();
      saveManager.submit("form-update", "<?php echo e(url('administration/cities/update')); ?>");
   });
</script>