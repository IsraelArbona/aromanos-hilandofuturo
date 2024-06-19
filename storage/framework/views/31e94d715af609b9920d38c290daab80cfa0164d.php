<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-purple-500 fa fa-cogs fa-lg"></i>
    </span>
    <span class="title">Procesos</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>

      <ul class="dropdown-menu">


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.periodos.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('procesos.periodos.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-calendar-alt fa-lg"></i>
            </span>
            <span class="title">Gestión Periodos</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.tarifas.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('procesos.tarifas.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-stream fa-lg"></i>
            </span>
            <span class="title">Gestión Tarifas</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.tarifadets.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('procesos.tarifadets.index',0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-tasks fa-lg"></i>
            </span>
            <span class="title">Gestión Tarifas Det.</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.predios.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('procesos.predios.index')); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-house-damage fa-lg"></i>
            </span>
            <span class="title">Gestión Predios</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('procesos.lecturas.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('procesos.lecturas.index', 0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-route fa-lg"></i>
            </span>
            <span class="title">Gestión Lecturas</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
</li><?php /**PATH C:\xampp\htdocs\aromanos\resources\views/partials/sub_menu_proceso.blade.php ENDPATH**/ ?>