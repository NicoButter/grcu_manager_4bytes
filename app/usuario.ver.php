<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_USUARIOS);
include_once '../modelo/Usuario.Class.php';

$Usuario = new Usuario($_GET["id"]);
?>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="apple-touch-icon" sizes="180x180" href="/uargflow/lib/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/uargflow/lib/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/uargflow/lib/favicon/favicon-16x16.png">
        <link rel="manifest" href="/uargflow/lib/favicon/site.webmanifest">
        
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />

        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Propiedades del Usuario</title>
    </head>
    <body>
        <?php include_once '../gui/header.php'; ?>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container">
            <p></p>
            <div class="card">
                <div class="card-header">
                    <h3>Propiedades del Usuario</h3>
                </div>
                <div class="card-body">
                    <h4 class="card-text">Nombre</h4>
                    <p> <?= $Usuario->getNombre(); ?></p>
                    <hr />
                    <h4 class="card-text">Email</h4>
                    <p> <?= $Usuario->getEmail(); ?></p>
                    <hr />
                    <h4 class="card-text">Roles</h4>
                    <?php foreach ($Usuario->getRoles() as $Rol) { ?>
                        <p> <?= $Rol->getNombre(); ?> </p>
                    <?php } ?> 

                    <hr />
                    <h5 class="card-text">Opciones</h5>
                    <a href="usuarios.php">
                        <button type="button" class="btn btn-primary">
                            <span class="oi oi-account-logout"></span> Salir
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
