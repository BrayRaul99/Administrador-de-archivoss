<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <title><?php echo $data['title']; ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/pace/pace.css'; ?>" rel="stylesheet">


    <link href="<?php echo BASE_URL . 'Assets/css/main.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css'; ?>" rel="stylesheet">

    <link rel="icon" href="<?php echo BASE_URL . 'Assets/images/favicon.ico'; ?>">


</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="#">Iniciar Sesión</a>
            </div>
            <p class="auth-description">Bienvenido al sistema gestor de documentación de AGCTI </p>

            <form id="formulario" >
                <div class="auth-credentials m-b-xxl">
                    <label for="correo" class="form-label">Correo electrónico<span class="text-danger">*</span></label>
                    <input type="email" class="form-control m-b-md" id="correo" name="correo" aria-describedby="correo" placeholder="Correo electrónico">

                    <label for="clave" class="form-label">Contraseña<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="clave" name="clave" aria-describedby="clave" placeholder="Contraseña">
                </div>

                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Acceso</button>
                    <!--<a href="#" class="auth-forgot-password float-end">¿Olvidaste tu contraseña?</a>-->
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/main.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/sweetalert2@11.js'; ?>"></script>
    <script src="<?php echo BASE_URL . 'Assets/js/custom.js'; ?>"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/login.js'; ?>"></script>

</body>

</html>