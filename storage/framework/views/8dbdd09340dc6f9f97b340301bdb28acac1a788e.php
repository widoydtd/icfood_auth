<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>IC Food - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins');
        *{
            font-family: 'Poppins', sans-serif;
        }
        .ic{
            color: #E4283E;
        }
        .food{
            color: #EF7B3A;
        }
        #fgtpass{
            float: right;
            padding-right: 0;
            padding-top: 0;
            text-decoration: none;
        }
        #sub{
            background-color: black;
        }
        #email{
            border-width: 2px;
            border-color: black;
        }
        #password{
            border-width: 2px;
            border-color: black;
        }
        #firstname{
            border-width: 2px;
            border-color: black;
        }
        #lastname{
            border-width: 2px;
            border-color: black;
        }
        #password-confirm{
            border-width: 2px;
            border-color: black;
        }
        .regs{
            color: #FF843F;
        }
    </style>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->yieldContent('navbar'); ?>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ICFood\resources\views/layouts/app.blade.php ENDPATH**/ ?>