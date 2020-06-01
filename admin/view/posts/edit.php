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
            <div class="wrapper wrapper-content animated fadeInUp ecommerce">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Cadastro de Posts <small class="m-l">Inclua novos posts na sua base de dados</small></h5>
                                <div class="ibox-tools">
                                    <a class="#">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <form class="form-horizontal" id="edit_post">
                                    <div class="form-group"><label class="col-sm-2 control-label">Título:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="titulo"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Corpo:</label>
                                        <div class="col-sm-10">
                                            <div class="summernote" name='corpo'>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-right">
                                            <button class="btn btn-primary btn-edit" type="button">Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php include_once('../util/last.php') ?>

                    <!-- MANAGERS -->
                    <script src="../../assets/js/managers/post.js"></script>
                    
                    <script>
                        var post = <?= $post ?>;

                        $(document).ready(function(){
                            atualizaMenu("posts");
                            var editor = $('.summernote').summernote();

                            Post.editor = editor;
                            Post.post = post;
                            Post.init();
                            Post.loadDataInForm(post.id);
                        
                        });
                    </script>

                </body>

                </html>

