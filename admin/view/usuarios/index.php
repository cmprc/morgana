<?php
include_once('../../model/Usuario.class');
$users = Usuario::getAll();
$users = json_encode($users);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Usuarios </title>
    <?php include_once('../util/first.php') ?>

</head>

<body>
    <div id="wrapper">
        <?php include ("../util/sidebar.php") ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include ("../util/topbar.php") ?>
            <div class="wrapper wrapper-content animated fadeInUp ecommerce">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Consulta de Usuários</h5>
                                <div class="ibox-tools">
                                    <a href="#" data-toggle="modal" data-target="#adicionar_usuario">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="table table-hover user-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Nível</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../util/footer.php") ?>
        </div>
    </div>

    <!-- MODAIS -->
    <?php include_once('../modais/usuarios/editar.php') ?>
    <?php include_once('../modais/usuarios/cadastrar.php') ?>

    <?php include_once('../util/last.php') ?>

    <!-- MANAGERS -->
    <script src="../../assets/js/managers/usuario.js"></script>

    <script>
        var users = <?= $users ?>;

        $(document).ready(function(){
            atualizaMenu("usuarios");
            
            Usuario.users = users;
            Usuario.init();
        });
    </script>

</body>

</html>

