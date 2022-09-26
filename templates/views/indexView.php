<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizador</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="bg-dark collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Cotizador</strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- End Header -->

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

    <!-- footer -->
    <footer class="bg-light text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Arriba</a>
            </p>
            <p class="mb-0"><a href="/">Cotizador app</a> &copy; Todos los derechos reservados <?php echo date('Y') ?> .</p>
        </div>
    </footer>
    <!-- end footer -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>