<?php $__env->startSection('title', 'Transport :: Vehicle'); ?>
<?php $__env->startSection('vehicle', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Vehicle / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Vehicle <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('vehicle.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					               <label for="vehicleNo" class="col-sm-2 control-label">Vehicle No</label>
					               <div class="col-sm-4">
					                  <input type="text" class="form-control" name="vehicleNo" id="vehicleNo" placeholder="Vehicle No" required="" value="<?php echo e(old('vehicleNo', isset($item) ? $item->vehicleNo : '')); ?>"/>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="stnk" class="col-sm-2 control-label">STNK</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="stnk" id="stnk" placeholder="STNK" type="date" value="<?php echo e(old('stnk', isset($item) ? $item->stnk : '')); ?>">
					               </div>
					               <label for="longitude" class="col-sm-2 control-label">Lang</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="longitude" id="longitude" placeholder="Lang" readonly="" type="text" value="<?php echo e(old('longitude', isset($item) ? $item->longitude : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="kir" class="col-sm-2 control-label">KIR</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="kir" id="kir" placeholder="KIR" type="date" value="<?php echo e(old('kir', isset($item) ? $item->kir : '')); ?>">
					               </div>
					               <label for="latitude" class="col-sm-2 control-label">Latitude</label>
					               <div class="col-sm-4">
					                  <input class="form-control" id="latitude" placeholder="Latitude" readonly="" type="text" value="<?php echo e(old('latitude', isset($item) ? $item->latitude : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="siu" class="col-sm-2 control-label">SIU</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="siu" id="siu" placeholder="SIU" type="date" value="<?php echo e(old('siu', isset($item) ? $item->siu : '')); ?>">
					               </div>
					               <label for="temperature" class="col-sm-2 control-label">Temperature</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="temperature" id="temperature" placeholder="Temperature" readonly="" type="text" value="<?php echo e(old('temperature', isset($item) ? $item->temperature : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="stnkName" class="col-sm-2 control-label">STNK Name</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="stnkName" id="stnkName" placeholder="STNK Name" type="text" value="<?php echo e(old('stnkName', isset($item) ? $item->stnkName : '')); ?>">
					               </div>
					               <label for="location" class="col-sm-2 control-label">Location</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="location" id="location" placeholder="Location" type="text" value="<?php echo e(old('location', isset($item) ? $item->location : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="year" class="col-sm-2 control-label">Year</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="year" id="year" placeholder="Year" type="text" value="<?php echo e(old('year', isset($item) ? $item->year : '')); ?>">
					               </div>
					               <label for="brand" class="col-sm-2 control-label">Brand</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="brand" id="brand" placeholder="Brand" type="text" value="<?php echo e(old('brand', isset($item) ? $item->brand : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="gprsId" class="col-sm-2 control-label">GPRS ID</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="gprsId" id="gprsId" placeholder="GPRS ID" type="text" value="<?php echo e(old('gprsId', isset($item) ? $item->gprsId : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="engine" class="col-sm-2 control-label">Engine</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="engine" id="engine" placeholder="Engine" value="" readonly="" type="text" value="<?php echo e(old('engine', isset($item) ? $item->engine : '')); ?>">
					               </div>
					               <label for="compressor" class="col-sm-2 control-label">Compressor</label>
					               <div class="col-sm-4">
					                  <input class="form-control" name="compressor" id="compressor" placeholder="Compressor" value="" readonly="" type="text" value="<?php echo e(old('compressor', isset($item) ? $item->compressor : '')); ?>">
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="driverId" class="col-sm-2 control-label">Driver</label>
					               <div class="col-sm-4">
					                  <select name="driverId" id="driverId" class="form-control">
					                     <?php $__currentLoopData = $lookupTable['drivers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($driver->driverId); ?>"><?php echo e($driver->driverName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					               <label for="categoryId" class="col-sm-2 control-label">Category</label>
					               <div class="col-sm-4">
					                  <select name="categoryId" id="categoryId" class="form-control">
					                     <?php $__currentLoopData = $lookupTable['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($category->categoryId); ?>"><?php echo e($category->categoryName); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
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
							<a href="<?php echo e(route('vehicle.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>