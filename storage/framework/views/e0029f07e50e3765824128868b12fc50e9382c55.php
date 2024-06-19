<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-green-500 fa fa-chart-pie fa-lg"></i>
    </span>
    <span class="title">Informes</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>

      <ul class="dropdown-menu">

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('infests.suiacus.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('infests.suiacus.index', 0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-green-500 fa fa-list-alt fa-lg"></i>
            </span>
            <span class="title">SUI Acueducto</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('infests.suialcs.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('infests.suialcs.index', 0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-green-500 fa fa-list-alt fa-lg"></i>
            </span>
            <span class="title">SUI Alcantarillado</span>
          </a>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('infests.suiases.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('infests.suiases.index',0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-green-500 fa fa-list-alt fa-lg"></i>
            </span>
            <span class="title">SUI Aseo</span>
          </a>
        </li>
        <?php endif; ?>

      </ul>

</li><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/partials/sub_menu_infest.blade.php ENDPATH**/ ?>