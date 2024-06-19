<?php if(Auth::user()->id <= 3): ?>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">

                <div class="form-row">
                    <?php if(isset($inv_facturaventa->id) > 0): ?>
                        <div class="col-md-2">
                            <?php echo Form::myInput('text', 'id', 'Id', ['class' => 'form-control','readonly']); ?>

                        </div>
                        <div class="col-md-2">
                            <?php echo Form::myInput('text','factura_cod', '* Factura Cod. ', ['class' => 'form-control','maxlength' => '20']); ?>

                        </div>
                        <div class="col-md-6">
                            <?php echo Form::mySelect('persona_id', '* (Doc.) Cliente', $personas, null, ['class' => 'form-control cbpersona', 'data-url' => route('home.sBuscarPersonas'),'data-width' =>'100%','required']); ?>

                        </div>

                        <div class="col-md-2">
                            <?php if(isset($inv_facturaventa->estadot) > 0): ?>
                                <?php if(($inv_facturaventa->estadot == 0) and (Auth::user()->id > 1)): ?>
                                    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%','disabled']); ?>

                                <?php else: ?>
                                    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                                <?php endif; ?>
                            <?php else: ?>
                                <?php echo Form::mySelect('estadot', 'Estado', config('variables.estado'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <div class="col-md-10 bbou-pink-400">
                            <?php echo Form::mySelect('persona_id', '* (Doc.) Cliente', $personas, null, ['class' => 'form-control cbpersona', 'data-url' => route('home.sBuscarPersonas'),'data-width' =>'100%','required']); ?>

                        </div>
                        <div class="col-md-2">
                            <?php if(isset($inv_facturaventa->estadot) > 0): ?>
                                <?php if(($inv_facturaventa->estadot == 0) and (Auth::user()->id > 1)): ?>
                                    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%','disabled']); ?>

                                <?php else: ?>
                                    <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                                <?php endif; ?>
                            <?php else: ?>
                                <?php echo Form::mySelect('estadot', 'Estado', config('variables.estado'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <?php echo Form::myInput('text','descripcion', '* Por Concepto de: ', ['class' => 'form-control','maxlength' => '500']); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">
                <div class="form-row">
                    <div class="col-md-10 bbou-pink-400">
                        <?php echo Form::mySelect('inv_producto_id', '* (Cod.) - Bodega -> Producto', $inv_productos, null, ['class' => 'form-control cbinvpro','data-url' => route('home.sBuscarInvproductos'),'required']); ?>

                    </div>
                    <div class="col-md-2">
                        <?php echo Form::myInput('number', 'existencia', '* Existencias', ['class' => 'form-control exis','maxlength' => '18','readonly'],0); ?>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-1">
                        <?php echo Form::myInput('number', 'lote', '* Lote', ['class' => 'form-control','readonly'],0); ?>

                    </div>
                    <div class="col-md-1">
                        <?php echo Form::myInput('number', 'estante', '* Estante', ['class' => 'form-control','readonly'],0); ?>

                    </div>
                    <div class="col-md-2 bbou-pink-400">
                        <?php echo Form::myRange('cantidad','* Cantidad',1, 500, 1, ['class' => 'form-control cant', 'onchange' => 'openproducto();']); ?>

                    </div>
                    <div class="col-md-2">
                        <?php echo Form::myInput('number', 'subiva', '* Iva', ['class' => 'form-control ivapr','maxlength' => '18','readonly'],0); ?>

                    </div>
                    <div class="col-md-3 bbou-pink-400">
                        <?php echo Form::myInput('number', 'base', '* Precio', ['class' => 'form-control basepr','maxlength' => '18', 'onchange' => 'openproducto();'],0); ?>

                    </div>

                    <div class="col-md-3">
                        <?php echo Form::label('totald', 'Total'); ?>

                        <div class="input-group">
                            <?php echo Form::input('number','totald',0,['class' => 'form-control','maxlength' => '18','readonly'],0); ?>

                            <div class="input-group-append">
                                <?php if(isset($inv_facturaventa->total) > 0): ?>
                                    <button type="submit" class="btn text-white bgc-pink-400 sf_editar_facturaVC" disabled
                                    data-remote="<?php echo e(route('facturacions.inv_facturaventas.update', $inv_facturaventa->id)); ?>">+</button>
                                <?php else: ?>
                                    <button type="submit" class="btn text-white bgc-pink-400 sf_guardar_facturaVC"
                                    data-remote="<?php echo e(route('facturacions.inv_facturaventas.store')); ?>">+</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">
                <div class="form-row">
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->subtotal) > 0): ?>
                            <?php echo Form::myInput('number', 'subtotal', '* SubTotal', ['class' => 'form-control stot text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'subtotal', '* SubTotal', ['class' => 'form-control stot text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->iva) > 0): ?>
                            <?php echo Form::myInput('number', 'iva', '* Val. Iva', ['class' => 'form-control viva text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'iva', '* Val. Iva', ['class' => 'form-control viva text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->descuento) > 0): ?>
                            <?php echo Form::myInput('number', 'descuento', '* Descuento', ['class' => 'form-control vdes', 'onkeyup' => 'openproducto();', 'maxlength' => '18']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'descuento', '* Descuento', ['class' => 'form-control vdes0', 'onkeyup' => 'openproducto();', 'maxlength' => '18'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->total) > 0): ?>
                            <?php echo Form::myInput('number', 'total', '* Total', ['class' => 'form-control ttot text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'total', '* Total', ['class' => 'form-control ttot text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">

                <div class="form-row">
                    <?php if(isset($inv_facturaventa->id) > 0): ?>
                        <div class="col-md-2">
                            <?php echo Form::myInput('text', 'id', 'Id', ['class' => 'form-control','readonly']); ?>

                        </div>
                        <div class="col-md-2">
                            <?php echo Form::myInput('text','factura_cod', '* Factura Cod. ', ['class' => 'form-control','maxlength' => '20']); ?>

                        </div>
                        <div class="col-md-8">
                            <?php echo Form::mySelect('persona_id', '* (Doc.) Cliente', $personas, null, ['class' => 'form-control cbpersona', 'data-url' => route('home.sBuscarPersonas'),'data-width' =>'100%','required']); ?>

                        </div>
                    <?php else: ?>
                        <div class="col-md-12 bbou-pink-400">
                            <?php echo Form::mySelect('persona_id', '* (Doc.) Cliente', $personas, null, ['class' => 'form-control cbpersona', 'data-url' => route('home.sBuscarPersonas'),'data-width' =>'100%','required']); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <?php echo Form::myInput('text','descripcion', '* Por Concepto de: ', ['class' => 'form-control','maxlength' => '500']); ?>

                    </div>
                </div>
                <?php echo Form::hidden('estadot', 1); ?>

            </div>
        </div>
    </div>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">
                <div class="form-row">
                    <div class="col-md-10 bbou-pink-400">
                        <?php echo Form::mySelect('inv_producto_id', '* (Cod.) - Bodega -> Producto', $inv_productos, null, ['class' => 'form-control cbinvpro','data-url' => route('home.sBuscarInvproductos'),'required']); ?>

                    </div>
                    <div class="col-md-2">
                        <?php echo Form::myInput('number', 'existencia', '* Existencias', ['class' => 'form-control exis','maxlength' => '18','readonly'],0); ?>

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 bbou-pink-400">
                        <?php echo Form::myRange('cantidad','* Cantidad',1, 500, 1, ['class' => 'form-control cant', 'onchange' => 'openproducto();']); ?>

                    </div>
                    <div class="col-md-3">
                        <?php echo Form::myInput('number', 'subiva', '* Iva', ['class' => 'form-control ivapr','maxlength' => '18','readonly'],0); ?>

                    </div>
                    <div class="col-md-3 bbou-pink-400">
                        <?php echo Form::myInput('number', 'base', '* Precio', ['class' => 'form-control basepr','maxlength' => '18', 'onchange' => 'openproducto();'],0); ?>

                    </div>

                    <div class="col-md-3">
                        <?php echo Form::label('totald', 'Total'); ?>

                        <div class="input-group">
                            <?php echo Form::input('number','totald',0,['class' => 'form-control','maxlength' => '18','readonly'],0); ?>

                            <div class="input-group-append">
                                <?php if(isset($inv_facturaventa->total) > 0): ?>
                                    <button type="submit" class="btn text-white bgc-pink-400 sf_editar_facturaVC" disabled
                                    data-remote="<?php echo e(route('facturacions.inv_facturaventas.update', $inv_facturaventa->id)); ?>">+</button>
                                <?php else: ?>
                                    <button type="submit" class="btn text-white bgc-pink-400 sf_guardar_facturaVC"
                                    data-remote="<?php echo e(route('facturacions.inv_facturaventas.store')); ?>">+</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mB-4">
        <div class="col-sm-12">
            <div class="bgc-white p-4 bd">
                <div class="form-row">
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->subtotal) > 0): ?>
                            <?php echo Form::myInput('number', 'subtotal', '* SubTotal', ['class' => 'form-control stot text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'subtotal', '* SubTotal', ['class' => 'form-control stot text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->iva) > 0): ?>
                            <?php echo Form::myInput('number', 'iva', '* Val. Iva', ['class' => 'form-control viva text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'iva', '* Val. Iva', ['class' => 'form-control viva text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->descuento) > 0): ?>
                            <?php echo Form::myInput('number', 'descuento', '* Descuento', ['class' => 'form-control vdes', 'onkeyup' => 'openproducto();', 'maxlength' => '18']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'descuento', '* Descuento', ['class' => 'form-control vdes0', 'onkeyup' => 'openproducto();', 'maxlength' => '18'],0); ?>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                        <?php if(isset($inv_facturaventa->total) > 0): ?>
                            <?php echo Form::myInput('number', 'total', '* Total', ['class' => 'form-control ttot text-white bgc-green-400','maxlength' => '18','readonly']); ?>

                        <?php else: ?>
                            <?php echo Form::myInput('number', 'total', '* Total', ['class' => 'form-control ttot text-white bgc-green-400','maxlength' => '18','readonly'],0); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>


<?php echo Form::hidden('user_id', Auth::user()->id); ?>

<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>








<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/facturacions/inv_facturaventas/partials/forme.blade.php ENDPATH**/ ?>