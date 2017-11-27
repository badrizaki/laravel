<?php $__env->startSection('title', 'Transport :: Shipment'); ?>
<?php $__env->startSection('shipment', 'active'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(url('assets/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-joborder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Shipment / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Shipment <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('shipment.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
					<div class="panel-body">
						<?php if($errors->any()): ?>
						<div class="alert alert-danger">
						    <ul>
						        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						            <li><?php echo e($error); ?></li>
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    </ul>
						</div>
						<?php endif; ?>
					    <?php echo e(csrf_field()); ?>

					    <?php if($id != 0): ?>
					    <input name="_method" type="hidden" value="PUT">
						<?php endif; ?>
						<div class="row">
							<div class="col-lg-8">

					            <div class="form-group">
					               <label for="Shipper" class="col-sm-2 control-label">Shipper</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="shipperId" class="form-control" id="Shipper" placeholder="Shipper">
					                     <?php $__currentLoopData = $lookupTable['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($shipper->customerId); ?>"><?php echo e($shipper->name); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Carrier" class="col-sm-2 control-label">Carrier</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="carrierId" class="form-control" id="Carrier" placeholder="Shipper">
					                     <?php $__currentLoopData = $lookupTable['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carrier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($carrier->customerId); ?>"><?php echo e($carrier->name); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Driver" class="col-sm-2 control-label">Driver</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="driverId" class="form-control" id="Driver" placeholder="Driver">
					                     <?php $__currentLoopData = $lookupTable['drivers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($driver->driverId); ?>"><?php echo e($driver->driverName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Departure" class="col-sm-2 control-label">Departure</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="departureId" class="form-control" id="Departure" placeholder="Departure">
					                     <?php $__currentLoopData = $lookupTable['zones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($zone->zoneId); ?>"><?php echo e($zone->zoneName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Arrival" class="col-sm-2 control-label">Arrival</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="arrivalId" class="form-control" id="Arrival" placeholder="Arrival">
					                     <?php $__currentLoopData = $lookupTable['zones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($zone->zoneId); ?>"><?php echo e($zone->zoneName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="DepartureDate" class="col-sm-2 control-label">Departure Date</label>
					               <div class="col-sm-8">
					                  <input type="text" name="departureDate" class="form-control datetimepicker" id="DepartureDate" placeholder="DepartureDate" required="" value="<?php echo e(old('departureDate', isset($item) ? $item->departureDate : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="ArrivalDate" class="col-sm-2 control-label">Arrival Date</label>
					               <div class="col-sm-8">
					                  <input type="text" name="arrivalDate" class="form-control datetimepicker" id="ArrivalDate" placeholder="ArrivalDate" required="" value="<?php echo e(old('arrivalDate', isset($item) ? $item->arrivalDate : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Fleet" class="col-sm-2 control-label">Fleet</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="fleetId" class="form-control" id="Fleet" placeholder="Fleet">
					                     <?php $__currentLoopData = $lookupTable['fleets']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fleet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($fleet->fleetId); ?>"><?php echo e($fleet->fleetName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Vehicle" class="col-sm-2 control-label">Vehicle</label>
					               <div class="col-sm-8" class="form-control">
					                  <select name="shipmentId" class="form-control" id="Vehicle" placeholder="Vehicle">
					                     <?php $__currentLoopData = $lookupTable['vehicles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($vehicle->vehicleId); ?>"><?php echo e($vehicle->vehicleNo); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Price" class="col-sm-2 control-label">Price</label>
					               <div class="col-sm-8">
					                  <input type="text" name="price" class="form-control" id="Price" placeholder="Price" required="" value="<?php echo e(old('price', isset($item) ? $item->price : '')); ?>" />
					               </div>
					            </div>

					      	</div>
					    </div>
					</div>
					<div class="panel-footer">
						<div class="col-lg-2">
							<button class="btn btn-md btn-block btn-primary" type="submit">Save</button>
						</div>
						<div class="col-lg-2">
							<a href="<?php echo e(route('shipment.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
<script>
	$(document).ready(function()
	{
		$('.datetimepicker').datetimepicker();
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>