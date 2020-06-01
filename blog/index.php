<?php
include_once('../admin/model/Post.class');

// pagination
$count = Post::getAll(NULL, FALSE, TRUE);
$page = isset($_GET['pg']) && is_numeric($_GET['pg']) ? $_GET['pg'] : 1;
$max = 9;
$offset = ($page - 1) * $max;
$condition = $offset > 0 ? ' LIMIT '.$max.', '.$offset : ' LIMIT '.$max;
$pages = ceil($count[0]['total']/$max);

// posts
$posts = Post::getAll($condition, FALSE, FALSE);
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
    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('../assets/images/19.jpg');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large" style="height: 100px">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <!-- start page title -->
                        <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog</h1>
                        <span class="text-white opacity6 alt-font">posts feitos com carinho</span>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start post content section -->
    <section id="blog" class="wow fadeIn bg-light-gray half-section last-paragraph-no-margin blog-post-style5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 no-padding xs-padding-15px-lr">
                    <ul class="blog-grid blog-3col gutter-large">
                        <li class="grid-sizer"></li>

                        <?php foreach ($posts as $key => $post) { ?>
                            <li class="grid-item wow fadeInUp last-paragraph-no-margin">
                                <div class="blog-post">
                                    <!-- <div class="blog-post-images overflow-hidden">
                                        <a href="blog-post-layout-01.html">
                                            <img src="http://placehold.it/900x650" alt="">
                                        </a>
                                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="blog-grid.html">Graphic Design</a></div>
                                    </div> -->
                                    <div class="post-details padding-40px-all bg-white sm-padding-20px-all">
                                        <div class="blog-hover-color"></div>
                                        <a href="<?= 'post.php?id='.$post['id']; ?>" class="alt-font post-title text-medium text-extra-dark-gray width-90 display-block md-width-100 margin-5px-bottom">
                                            <?= Post::limita_caracteres($post['titulo'], 30); ?>
                                        </a>
                                        <div class="author">
                                            <span class="text-medium-gray text-uppercase text-extra-small display-inline-block">por 
                                                <a href="blog-grid.html" class="text-medium-gray"><?= $post['autor']; ?></a>
                                                &nbsp;&nbsp;|&nbsp;&nbsp;
                                                <?php
                                                    $data_formatada = new DateTime($post['data']);
                                                    echo $data_formatada->format('d.m.Y');
                                                ?>
                                            </span>
                                        </div>
                                        <div class="separator-line-horrizontal-full bg-medium-gray margin-seven-tb md-margin-four-tb"></div>
                                        <p>
                                            <?= Post::limita_caracteres(strip_tags($post['corpo']), 100); ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <!-- start pagination -->
            <div class=" text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                    <ul>
                        <li class="<?= ($page == 1) ? 'disabled' : ''; ?>">
                            <a href="<?= '?pg='.($page-1); ?>"><i class="fa fa-long-arrow-left margin-5px-right xs-display-none"></i> Anterior</a>
                        </li>
                        <?php for($i=1; $i<=$pages; $i++) { ?>
                            <li class="<?= ($page == $i) ? 'active' : ''; ?>"><a href="<?= '?pg='.$i; ?>"><?= $i; ?></a></li>
                        <?php } ?>
                        <li class="<?= ($page == $pages) ? 'disabled' : ''; ?>">
                            <a href="<?= '?pg='.($page+1); ?>">Próxima <i class="fa fa-long-arrow-right margin-5px-left xs-display-none"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end pagination -->
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
        <script type="text/javascript" src="../assets/js/counter.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="../assets/js/equalize.min.js"></script>
        <script type="text/javascript" src="../assets/js/skill.bars.jquery.js"></script> 
        <script type="text/javascript" src="../assets/js/justified-gallery.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.easypiechart.min.js"></script>
        <script type="text/javascript" src="../assets/js/instafeed.min.js"></script>
        <script type="text/javascript" src="../assets/js/retina.min.js"></script>
        <script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>