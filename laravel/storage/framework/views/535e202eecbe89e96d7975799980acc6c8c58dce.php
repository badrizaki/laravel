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
               <label for="vehicleNo" class="col-sm-2 control-label">Vehicle No</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control" name="vehicleNo" id="vehicleNo" placeholder="Vehicle No" required=""/>
               </div>
            </div>

            <div class="form-group">
               <label for="stnk" class="col-sm-2 control-label">STNK</label>
               <div class="col-sm-4">
                  <input class="form-control" name="stnk" id="stnk" placeholder="STNK" value="" type="date">
               </div>
               <label for="longitude" class="col-sm-2 control-label">Lang</label>
               <div class="col-sm-4">
                  <input class="form-control" name="longitude" id="longitude" placeholder="Lang" readonly="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="kir" class="col-sm-2 control-label">KIR</label>
               <div class="col-sm-4">
                  <input class="form-control" name="kir" id="kir" placeholder="KIR" value="" type="date">
               </div>
               <label for="latitude" class="col-sm-2 control-label">Latitude</label>
               <div class="col-sm-4">
                  <input class="form-control" id="latitude" placeholder="Latitude" readonly="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="siu" class="col-sm-2 control-label">SIU</label>
               <div class="col-sm-4">
                  <input class="form-control" name="siu" id="siu" placeholder="SIU" value="" type="date">
               </div>
               <label for="temperature" class="col-sm-2 control-label">Temperature</label>
               <div class="col-sm-4">
                  <input class="form-control" name="temperature" id="temperature" placeholder="Temperature" readonly="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="stnkName" class="col-sm-2 control-label">STNK Name</label>
               <div class="col-sm-4">
                  <input class="form-control" name="stnkName" id="stnkName" placeholder="STNK Name" type="text">
               </div>
               <label for="location" class="col-sm-2 control-label">Location</label>
               <div class="col-sm-4">
                  <input class="form-control" name="location" id="location" placeholder="Location" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="year" class="col-sm-2 control-label">Year</label>
               <div class="col-sm-4">
                  <input class="form-control" name="year" id="year" placeholder="Year" type="text">
               </div>
               <label for="brand" class="col-sm-2 control-label">Brand</label>
               <div class="col-sm-4">
                  <input class="form-control" name="brand" id="brand" placeholder="Brand" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="gprsId" class="col-sm-2 control-label">GPRS ID</label>
               <div class="col-sm-4">
                  <input class="form-control" name="gprsId" id="gprsId" placeholder="GPRS ID" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="engine" class="col-sm-2 control-label">Engine</label>
               <div class="col-sm-4">
                  <input class="form-control" name="engine" id="engine" placeholder="Engine" value="" readonly="" type="text">
               </div>
               <label for="compressor" class="col-sm-2 control-label">Compressor</label>
               <div class="col-sm-4">
                  <input class="form-control" name="compressor" id="compressor" placeholder="Compressor" value="" readonly="" type="text">
               </div>
            </div>
            <div class="form-group">
               <label for="driverId" class="col-sm-2 control-label">Driver</label>
               <div class="col-sm-4">
                  <select name="driverId" id="driverId" class="form-control">
                     <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($driver->driverId); ?>"><?php echo e($driver->driverName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
               <label for="categoryId" class="col-sm-2 control-label">Category</label>
               <div class="col-sm-4">
                  <select name="categoryId" id="categoryId" class="form-control">
                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($category->categoryId); ?>"><?php echo e($category->categoryName); ?></option>
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
      saveManager.submit("form-add", "<?php echo e(route('vehicleStore')); ?>");
   });
</script>