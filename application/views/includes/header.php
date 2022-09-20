<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <title>5's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#"><img width="150" src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Selecciona informacion para realizar auditoria</h5>
                    </div>
                    <div class="modal-body">
                        <p>Se requiere de la siguiente informacion:</p>
                        <form>
                            <div class="form-group mt-3">
                                <label for="plant">Planta</label>
                                <select type="text" class="form-control" name="plant" id="plant">
                                    <option value="">Seleciona una planta</option>
                                    <option value="1">Moldeo</option>
                                    <option value="2">Ensamble</option>
                                    <option value="3">Empaque</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="plant">Area</label>
                                <select type="text" class="form-control" name="plant" id="plant">
                                    <option value="">Seleciona un Area</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="plant">Supervisor</label>
                                <select type="text" class="form-control" name="plant" id="plant">
                                    <option value="">Seleciona un Supervisor</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="plant">Tipo de auditoria</label>
                                <select type="text" class="form-control" name="plant" id="plant">
                                    <option value="">Seleciona tipo de auditoria</option>
                                    <option value="1">Almacen</option>
                                    <option value="2">Oficina</option>
                                    <option value="3">Produccion</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button class="btn btn-secondary me-md-2" type="button">Administrar</button>
                                <button class="btn btn-success" type="button">Auditorias</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>