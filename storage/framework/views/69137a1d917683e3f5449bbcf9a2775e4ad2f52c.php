<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title><?php echo e(config('app.name', 'ElMananero')); ?></title>
</head>
<body>
<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
