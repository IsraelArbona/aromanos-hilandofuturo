<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-pink-500 fa fa-server fa-lg"></i>
    </span>
    <span class="title">Facturación</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.facturas.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.facturas.index',0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-file-invoice fa-lg"></i>
            </span>
            <span class="title">Gestión Factura</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventas.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.inv_facturaventas.index',[date('Y-m-d'),date('Y-m-d')])); ?>" rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-donate fa-lg"></i>
            </span>
            <span class="title">Gestión Factura Venta</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventapos.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.inv_facturaventapos.index',[date('Y-m-d'),date('Y-m-d')])); ?>" rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-donate fa-lg"></i>
            </span>
            <span class="title">Gestión Factura POS</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturacompras.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.inv_facturacompras.index',[date('Y-m-d'),date('Y-m-d')])); ?>" rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-hand-holding-usd fa-lg"></i>
            </span>
            <span class="title">Gestión Factura Compra</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.pagos.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.pagos.index',0)); ?>"  rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-donate fa-lg"></i>
            </span>
            <span class="title">Gestión Pagos</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>

      <ul class="dropdown-menu">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.financiacions.index')): ?>
        <li class="nav-item dropdown">
          <a href="<?php echo e(route('facturacions.financiacions.index')); ?>" rel="tab">
            <span class="icon-holder">
                <i class="c-pink-500 fa fa-hands-helping fa-lg"></i>
            </span>
            <span class="title">Gestión Financiación</span>
          </a>
        </li>
        <?php endif; ?>
      </ul>
</li>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/partials/sub_menu_factura.blade.php ENDPATH**/ ?>