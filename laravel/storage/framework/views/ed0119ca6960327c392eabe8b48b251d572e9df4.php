<?php $__env->startSection('title', 'Transport :: Zone'); ?>
<?php $__env->startSection('zone', 'active'); ?>

<?php $__env->startSection('css'); ?>
<style>
.modal{ z-index: 20; }
.modal-backdrop{ z-index: 10; }​
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Zone / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Zone <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('zone.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					               <label for="Name" class="col-sm-2 control-label">Name</label>
					               <div class="col-sm-10">
					                  <input type="text" name="zoneName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e(old('zoneName', isset($item) ? $item->zoneName : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="province" class="col-sm-2 control-label">Province</label>
					               <div class="col-sm-4" class="form-control">
					                  <select name="provinceId" class="form-control" id="province" placeholder="Province" onchange="select.load(this, '<?php echo e(route('cityByProvince')); ?>', 'container-city');" data-token="<?php echo e(csrf_token()); ?>" data-selectedid="<?php echo e(old('cityId', isset($item) ? $item->cityId : '')); ?>" required="required">
					                     <option value="">Select Province</option>
					                     <?php $__currentLoopData = $lookupTable['provinces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($province->provinceId); ?>"><?php echo e($province->provinceName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="city" class="col-sm-2 control-label">City</label>
					               <div class="col-sm-4" class="form-control" id="container-city">
					                  <select name="provinceId" class="form-control" id="city" placeholder="City" required="required">
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Address" class="col-sm-2 control-label">Address</label>
					               <div class="col-sm-10">
					                  <input type="text" name="address" class="form-control" id="Address" placeholder="Address" required="" value="<?php echo e(old('address', isset($item) ? $item->address : '')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="Longitude" class="col-sm-2 control-label">Longitude</label>
					               <div class="col-sm-4">
					                  <input type="number" name="longitude" class="form-control" id="Longitude" placeholder="Longitude" readonly="" required="" value="<?php echo e(old('longitude', isset($item) ? $item->longitude : '')); ?>" />
					               </div>
					               <label for="Latitude" class="col-sm-2 control-label">Latitude</label>
					               <div class="col-sm-4">
					                  <input type="number" name="latitude" class="form-control" id="Latitude" placeholder="Latitude" readonly="" required="" value="<?php echo e(old('latitude', isset($item) ? $item->latitude : '')); ?>" />
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
							<a href="<?php echo e(route('zone.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
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
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GMAP_KEY')); ?>&libraries=places&sensor=false"></script>
<script>
   $(document).ready(function()
   {
      $("#province").val("<?php echo e(old('provinceId', isset($item) ? $item->provinceId : '')); ?>").change();
      initAutocomplete();
   });

   var placeSearch, autocomplete;
   function initAutocomplete()
   {
      autocomplete = new google.maps.places.Autocomplete((document.getElementById('Address')), {
         types: ['geocode'],
         componentRestrictions: { country: "id" },
      });
      autocomplete.addListener('place_changed', fillInAddress);
   }
   function fillInAddress()
   {
      var place = autocomplete.getPlace();
      for (var i = 0; i < place.address_components.length; i++)
      {
         var addressType = place.address_components[i].types[0];

         document.getElementById('Latitude').value = place.geometry.location.lat();
         document.getElementById('Longitude').value = place.geometry.location.lng();
      }
   }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>