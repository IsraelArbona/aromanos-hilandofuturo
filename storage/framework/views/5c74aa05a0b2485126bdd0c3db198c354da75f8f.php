<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">

            <div class="form-row">
				<div class="col-md-2">
                    <?php echo Form::myInput('text', 'producto_cod', '* Cod. Producto', ['class' => 'form-control','maxlength' => '30']); ?>

				</div>

				<div class="col-md-8">
                    <?php echo Form::myInput('text', 'nombre', '* Nombre', ['class' => 'form-control','maxlength' => '80']); ?>

				</div>

                <div class="col-md-2">
                    <?php if(isset($inv_producto->estadot) > 0): ?>
                        <?php if(($inv_producto->estadot == 0) and (Auth::user()->id > 1)): ?>
                            <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%','disabled']); ?>

                        <?php else: ?>
                            <?php echo Form::mySelect('estadot', 'Estado', config('variables.estadot'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo Form::mySelect('estadot', 'Estado', config('variables.estado'), null, ['class' => 'form-control','data-width' =>'100%']); ?>

                    <?php endif; ?>
				</div>

			</div>

            <div class="form-row">
				<div class="col-md-12">
                    <?php echo Form::myInput('text', 'descripcion', '* Descripción', ['class' => 'form-control','maxlength' => '100']); ?>

				</div>
			</div>

            <div class="form-row">
				<div class="col-md-12">
                    <?php echo Form::myInput('text', 'codbarra', '* Cod. Barras', ['class' => 'form-control','maxlength' => '100']); ?>

				</div>
			</div>

		</div>
	</div>
</div>


<div class="row mB-10">
	<div class="col-sm-12">
		<div class="bgc-white p-10 bd">
			<div class="row mB-10">

				<div class="col-sm-12 col-md-8 col-lg-8">


					<div class="bgc-white p-10 bd">

                        <div class="form-row">
                            <div class="col-md-12">
                                <?php echo Form::mySelect('proveedor_id', '* (Documento) Proveedor', $personas, null, ['class' => 'form-control cbproveedor', 'data-url' => route('home.sBuscarPersonasProveedor'),'data-width' =>'100%','required']); ?>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <?php echo Form::mySelect('subcategoria_id', '* Sub-Categoria', $inv_subcategorias, null, ['class' => 'form-control','data-width' =>'100%','required']); ?>

                            </div>
                            <div class="col-md-6">
                                <?php echo Form::mySelect('marca_id', '* Marca.', $marcas, null, ['class' => 'form-control','data-width' =>'100%','required']); ?>

                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <?php echo Form::mySelect('bodega_id', '* Bodega', $inv_bodegas, null, ['class' => 'form-control','data-width' =>'100%','required']); ?>

                            </div>

                            <div class="col-md-3">
                                <?php if(isset($inv_producto->lote) > 0): ?>
                                    <?php echo Form::myRange('lote','* Lote',1, 999, $inv_producto->lote, ['class' => 'form-control']); ?>

                                <?php else: ?>
                                    <?php echo Form::myRange('lote','* Lotes',1, 999, 1, ['class' => 'form-control']); ?>

                                <?php endif; ?>
                            </div>
                            <div class="col-md-3">
                                <?php if(isset($inv_producto->estante) > 0): ?>
                                    <?php echo Form::myRange('estante','* Estante',1, 999, $inv_producto->estante, ['class' => 'form-control']); ?>

                                <?php else: ?>
                                    <?php echo Form::myRange('estante','* Estante',1, 999, 1, ['class' => 'form-control']); ?>

                                <?php endif; ?>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <?php echo Form::mySelect('unidad_id', '* Unidad', $inv_unidades, null, ['class' => 'form-control','data-width' =>'100%','required']); ?>

                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($inv_producto->stock_min) > 0): ?>
                                        <?php echo Form::myInput('number', 'stock_min', '* Stock Min.', ['class' => 'form-control','maxlength' => '10']); ?>

                                    <?php else: ?>
                                        <?php echo Form::myInput('number', 'stock_min', '* Stock Min.', ['class' => 'form-control','maxlength' => '10'],1); ?>

                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <?php if(isset($inv_producto->stock_max) > 0): ?>
                                        <?php echo Form::myInput('number', 'stock_max', '* Stock Max', ['class' => 'form-control','maxlength' => '10']); ?>

                                    <?php else: ?>
                                        <?php echo Form::myInput('number', 'stock_max', '* Stock Max.', ['class' => 'form-control','maxlength' => '10'],1000); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-3">
                                <?php if(isset($inv_producto->cantidad) > 0): ?>
                                    <?php echo Form::myInput('number', 'cantidad', '* Cantidad', ['class' => 'form-control','maxlength' => '10']); ?>

                                <?php else: ?>
                                    <?php echo Form::myInput('number', 'cantidad', '* Cantidad', ['class' => 'form-control','maxlength' => '10'],0); ?>

                                <?php endif; ?>
                            </div>
                            <div class="col-md-3">
                                <?php echo Form::mySelect('impuesto', '* Impuesto', config('variables.impuestoproducto'), null, ['class' => 'form-control ivapro', 'onchange' => 'oinvproducto();','data-width' =>'100%']); ?>

                            </div>
                            <div class="col-md-6">
                            <?php if(isset($inv_producto->costo) > 0): ?>
                                    <?php echo Form::myInput('number', 'costo', '* Costo', ['class' => 'form-control cospro', 'onchange' => 'oinvproducto();','maxlength' => '18']); ?>

                                <?php else: ?>
                                    <?php echo Form::myInput('number', 'costo', '* Costo', ['class' => 'form-control cospro', 'onchange' => 'oinvproducto();','maxlength' => '18'],1); ?>

                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="col-md-6">
                                <?php if(isset($inv_producto->iva) > 0): ?>
                                    <?php echo Form::myInput('number', 'iva', '* Valor Iva', ['class' => 'form-control','maxlength' => '18','readonly']); ?>

                                <?php else: ?>
                                    <?php echo Form::myInput('number', 'iva', '* Valor Iva', ['class' => 'form-control','maxlength' => '18','readonly'],0); ?>

                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <?php if(isset($inv_producto->precio) > 0): ?>
                                    <?php echo Form::myInput('number', 'precio', '* Precio', ['class' => 'form-control','maxlength' => '18']); ?>

                                <?php else: ?>
                                    <?php echo Form::myInput('number', 'precio', '* Precio', ['class' => 'form-control','maxlength' => '18'],0); ?>

                                <?php endif; ?>
                            </div>

                        </div>

					</div>
				</div>

				<div class="col-sm-12 col-md-4 col-lg-4">
                    <h4 class="c-orange-400">Imagen</h4>
					<div class="bgc-white bd">

                        <div class="form-row">
                            <div class="col-md-12">
                                <?php if(isset($inv_producto->imaproducto)): ?>

                                    <?php if(file_exists( public_path().$inv_producto->imaproducto)): ?>
                                        <div class="col-sm-12">
                                            <div class="card" style="margin-top: 10px;">
                                                <img src="<?php echo e($inv_producto->imaproducto); ?>" class="img-fluid" id="imagenpro" alt="...">
                                            </div>
                                        </div>
                                        <?php echo Form::myFile('imaproducto', ' ', ['class' => 'form-control', 'id' => 'uploadedFile']); ?>

                                    <?php else: ?>
                                        <div class="col-sm-12">
                                            <div class="card" style="margin-top: 10px;">
                                                <img src="https://demo.aromanos.co/images/404.png" class="img-fluid" id="imagenpro" alt="...">
                                            </div>
                                        </div>
                                        <?php echo Form::myFile('imaproducto', ' ', ['class' => 'form-control', 'id' => 'uploadedFile']); ?>

                                    <?php endif; ?>

                                <?php else: ?>
                                    <div class="col-sm-12">
                                        <div class="card" style="margin-top: 10px;">
                                            <img src="https://demo.aromanos.co/images/404.png" class="img-fluid" id="imagenpro" alt="...">
                                        </div>
                                    </div>
                                    <?php echo Form::myFile('imaproducto', ' ', ['class' => 'form-control', 'id' => 'uploadedFile']); ?>

                                <?php endif; ?>
                            </div>
                        </div>

					</div>
				</div>
			</div>

            <?php echo Form::hidden('user_id', Auth::user()->id); ?>

			<?php echo Form::hidden('sucursal_id', Auth::user()->sucursal_id); ?>


		</div>
	</div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aromanos-guane/resources/views/inventarios/inv_productos/partials/forme.blade.php ENDPATH**/ ?>