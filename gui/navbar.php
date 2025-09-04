<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-1">
    <div class="container-fluid justify-content-center">

        <!-- Links centrados -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-dark px-3" href="../app/usuarios.php">
                    <span class="oi oi-person me-1"></span>Usuarios
                </a>
            </li>
            <?php if (ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_ROLES)) { ?>
            <li class="nav-item">
                <a class="nav-link text-dark px-3" href="../app/roles.php">
                    <span class="oi oi-graph me-1"></span>Roles
                </a>
            </li>
            <?php } ?>
            <?php if (ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_PERMISOS)) { ?>
            <li class="nav-item">
                <a class="nav-link text-dark px-3" href="../app/permisos.php">
                    <span class="oi oi-lock-locked me-1"></span>Permisos
                </a>
            </li>
            <?php } ?>
        </ul>

    </div>
</nav>
