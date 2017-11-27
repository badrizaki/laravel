<?php $__env->startSection('title', 'Transport :: Customer'); ?>
<?php $__env->startSection('customer', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Customer / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Customer <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('customer.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					               <label for="Company" class="col-sm-2 control-label">Company</label>
					               <div class="col-sm-10">
					                  <input type="text" name="name" class="form-control" id="Company" placeholder="Company" required="" value="<?php echo e(old('name', isset($item) ? $item->name : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label class="col-sm-2 control-label"></label>
					               <div class="col-sm-10" style="text-align: left;">
					                  <div class="checkbox">
					                      <label><input type="checkbox" name="isShipper" value="1" <?php echo e(old('isShipper', (isset($item) && ($item->isShipper)) ? 'checked' : '')); ?>>Shipper</label>
					                      &nbsp;&nbsp;&nbsp;
					                      <label><input type="checkbox" name="isCarrier" value="1" <?php echo e(old('isCarrier', (isset($item) && ($item->isCarrier)) ? 'checked' : '')); ?>>Carrier</label>
					                  </div>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Country" class="col-sm-2 control-label">Country</label>
					               <div class="col-sm-10">
					                  <input type="text" name="country" class="form-control" id="Country" placeholder="Country" value="<?php echo e(old('country', isset($item) ? $item->country : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Address" class="col-sm-2 control-label">Address</label>
					               <div class="col-sm-10">
					                  <textarea name="address" id="address" class="form-control" placeholder="Address"><?php echo e(old('address', isset($item) ? $item->address : '')); ?></textarea>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="city" class="col-sm-2 control-label">City</label>
					               <div class="col-sm-10">
					                  <input type="text" name="city" class="form-control" id="city" placeholder="City" value="<?php echo e(old('city', isset($item) ? $item->city : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="postalCode" class="col-sm-2 control-label">Postal Code</label>
					               <div class="col-sm-10">
					                  <input type="text" name="postalCode" class="form-control" id="postalCode" placeholder="Postal Code" value="<?php echo e(old('postalCode', isset($item) ? $item->postalCode : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="phone1" class="col-sm-2 control-label">Phone Number</label>
					               <div class="col-sm-10">
					                  <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Phone Number" value="<?php echo e(old('phone1', isset($item) ? $item->phone1 : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Fax" class="col-sm-2 control-label">Fax</label>
					               <div class="col-sm-10">
					                  <input type="text" name="fax" class="form-control" id="Fax" placeholder="Fax" value="<?php echo e(old('fax', isset($item) ? $item->fax : '')); ?>" />
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
							<a href="<?php echo e(route('customer.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
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