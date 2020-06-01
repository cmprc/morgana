<?php 
if(!isset($_SESSION)){
    session_start();
}
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $_SESSION['nome'] ?> </strong>
                        </span> <span class="text-muted text-xs block"> <?php if($_SESSION['nivel']==1) echo "Administrador(a)"; else echo "Usuário(a)" ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <!-- <li><a href="#">Perfil</a></li> -->
                            <li><a href="../../controller/usuario/logout.php">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="dashboard">
                    <a href="../dashboard/dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Painel de Controle</span></a>
                </li>
                <li class="posts">
                    <a href="../posts/index.php"><i class="fa fa-file-text"></i> <span class="nav-label">Posts</span></a>
                </li>
                <li class="usuarios">
                    <a href="../usuarios/index.php"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
                </li>
            </ul>

        </div>
    </nav>