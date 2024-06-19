<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
            <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                    <i class="search-icon ti-search pdd-right-10"></i>
                    <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
            </li>
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <?php if(file_exists( public_path().auth()->user()->avatar)): ?>
                            <img class="w-2r bdrs-50p" src="<?php echo e(auth()->user()->avatar); ?>" alt="">
                        <?php else: ?>
                            <img class="w-2r bdrs-50p" src="https://demo.aromanos.co/images/404.png" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-grey-900"><?php echo e(auth()->user()->name); ?></span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">

                    <li>
                        <a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off mR-10"></i>
                            <span>Salir</span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/partials/topbar.blade.php ENDPATH**/ ?>