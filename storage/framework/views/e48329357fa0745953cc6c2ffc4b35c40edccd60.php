<ul class="list-inline">
    <!--
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.facturas.index')): ?>
            <a href="<?php echo e(route('facturacions.facturas.show', $facturas->id)); ?>" rel="tab"
            class="btn btn-sm btn-secondary" 
            style="margin-left: 5px"><span class="ti-book"></span></a>
        <?php endif; ?>
    </li>
    -->
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.facturas.edit')): ?>
            <a href="<?php echo e(route('facturacions.facturas.facturasPdfind',  ['p_id' => $facturas->periodo_id,'id' => $facturas->id])); ?>" target="_blank"
            class="btn btn-sm btn-secondary" style="margin-left: 5px"><span class="ti-printer"></span></a>
        <?php endif; ?>
    </li>
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.facturas.edit')): ?>
            <a href="<?php echo e(route('facturacions.facturas.edit', $facturas->id)); ?>" rel="tab"
            class="btn btn-sm text-white bgc-pink-400" style="margin-left: 5px"><span class="ti-pencil"></span></a>
        <?php endif; ?>
    </li>
    <li class="list-inline-item">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('facturacions.facturas.destroy')): ?>
            <form class="delete" action="javascript:void(0)">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm text-white bgc-red-400" style="margin-left: 5px"
                data-remote="<?php echo e(route('facturacions.facturas.destroy', $facturas->id)); ?>">
                <i class="ti-trash"></i></button>
            </form>   
      <?php endif; ?>
    </li>
    
</ul>
         

         <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/facturas/partials/dtAction.blade.php ENDPATH**/ ?>