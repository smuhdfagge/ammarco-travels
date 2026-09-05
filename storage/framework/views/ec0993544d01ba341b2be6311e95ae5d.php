<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Ammarco Travels'); ?> | Ammarco Travels</title>
    <meta name="description" content="Ammarco Travels — your trusted partner for flights, tours, visa assistance and travel packages.">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="<?php echo e(route('home')); ?>" class="brand">Ammarco <span>Travels</span></a>
            <nav class="main-nav">
                <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a>
                <a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a>
                <a href="<?php echo e(route('services')); ?>" class="<?php echo e(request()->routeIs('services') ? 'active' : ''); ?>">Services</a>
                <a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <div>
                <p class="brand">Ammarco <span>Travels</span></p>
                <p>Your journey, planned with care.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <a href="<?php echo e(route('about')); ?>">About</a>
                <a href="<?php echo e(route('services')); ?>">Services</a>
                <a href="<?php echo e(route('contact')); ?>">Contact</a>
            </div>
            <div>
                <h4>Get in touch</h4>
                <p>Kano, Nigeria</p>
                <p>info@ammarcotravels.com</p>
            </div>
        </div>
        <div class="container copyright">
            &copy; <?php echo e(date('Y')); ?> Ammarco Travels. All rights reserved.
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp1\htdocs\ammarco-travels\resources\views/layouts/app.blade.php ENDPATH**/ ?>