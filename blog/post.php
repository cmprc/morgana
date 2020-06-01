<?php
include_once('model/Post.class');

if (!(isset($_GET['id']) && is_numeric($_GET['id']))) {
    header('Location: ./');
}

$post = Post::getOne($_GET['id']);
if (!isset($post)) {
    header('Location: ./');
}

Post::addInteraction($_GET['id']);
?>

<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <title>Blog | Morgana Buratti</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <link rel="shortcut icon" href="../assets/images/fav/favicon.png">
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/justified-gallery.min.css">
    <link rel="stylesheet" href="../assets/css/bootsnav.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body>
    <section class="wow fadeIn cover-background background-position-top" style="background-image:url('../assets/images/19.jpg');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-large">
                    <div class="display-table-cell vertical-align-middle text-center padding-30px-tb">
                        <h1 class="text-white alt-font font-weight-600 margin-10px-bottom"><?= $post['titulo']; ?></h1>
                        <span class="text-white opacity6 alt-font no-margin-bottom text-uppercase text-small">
                            <?php
                            $data_formatada = new DateTime($post['data']);
                            echo $data_formatada->format('d.m.Y');
                            ?>
                            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;por
                            <?= $post['autor']; ?>
                        </span>
                        <input id="post" type="hidden" value="<?= $post['id']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 center-col xs-text-center">
                    <?= $post['corpo']; ?>
                </div>
            </div>

        </div>
    </section>

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 center-col no-padding">
                    <div class="col-md-8 col-sm-6 col-xs-12 text-left xs-text-center xs-margin-10px-bottom">
                        <div class="social-icon-style-6 blog-back">
                            <ul class="extra-small-icon">
                                <li><a href="./"><i class="fa fa-angle-left"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-right xs-text-center">
                        <div class="social-icon-style-6">
                            <ul class="extra-small-icon">
                                <li class="see-post"><a class="likes-count"><i class="fa fa-eye"></i><span class="text-small"><?= $post['views'] + 1; ?></span></a></li>
                                <li class="like-post"><a class="likes-count"><i class="fa fa-heart"></i><span class="text-small"><?= $post['likes']; ?></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('view/util/footer.php'); ?>

    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../assets/js/skrollr.min.js"></script>
    <script type="text/javascript" src="../assets/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="../assets/js/bootsnav.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="../assets/js/wow.min.js"></script>
    <script type="text/javascript" src="../assets/js/page-scroll.js"></script>
    <script type="text/javascript" src="../assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.count-to.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.stellar.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="../assets/js/classie.js"></script>
    <script type="text/javascript" src="../assets/js/hamburger-menu.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../assets/js/equalize.min.js"></script>
    <script type="text/javascript" src="../assets/js/justified-gallery.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>

    <script>
        $(document).ready(function() {

            $('li.like-post').click(function() {
                let likes = $(this).find('span').html();
                if (!$(this).find('i').hasClass('text-deep-pink')) {
                    $(this).find('i').addClass('text-deep-pink');
                    $(this).find('span').html(parseInt(likes) + 1);
                    $.post("controller/post/like.php", {
                        id: $('#post').val()
                    });
                }
            });

        });
    </script>
</body>

</html>