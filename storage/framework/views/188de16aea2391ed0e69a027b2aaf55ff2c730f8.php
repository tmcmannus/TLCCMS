<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Training In Life Choices - MANAGEMENT</title>


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('inc.manage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="management-area" id="app"><!--Open App div -->



 <?php echo $__env->yieldContent('content'); ?>







</div><!--close App Div -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>



<?php echo $__env->yieldContent('script'); ?>


</body>
</html>
