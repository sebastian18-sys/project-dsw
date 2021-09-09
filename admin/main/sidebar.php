<?php
// session_start();
error_reporting(0);
// $varsesion = $_SESSION['var_user'];
?>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Admin</h3>
        <ul class="nav side-menu">
            <!-- INICIO -->
            <li><a href="./panel_principal.php"><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-right"></span></a></li>

            <!-- OPERACIONES -->
            <li><a><i class="fa fa-home"></i> Operaciones <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="./chofer.php">Chofer</a></li>
                    <li><a href="./autobus.php">Autobus</a></li>
                    <li><a href="./agencias.php">Agencias</a></li> 
                    <li><a href="./itinerario.php">Itinerarios</a></li>  
                </ul>
            </li>

            <!-- CONSULTAS -->
            <li><a><i class="fa fa-home"></i> Consultas <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">                    
                    <li><a href="./consultar_itinerarios.php">Itinerarios</a></li>  
                    <li><a href="./devoluciones.php">Devoluciones</a></li>
                    <li><a href="#">Autobus</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>