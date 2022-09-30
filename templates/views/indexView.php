<?php require_once INCLUDES.'head.php' ?>
<?php require_once INCLUDES.'navbar.php' ?>
    <!-- Contend -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card mb-3">
                    <div class="card-header">informacion del clinete</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="walter white" required>
                                </div>
                                <div class="col-4">
                                    <label for="empresa">Empresa</label>
                                    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="braking bad" required>
                                </div>
                                <div class="col-4">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="walter@wite.com" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Agrego nuevo concepto</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="consepto">Consepto</label>
                                    <input type="text" class="form-control" id="cconsepto" name="consepto" placeholder="Guitarra electrica" required>
                                </div>
                                <div class="col-3">
                                    <label for="titulo">titulo</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="producto">Producto</option>
                                        <option value="servico">Servicio</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="9999" value="1" required>
                                </div>
                                <div class="col-3">
                                    <label for="precio_unitario">Precio unitario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Agregar concepto</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">Resumen del cotizador</div>
                    <div class="card-body">
                        <div class="table-responisive">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Playera</td>
                                        <td>1</td>
                                        <td>$399.00</td>
                                        <td class="text-right">$399.00</td>
                                    </tr>
                                    <tr>
                                        <td>Ukelele</td>
                                        <td>2</td>
                                        <td>$250.00</td>
                                        <td class="text-right">250.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Subtotal</td>
                                        <td class="text-right">$123.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Impuesto</td>
                                        <td class="text-right">$123.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="3">Envio</td>
                                        <td class="text-right">$50.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="4"><b>total</b><h3 class="text-success"><b>799.00</b></h3></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Descargar pdf</button>
                        <button class="btn btn-success">Enviar por correo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End contend -->
<?php require_once INCLUDES.'footer.php' ?>