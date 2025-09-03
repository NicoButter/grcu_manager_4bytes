<header class="bg-light shadow-sm py-3">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="../lib/img/logo_grcu_manager.png" width="170" height="100" class="img-fluid mr-2" alt="Logo">
        </div>
        <div class="d-flex align-items-center">
            <span class="text-dark mr-3">Conectado como <strong><?= $_SESSION['usuario']->nombre; ?></strong></span>
            <a class="btn btn-outline-danger btn-sm" href="../app/salir.php">
                <span class="oi oi-account-logout mr-1"></span>Salir
            </a>
        </div>
    </div>
</header>