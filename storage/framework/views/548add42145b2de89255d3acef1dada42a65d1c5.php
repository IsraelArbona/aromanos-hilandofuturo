<ul class="list-inline">
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturacompras.edit')): ?>
            <a href="<?php echo e(route('facturacions.inv_facturacompras.facturacompraPdfind', Crypt::encrypt($inv_facturacompras->id))); ?>" target="_blank"
            class="btn btn-sm btn-secondary" style="margin-left: 5px"><span class="ti-printer"></span></a>
        <?php endif; ?>
    </li>

    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturacompras.edit')): ?>
            <a href="<?php echo e(route('facturacions.inv_facturacompras.edit', $inv_facturacompras->id)); ?>" rel="tab"
            class="btn btn-sm text-white bgc-pink-400" style="margin-left: 5px"><span class="ti-pencil"></span></a>
        <?php endif; ?>
    </li>
    <li class="list-inline-item">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturacompras.destroy')): ?>
            <form class="delete" action="javascript:void(0)">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm text-white bgc-red-400" style="margin-left: 5px"
                data-remote="<?php echo e(route('facturacions.inv_facturacompras.destroy', $inv_facturacompras->id)); ?>">
                <i class="ti-trash"></i></button>
            </form>
      <?php endif; ?>
    </li>
</ul>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturacompras/partials/dtAction.blade.php ENDPATH**/ ?>