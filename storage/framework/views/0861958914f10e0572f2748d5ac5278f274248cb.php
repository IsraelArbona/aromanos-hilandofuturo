<li class="nav-item dropdown">
      <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
          <i class="c-orange-500 fa fa-briefcase fa-lg"></i>
        </span>
        <span class="title">Inventarios</span>
        <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
      </a>

      <ul class="dropdown-menu">

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_categorias.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('inventarios.inv_categorias.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-orange-500 fa fa-sitemap fa-lg"></i>
            </span>
            <span class="title">Gestión Categoriás</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_subcategorias.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('inventarios.inv_subcategorias.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-orange-500 fa fa-project-diagram fa-lg"></i>
            </span>
            <span class="title">Gestión Sub-Categoriás</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_unidades.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('inventarios.inv_unidades.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-orange-500 fa fa-ruler-combined fa-lg"></i>
            </span>
            <span class="title">Gestión Unidades</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_bodegas.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('inventarios.inv_bodegas.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-orange-500 fa fa-store fa-lg"></i>
            </span>
            <span class="title">Gestión Bodegas</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('inventarios.inv_productos.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('inventarios.inv_productos.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-orange-500 fa fa-luggage-cart fa-lg"></i>
            </span>
            <span class="title">Gestión Productos</span>
          </a>
        </li>
        <?php endif; ?>


      </ul>
    </li>
<?php /**PATH C:\xampp\htdocs\aromanos\resources\views/partials/sub_menu_inventarios.blade.php ENDPATH**/ ?>