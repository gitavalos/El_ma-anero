<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'ElMañanero')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
            <a class="nav-link" href="<?php echo e(route('register')); ?>">New User</a>
        <?php endif; ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
                <!--<li><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>-->
                    <li><a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
                <?php else: ?>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>