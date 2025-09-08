<?php
define('IGNORE_CONTROLS', true);
include_once '../lib/ControlAcceso.Class.php';
//session_start();

// Destruye solo la sesión de la app
if(isset($_SESSION['usuario'])){
    unset($_SESSION['usuario']);
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo Constantes::NOMBRE_SISTEMA; ?> - Salir</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/uargflow/lib/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/uargflow/lib/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/uargflow/lib/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/uargflow/lib/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/uargflow/lib/favicon/favicon-16x16.png">
    <link rel="manifest" href="/uargflow/lib/favicon/site.webmanifest">

    <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
    
    <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>

<?php include_once '../gui/navbar.php'; ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Has salido de <?= Constantes::NOMBRE_SISTEMA; ?></h3>
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Tu sesión en el sistema fue cerrada correctamente.  
                Seguís conectado a tu cuenta de Google en el navegador.
            </div>

            <p>Opciones rápidas:</p>
            <a href="index.php" class="btn btn-primary">
                <span class="oi oi-account-login"></span> Volver a Ingresar
            </a>
            <a href="http://www.gmail.com" target="_blank" class="btn btn-secondary">
                <span class="oi oi-inbox"></span> Ir a Gmail
            </a>
            <a href="http://www.uarg.unpa.edu.ar" target="_blank" class="btn btn-info">
                <span class="oi oi-globe"></span> Portal UARG
            </a>
        </div>
    </div>
</div>

<!-- Modal de Salida -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Has salido de <?= Constantes::NOMBRE_SISTEMA; ?></h5>
      </div>
      <div class="modal-body">
        Tu sesión en el sistema fue cerrada correctamente.<br>
        Seguís conectado a tu cuenta de Google en este navegador.
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-primary">Volver a Ingresar</a>
        <button id="googleLogoutBtn" class="btn btn-danger">Cerrar sesión de Google</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('#logoutModal').modal({ backdrop: 'static', keyboard: false });
    $('#logoutModal').modal('show');

    $('#googleLogoutBtn').click(function(){
      const iframe = document.createElement('iframe');
      iframe.style.display = 'none';
      iframe.src = 'https://accounts.google.com/logout';
      document.body.appendChild(iframe);
      
      setTimeout(() => {
        document.body.removeChild(iframe);
        window.location.href = 'index.php';
      }, 1000);
    });
  });
</script>

</body>
</html>
