<?php
include_once('../../model/Post.class');
$posts = Post::getAll();
$posts = json_encode($posts);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Posts </title>
    <?php include_once('../util/first.php') ?>

</head>

<body>

    <div id="wrapper">
        <?php include ("../util/sidebar.php") ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include ("../util/topbar.php") ?>
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <a href="cadastro.php">
                                <div class="m-b-sm text-center" style="background-color: #f8f8f9">
                                    <div class="p-xs">
                                        <i class="fa fa-plus fa-2x"></i><br>
                                        <small>Adicione novos posts clicando aqui</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row post-grid">
                    
                </div>
            </div>
            <?php include("../util/footer.php") ?>
        </div>
    </div>

    <?php include_once('../util/last.php') ?>

    <!-- MANAGERS -->
    <script src="../../assets/js/managers/post.js"></script>

    <script>
        var posts = <?= $posts ?>;

        $(document).ready(function(){
            atualizaMenu("posts");
            $('.summernote').summernote();

            Post.posts = posts;
            Post.init();

        });
    </script>

</body>

</html>

