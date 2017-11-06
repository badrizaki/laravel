<?php $__env->startSection('title', 'PT SOLUSI PRIMA PACKAGING :: Material'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Material <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-xs-12 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Material <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('material.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
							<div class="col-lg-12">

					            <div class="form-group">
					               	<label for="materialName" class="col-sm-2 control-label">Material</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="materialName" class="form-control" id="materialName" placeholder="Material" value="<?php echo e(old('materialName', isset($item) ? $item->materialName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="price" class="col-sm-2 control-label">Price</label>
					               	<div class="col-sm-6">
					                  	<input type="text" name="price" class="form-control" id="price" placeholder="Price" value="<?php echo e(old('price', isset($item) ? $item->price : '')); ?>" />
					               	</div>
					               	<div class="col-sm-4">
					                  	<input type="text" name="unitPrice" class="form-control" id="unitPrice" placeholder="Unit Price (USD/kg)" value="<?php echo e(old('unitPrice', isset($item) ? $item->unitPrice : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="unitPrice" class="col-sm-2 control-label">Unit Price</label>
					               	<div class="col-sm-6">
					                  	<input type="text" name="dosage" class="form-control" id="Dosage" placeholder="Dosage" value="<?php echo e(old('dosage', isset($item) ? $item->dosage : '')); ?>" />
					               	</div>
					               	<div class="col-sm-4">
					                  	<input type="text" name="unitDosage" class="form-control" id="unitDosage" placeholder="Unit Dosage (%)" value="<?php echo e(old('unitDosage', isset($item) ? $item->unitDosage : '')); ?>" />
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
							<a href="<?php echo e(route('material.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>