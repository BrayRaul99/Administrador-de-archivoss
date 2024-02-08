<?php include_once 'Views/template/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1><?php echo $data['title']; ?></h1>
            </div>
        </div>
        <div class="col-md12">
            <button class="btn btn-outline-primary mb-3" type="button" id="btnNuevo">Nuevo</button>
            <div class="card">
                <div class="card-body">
                    <div class="table-res">
                        <table class="table table-striped table-hover display nowrap" style="width:100%" id="tblUsuarios">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <!--<th>Perfil</th>-->
                                    <th>Fecha de registro</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalRegistro" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="formulario" autocomplete="off">
                <input type="hidden" id="id_usuario" name="id_usuario">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Nombre</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        format_list_bulleted
                                    </i>
                                </span>
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="apellido">Apellido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        format_list_bulleted
                                    </i>
                                </span>
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="correo">Correo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        alternate_email
                                    </i>
                                </span>
                                <input class="form-control" type="email" id="correo" name="correo" placeholder="Correo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono">Teléfono</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        call
                                    </i>
                                </span>
                                <input class="form-control" type="number" id="telefono" oninput="limitarDigitos(this, 10)" name="telefono" placeholder="Telefono" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="clave">Clave</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        key
                                    </i>
                                </span>
                                <input class="form-control" type="password" id="clave" name="clave" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="rol">Rol</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="material-icons">
                                        person
                                    </i>
                                </span>
                                <select name="rol" id="rol" class="form-control" required>
                                    <option value="1">Empleado</option>
                                    <option value="2">Proveedor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="material-icons">
                            save
                        </i>Guardar
                    </button>
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal"><i class="material-icons">
                            cancel
                        </i>Cancelar
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function limitarDigitos(input,
        maxLength) {
        let inputValue = input.value;
        inputValue = inputValue.replace(/ [^0-9]/g, ''); // Elimina caracteres no numericos
        input.value = inputValue.slice(0, maxLength); // Limita la longitud a maxLength
    }
</script>

<?php include_once 'Views/template/footer.php'; ?>