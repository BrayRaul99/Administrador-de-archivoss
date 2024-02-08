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



    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="<?php echo BASE_URL . 'Assets/css/main.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/plugins/DataTables/datatables.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/custom.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/select2.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'Assets/css/select2-bootstrap-5-theme.rtl.min.css'; ?>" rel="stylesheet">

    <link rel="icon" href="<?php echo BASE_URL . 'Assets/images/favicon.ico'; ?>">


</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="#" class="logo-icon"><span class="logo-text">AGCTI</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="<?php echo BASE_URL . 'Assets/images/avatars/avatar.png'; ?>">
                        <!--<span class="activity-indicator"></span>-->
                        <span class="user-info-text"><?php echo $_SESSION['nombre']; ?></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>

                    <li class="<?php echo ($data['menu'] ==  'admin') ? 'active-page' : '' ; ?>">
                        <a href="<?php echo BASE_URL . 'admin'; ?>" class="<?php echo ($data['menu'] ==  'admin') ? 'active' : '' ; ?>"><i class="material-icons-two-tone">cloud_queue</i>Archivos</a>
                    </li>

                    <li class="<?php echo ($data['menu'] ==  'share') ? 'active-page' : '' ; ?>">
                        <a href="<?php echo BASE_URL . 'compartidos'; ?>"class="<?php echo ($data['menu'] ==  'share') ? 'active' : '' ; ?>"><i class="material-icons-two-tone">folder_shared</i>Compartidos<span class="badge rounded-pill badge-danger float-end"><?php echo  $data['shares']['total']; ?></span></a>
                    </li>

                    <li class="<?php echo ($data['menu'] ==  'usuarios') ? 'active-page' : '' ; ?>">
                        <a href="<?php echo BASE_URL . 'usuarios'; ?>"class="<?php echo ($data['menu'] ==  'usuarios') ? 'active' : '' ; ?>">
                            <i class="material-icons">
                                people
                            </i>Usuarios
                        </a>
                    </li>
                    <li>
                        <!--<a href="#">
                            <i class="material-icons">
                                folder
                            </i>Documentos</a>
                    </li>-->


                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search" >
                <form>
                    <input class="form-control" id="inputBusqueda" type="text" placeholder="Buscar..." aria-label="Search" autocomplete="off">
                    <div id="container-result"></div>

                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <!--<li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>-->
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">
                                        <i class="material-icons">
                                            menu
                                        </i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Opciones</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="<?php echo BASE_URL . 'usuarios/profile'; ?>">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="<?php echo BASE_URL . 'Assets/images/avatars/avatar.png'; ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Perfil</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="<?php echo BASE_URL . 'usuarios/salir'; ?>">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="<?php echo BASE_URL . 'Assets/images/avatars/logout.png'; ?>" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Salir</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">