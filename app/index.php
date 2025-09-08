<?php include_once '../lib/ControlAcceso.Class.php'; ?>

<!DOCTYPE html>
<html lang="es"></html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-signin-client_id" content="356408280239-7airslbg59lt2nped9l4dtqm2rf25aii.apps.googleusercontent.com" />
        
        <link rel="apple-touch-icon" sizes="180x180" href="/uargflow/lib/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/uargflow/lib/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/uargflow/lib/favicon/favicon-16x16.png">
        <link rel="manifest" href="/uargflow/lib/favicon/site.webmanifest">
        
        <title><?php echo Constantes::NOMBRE_SISTEMA; ?> - Login</title>

        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/uargflow_footer.css" />
        
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript" src="../lib/login.js"></script>
    </head>
    
    <body>
        <header class="bg-secondary text-white py-4 shadow-sm w-100">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <img src="../lib/img/logo_grcu_manager.png" alt="Logo GRCU Manager" style="height: 60px;">

                <!-- Texto centrado -->
                <h1 class="h4 mb-0 font-weight-bold text-center flex-grow-1">
                Bienvenidos a GRCU Manager
                </h1>

                <!-- Botón -->
                <a href="#" class="btn btn-outline-light btn-sm ml-3">
                <span class="oi oi-info"></span> Acerca de
                </a>
            </div>
        </header>



        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="../lib/img/logo_grcu_manager.png" width="150" height="50" class="d-inline-block align-top" alt="">
                    <?php echo Constantes::NOMBRE_SISTEMA; ?> - Login
                </a>
            </div>
        </nav>   -->
        <div class="container">
            <section id="main-content">
                <article>
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo Constantes::NOMBRE_SISTEMA; ?> - Login</h3>
                        </div>
                        <div class="card-body">

                            <h5>Bienvenido</h5>
                            <p>Estimado usuario: Bienvenido a la aplicaci&oacute;n GRCU Manager, una aplicaci&oacute;n desarrollada por 4Bytes</p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <div class="row vertical-align">
                                            <div class="col-1 text-center">
                                                <i class="oi oi-info"></i> 
                                            </div>
                                            <div class="col-11">
                                                <strong>Importante:</strong> Para acceder al sistema es necesario disponer de un correo de <a href="http://www.gmail.com" target="_blank">GMail</a>.
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>                              


                            <hr />
                            <h5>Ingreso al Sistema</h5>
                            <p>Ud. puede ingresar el sistema si est&aacute; conectado a su e-mail. Por favor haga click en el bot&oacute;n a continuaci&oacute;n y elija su cuenta o realice el login.</p>
                            <div id="okgoogle" class="g-signin2" data-onsuccess="onSignIn" title="Acceder a GRCUmanager"></div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <?php include_once '../gui/footer.php'; ?>
        <!-- <footer class="footer">
            GRCU Manager
            <span class="oi oi-globe"></span> 
            4Bytes
        </footer> -->
    </body>
</html>

