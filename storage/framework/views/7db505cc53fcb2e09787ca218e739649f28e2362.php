<ul class="list-inline">
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sistemas.ddocumentos.index')): ?>
            <a href="<?php echo e(route('sistemas.ddocumentos.show', $ddocumentos->id)); ?>" rel="tab"
            class="btn btn-sm btn-secondary" 
            style="margin-left: 5px"><span class="ti-book"></span></a>
        <?php endif; ?>
    </li>
    <li class="list-inline-item">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sistemas.ddocumentos.edit')): ?>
            <a href="<?php echo e(route('sistemas.ddocumentos.edit', $ddocumentos->id)); ?>" rel="tab"
            class="btn btn-sm text-white bgc-teal-400" style="margin-left: 5px"><span class="ti-pencil"></span></a>
        <?php endif; ?>
    </li>
    <li class="list-inline-item">
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sistemas.ddocumentos.destroy')): ?>
            <form class="delete" action="javascript:void(0)">
                <?php echo csrf_field(); ?>
                <button class="btn btn-sm text-white bgc-red-400" style="margin-left: 5px"
                data-remote="<?php echo e(route('sistemas.ddocumentos.destroy', $ddocumentos->id)); ?>">
                <i class="ti-trash"></i></button>
            </form>   
      <?php endif; ?>
    </li>
</ul>
         <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/sistemas/ddocumentos/partials/dtAction.blade.php ENDPATH**/ ?>