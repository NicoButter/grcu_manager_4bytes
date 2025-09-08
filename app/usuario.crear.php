<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_USUARIOS);
include_once '../modelo/ColeccionRoles.php';
$Roles = new ColeccionRoles();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Crear Usuario</title>
    </head>
    <style>
        .is-invalid {
            border: 1px solid #dc3545 !important;
            border-radius: 5px;
            padding: 10px;
        }

        .invalid-feedback {
            display: none;
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 5px;
        }
    </style>
    <body>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container">
            <form action="usuario.crear.procesar.php" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Usuario</h3>
                        <p>
                            Complete los campos a continuaci&oacute;n. 
                            Luego, presione el bot&oacute;n <b>Confirmar</b>.<br />
                            Si desea cancelar, presione el bot&oacute;n <b>Cancelar</b>.
                        </p>
                    </div>
                    <div class="card-body">
                        <h4>Propiedades</h4>
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Ingrese el nombre del Usuario" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputMail">Email</label>
                            <input type="email" name="mail" class="form-control" id="inputMail" placeholder="Ingrese el email del Usuario" required="">
                        </div>
                        <hr />
                        <input type="hidden" id="rol-required" name="rol-required" required>
                        <h4>Roles <span class="text-danger">*</span></h4>
                        <div id="roles-container">
                            <?php foreach ($Roles->getRoles() as $Rol) { ?>
                                <div class="form-check">
                                    <input class="form-check-input rol-checkbox" type="checkbox" value="<?= $Rol->getId(); ?>" id="rol_<?= $Rol->getId(); ?>" name="rol[<?= $Rol->getId(); ?>]" />
                                    <label class="form-check-label" for="rol_<?= $Rol->getId(); ?>">
                                        <?= $Rol->getNombre(); ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>

                    <div id="rol-error" class="invalid-feedback">Debe seleccionar al menos un rol</div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-success">
                            <span class="oi oi-check"></span> Confirmar
                        </button>
                        <a href="usuarios.php">
                            <button type="button" class="btn btn-outline-danger">
                                <span class="oi oi-x"></span> Cancelar
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <?php include_once '../gui/footer.php'; ?>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                const checkboxes = document.querySelectorAll('.rol-checkbox');
                const hiddenInput = document.getElementById('rol-required');
                const errorDiv = document.getElementById('rol-error');
                const container = document.getElementById('roles-container');
                
                hiddenInput.required = false;
                
                form.addEventListener('submit', function(e) {
                    let checked = false;
                    checkboxes.forEach(checkbox => {
                        if (checkbox.checked) checked = true;
                    });
                    
                    if (!checked) {
                        e.preventDefault();
                        errorDiv.style.display = 'block';
                        container.classList.add('is-invalid');
                        hiddenInput.required = true;
                        
                        // Forzar validación nativa del browser
                        hiddenInput.value = '';
                        if (typeof form.reportValidity === 'function') {
                            form.reportValidity();
                        }
                    
                        errorDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                });
                
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function() {
                        if (this.checked) {
                            errorDiv.style.display = 'none';
                            container.classList.remove('is-invalid');
                            hiddenInput.required = false;
                            hiddenInput.value = 'selected';
                        }
                    });
                });
            });
        </script>

    </body>
</html>
