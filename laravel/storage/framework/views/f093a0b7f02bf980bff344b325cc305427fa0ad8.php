<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name')); ?></title>

    <!-- Styles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/components/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/userActivity.css')); ?>">
</head>
<body>
    <header>
        <div class="logo"><a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('assets/img/logo-2.png')); ?>"></a></div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>
    
    <footer>Copyright &copy; 2017 Transport. All right reserved.</footer>

    <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
