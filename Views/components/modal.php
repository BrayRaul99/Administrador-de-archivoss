<div id="modalArchivos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subir Archivos</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="upload-form" class="dropzone" action="<?php echo BASE_URL .  'admin/subirarchivo'; ?>">
                <input type="hidden" id="id_carpeta" name="id_carpeta">
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="btnProcesar">Subir</button>

            </div>
        </div>
    </div>
</div>

<div id="modalFile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Subir o Crear Carpeta</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="d-grid">
                    <button type="button" id="btnNuevaCarpeta" class="btn btn-outline-primary m-r-xs"><i class="material-icons">folder</i>Nueva Carpeta</button>
                    <hr>
                    <input type="file" id="file" class="d-none" name="file">
                    <button type="button" id="btnSubirArchivo" class="btn btn-outline-success m-r-xs"><i class="material-icons">upload_file</i>Subir Archivo</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="modalcarpeta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-carpeta">Nueva Carpeta</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="frmCarpeta" autocomplete="off">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="material-icons">folder</i>
                        </span>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalCompartir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-compartir"></h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                
                <div class="d-grid">
                    <a href="#" id="btnVer" class="btn btn-outline-info m-r-xs"><i class="material-icons">visibility</i>Ver</a>
                    <hr>
                    <button type="button" id="btnSubir" class="btn btn-outline-primary m-r-xs"><i class="material-icons">upload_file</i>Subir Archivo</button>
                    <hr>
                    <button type="button" id="btnCompartir" class="btn btn-outline-success m-r-xs"><i class="material-icons">share</i>Compartir</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalUsuarios" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-usuarios">Agregar Usuarios</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="frmCompartir">
                <div class="modal-body">
                    <select class="js-states form-control" id="usuarios" name="usuarios[]" tabindex="-1" style="display: none; width: 100%" multiple="multiple">
                    </select>
                    <hr>

                    <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Seleccionar Archivos a Compartir
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div id="container-archivos">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="text-center">
                        <a class="btn btn-outline-info" hrf="#" id="btnVerDetalle">Ver Detalles</a>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-outline-primary" type="submit">Compartir</button>
                </div>
            </form>
        </div>
    </div>
</div>