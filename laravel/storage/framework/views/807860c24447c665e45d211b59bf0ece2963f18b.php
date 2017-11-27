<select name="cityId" class="form-control" id="city" placeholder="City">
	<?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($city->cityId == $cityId): ?>
	<option value="<?php echo e($city->cityId); ?>" selected=""><?php echo e($city->cityName); ?></option>
	<?php else: ?>
	<option value="<?php echo e($city->cityId); ?>"><?php echo e($city->cityName); ?></option>
	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>