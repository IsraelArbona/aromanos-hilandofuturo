<ul class="list-inline">
    <li class="list-inline-item">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.inv_facturaventas.destroy')): ?>
            <form class="deletedetfacturavc" action="javascript:void(0)">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm text-white bgc-red-400" style="margin-left: 5px"
                data-remote="<?php echo e(route('facturacions.inv_facturaventas.destroydet', $inv_facturaventa_dets->id)); ?>">
                <i class="ti-minus"></i></button>
            </form>
      <?php endif; ?>
    </li>
</ul>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturaventas/partials/dtActiondet.blade.php ENDPATH**/ ?>