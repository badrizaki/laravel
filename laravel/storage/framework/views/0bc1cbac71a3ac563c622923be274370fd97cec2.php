<?php $__env->startSection('title', 'Transport :: city'); ?>
<?php $__env->startSection('city', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / City / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">City <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('city.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					                  	<input type="text" name="cityName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e(old('cityName', isset($item) ? $item->cityName : '')); ?>" />
					               	</div>
					            </div>
					            <div class="form-group">
					               	<label for="province" class="col-sm-2 control-label">Province</label>
					               	<div class="col-sm-4" class="form-control">
					                  	<select name="provinceId" class="form-control" id="province" placeholder="Province">
											<?php $__currentLoopData = $lookupTable['provinces']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($province->provinceId); ?>"><?php echo e($province->provinceName); ?></option>
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
							<a href="<?php echo e(route('city.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
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