<?php $__env->startSection('title', 'PT SOLUSI PRIMA PACKAGING :: Currency'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Currency <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-xs-12 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Currency <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('currency.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
					               	<label for="currencyCode" class="col-sm-2 control-label">Currency Code</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="currencyCode" class="form-control" id="currencyCode" placeholder="Currency Code" required="" value="<?php echo e(old('currencyCode', isset($item) ? $item->currencyCode : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="currencyName" class="col-sm-2 control-label">Currency Name</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="currencyName" class="form-control" id="currencyName" placeholder="Currency Name" required="" value="<?php echo e(old('currencyName', isset($item) ? $item->currencyName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="sell" class="col-sm-2 control-label">Sell</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="sell" class="form-control" id="sell" placeholder="Sell" required="" value="<?php echo e(old('sell', isset($item) ? $item->sell : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="Buy" class="col-sm-2 control-label">Buy</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="buy" class="form-control" id="Buy" placeholder="Buy" required="" value="<?php echo e(old('buy', isset($item) ? $item->buy : '')); ?>" />
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
							<a href="<?php echo e(route('currency.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
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