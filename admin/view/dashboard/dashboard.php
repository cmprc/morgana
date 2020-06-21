<?php
session_start();

include_once('../../model/Post.class');
include_once('../../model/Usuario.class');

$users = Usuario::getAll(NULL, FALSE, TRUE);
$posts = Post::getAll(NULL, FALSE, TRUE);
$last_post = Post::getLastRegister();
$last_user = Usuario::getLastRegister();
$curtidas = Post::getSum('likes')[0];
$views = Post::getSum('views')[0];

$data['users'] = reset($users)['total'];
$data['posts'] = reset($posts)['total'];

$data = json_encode($data);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Painel de Controle </title>
    <?php include_once('../util/first.php') ?>
</head>

<body>
    <div id="wrapper">
        <?php include("../util/sidebar.php") ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include("../util/topbar.php") ?>
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="row cards">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Registrados</span>
                                <h5>Usuários</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="users">3</h1>
                                <div class="stat-percent font-bold text-success">
                                    <?= $_SESSION['nome'] == $last_user['nome'] ? 'Você' : $last_user['nome']; ?>
                                </div>
                                <small>Último cadastrado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Publicados</span>
                                <h5>Posts</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="posts">24</h1>
                                <div class="stat-percent font-bold text-info">
                                    <?php
                                    $data_formatada = new DateTime($last_post['data']);
                                    echo $data_formatada->format('d.m.Y');
                                    ?>
                                </div>
                                <small>Última postagem</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Curtidas</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="likes"><?= $curtidas; ?></h1>
                                <div class="stat-percent font-bold text-info">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <small>Total de curtidas</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Visualizações</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="views"><?= $views; ?></h1>
                                <div class="stat-percent font-bold text-info">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <small>Total de visualizações</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../util/last.php') ?>

    <!-- MANAGERS -->
    <script src="../../assets/js/managers/dashboard.js"></script>

    <script>
        var data = <?= $data ?>;

        $(document).ready(function() {
            atualizaMenu("dashboard");

            Dashboard.set(data);
            Dashboard.init();
        });
    </script>
</body>

</html>