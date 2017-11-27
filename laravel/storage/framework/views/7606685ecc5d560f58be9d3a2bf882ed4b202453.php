<<link rel="stylesheet" href="<?php echo e(url('assets/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>">
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
               <label for="Shipper" class="col-sm-2 control-label">Shipper</label>
               <div class="col-sm-8" class="form-control">
                  <select name="shipperId" class="form-control" id="Shipper" placeholder="Shipper">
                     <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($shipper->customerId); ?>"><?php echo e($shipper->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Carrier" class="col-sm-2 control-label">Carrier</label>
               <div class="col-sm-8" class="form-control">
                  <select name="carrierId" class="form-control" id="Carrier" placeholder="Shipper">
                     <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($carrier->customerId); ?>"><?php echo e($carrier->name); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Driver" class="col-sm-2 control-label">Driver</label>
               <div class="col-sm-8" class="form-control">
                  <select name="driverId" class="form-control" id="Driver" placeholder="Driver">
                     <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($driver->driverId); ?>"><?php echo e($driver->driverName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Departure" class="col-sm-2 control-label">Departure</label>
               <div class="col-sm-8" class="form-control">
                  <select name="departureId" class="form-control" id="Departure" placeholder="Departure">
                     <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($zone->zoneId); ?>"><?php echo e($zone->zoneName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Arrival" class="col-sm-2 control-label">Arrival</label>
               <div class="col-sm-8" class="form-control">
                  <select name="arrivalId" class="form-control" id="Arrival" placeholder="Arrival">
                     <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($zone->zoneId); ?>"><?php echo e($zone->zoneName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="DepartureDate" class="col-sm-2 control-label">Departure Date</label>
               <div class="col-sm-8">
                  <input type="text" name="departureDate" class="form-control datetimepicker" id="DepartureDate" placeholder="DepartureDate" required="" />
               </div>
            </div>

            <div class="form-group">
               <label for="ArrivalDate" class="col-sm-2 control-label">Arrival Date</label>
               <div class="col-sm-8">
                  <input type="text" name="arrivalDate" class="form-control datetimepicker" id="ArrivalDate" placeholder="ArrivalDate" required="" />
               </div>
            </div>

            <div class="form-group">
               <label for="Fleet" class="col-sm-2 control-label">Fleet</label>
               <div class="col-sm-8" class="form-control">
                  <select name="fleetId" class="form-control" id="Fleet" placeholder="Fleet">
                     <?php $__currentLoopData = $fleets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fleet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($fleet->fleetId); ?>"><?php echo e($fleet->fleetName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Vehicle" class="col-sm-2 control-label">Vehicle</label>
               <div class="col-sm-8" class="form-control">
                  <select name="vehicleId" class="form-control" id="Vehicle" placeholder="Vehicle">
                     <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($vehicle->vehicleId); ?>"><?php echo e($vehicle->vehicleNo); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Price" class="col-sm-2 control-label">Price</label>
               <div class="col-sm-8">
                  <input type="text" name="price" class="form-control" id="Price" placeholder="Price" required="" />
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

<script src="<?php echo e(url('assets/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/loadingoverlay.min.js')); ?>"></script>
<script>
   $(document).ready(function()
   {
      saveManager.submit("form-add", "<?php echo e(route('shipmentStore')); ?>");
      $('.datetimepicker').datetimepicker();
   });
</script>