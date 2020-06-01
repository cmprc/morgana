<?php
include_once('../../model/Post.class');
$post = Post::getOne($_GET['code']);
$post = json_encode($post);
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
            <div class="wrapper wrapper-content animated fadeInUp article">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="ibox">
                            <div class="ibox-content post-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../util/footer.php") ?>
        </div>
    </div>

    <?php include_once('../util/last.php') ?>

    <!-- MANAGERS -->
    <script src="../../assets/js/managers/post.js"></script>

    <script>
        var post = <?= $post ?>;

        $(document).ready(function(){
            atualizaMenu("posts");
            $('.summernote').summernote();

            Post.post = post;
            Post.init();

        });
    </script>

</body>

</html>

