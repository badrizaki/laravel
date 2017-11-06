<?php $__env->startSection('title', 'Transport :: Driver'); ?>
<?php $__env->startSection('driver', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Driver / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Driver <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('driver.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					                  <input type="text" name="driverName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e(old('driverName', isset($item) ? $item->driverName : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="mobile1" class="col-sm-2 control-label">Mobile 1</label>
					               <div class="col-sm-10">
					                  <input type="text" name="mobile1" class="form-control" id="mobile1" placeholder="Mobile 1" value="<?php echo e(old('mobile1', isset($item) ? $item->mobile1 : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="mobile2" class="col-sm-2 control-label">Mobile 2</label>
					               <div class="col-sm-10">
					                  <input type="text" name="mobile2" class="form-control" id="mobile2" placeholder="Mobile 2" value="<?php echo e(old('mobile2', isset($item) ? $item->mobile2 : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="mobile3" class="col-sm-2 control-label">Mobile 3</label>
					               <div class="col-sm-10">
					                  <input type="text" name="mobile3" class="form-control" id="mobile3" placeholder="Mobile 3" value="<?php echo e(old('mobile3', isset($item) ? $item->mobile3 : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="accountNo" class="col-sm-2 control-label">Account No</label>
					               <div class="col-sm-10">
					                  <input type="text" name="accountNo" class="form-control" id="accountNo" placeholder="Account No" value="<?php echo e(old('accountNo', isset($item) ? $item->accountNo : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="accountName" class="col-sm-2 control-label">Account Name</label>
					               <div class="col-sm-10">
					                  <input type="text" name="accountName" class="form-control" id="accountName" placeholder="Account Name" value="<?php echo e(old('accountName', isset($item) ? $item->accountName : '')); ?>"/>
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
							<a href="<?php echo e(route('driver.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
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