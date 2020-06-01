<?php
include_once('admin/model/Post.class');

// posts
$posts = Post::getAll(' LIMIT 3', FALSE, FALSE);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>Morgana Buratti</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Morgana Buratti">
    <meta name="description" content="Eu sou a Morgana Burrati e este é o meu espaço virtual. Aqui eu explico de forma sucinta as áreas em que atuo e falo um pouco sobre minha formação e experiêcia no universo da psicologia.">
    <meta name="keywords" content="psicologia, organizacional, atendimento, tratamento, clinica, avaliacao">

    <link rel="shortcut icon" href="assets/images/fav/favicon.png">
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/et-line-icons.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/justified-gallery.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body>

    <div class="wrapper">
        <nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-12 col-sm-12 col-xs-12 sidenav-header">
                <!-- start logo -->
                <div class="logo-holder" style="min-height: 88px">
                    <a href="./" class="logo"><img alt="Morgana Buratti" title="Morgana Buratti" src="assets/images/logos/logo.png"></a>
                </div>
                <!-- end logo -->
                <button class="navbar-toggle mobile-toggle" type="button" id="mobileToggleSidenav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding-lr">
                <div id="navbar-menu" class="collapse navbar-collapse no-padding">
                    <ul class="nav navbar-nav navbar-left-sidebar font-weight-600">
                        <li><a href="#inicio" class="inner-link">Inicio</a></li>
                        <li><a href="#clinica" class="inner-link">Segmentos</a></li>
                        <li><a href="#metodologia" class="inner-link">Metodologia</a></li>
                        <li><a href="#sobre" class="inner-link">Sobre</a></li>
                        <li><a href="#contato" class="inner-link">Contato</a></li>
                        <li><a href="blog/" target="_blank" class="inner-link" style="border-bottom: 0px!important">Blog</a></li>
                    </ul>
                </div>
                <div class="padding-45px-lr padding-40px-tb md-no-padding-lr text-left">
                    <div class="border-all padding-10px-all">
                        <p class="text-medium-gray text-small font-weight-500 line-height-20 margin-15px-bottom">Rua Júlio de Castilhos, 734 <br> Centro - Farroupilha / RS</p>
                        <p class="text-medium-gray text-small font-weight-500 no-margin-bottom">(54) 99673.2039</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 position-absolute top-auto bottom-0 left-0 width-100 padding-15px-bottom xs-padding-15px-bottom">
                <div class="footer-holder">
                    <div class="social-icon-style-8 text-center border-top border-color-extra-light-gray padding-15px-top xs-padding-15px-top">
                        <ul class="small-icon no-margin-bottom">
                            <li><a href="https://www.facebook.com/" target="_blank" class="text-uppercase text-extra-dark-gray" style="font-size: 10px">Facebook</a></li>
                            <li><a href="https://instagram.com/" target="_blank" class="text-uppercase text-extra-dark-gray" style="font-size: 10px">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="sidebar-wrapper mobile-height">

            <section class="no-padding height-100 bg-black">
                <div class="container-fluid">
                    <div class="row">
                        <div class="swiper-container swiper-three-slides white-move height-100 width-100 hover-option3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide cover-background full-screen grid-item text-left" style="background-image:url('assets/images/1.jpg');">
                                    <div class="slide-hover-box">
                                        <div class="opacity-full bg-black"></div>
                                        <figure class="position-absolute">
                                            <a href="#clinica" class="inner-link">
                                                <figcaption>
                                                    <h6 class="font-weight-300 text-white margin-20px-bottom">Clínica</h6>
                                                    <p class="text-white width-85 sm-width-100">
                                                        Atendemos as mais diversas demandas, através da especialidade em Terapia Cognitivo Comportamental com crianças, adolescentes e adultos.
                                                    </p>
                                                    <div class="separator-line-horrizontal-medium-light2 opacity5 bg-white margin-35px-top sm-margin-15px-top"></div>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide cover-background full-screen grid-item text-left" style="background-image:url('assets/images/2.jpg');">
                                    <div class="slide-hover-box">
                                        <div class="opacity-full bg-black bg-black"></div>
                                        <figure class="position-absolute">
                                            <a href="#organizacional" class="inner-link">
                                                <figcaption>
                                                    <h6 class="font-weight-300 text-white margin-20px-bottom">Organizacional</h6>
                                                    <p class="text-white width-85 sm-width-100">
                                                        Oferecemos apoio às organizações no que se refere a Seleção de Profissionais e Gestão e Desenvolvimento de Pessoas.
                                                    </p>
                                                    <div class="separator-line-horrizontal-medium-light2 opacity5 bg-white margin-35px-top sm-margin-15px-top"></div>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide cover-background full-screen grid-item text-left" style="background-image:url('assets/images/16.jpg');">
                                    <div class="slide-hover-box">
                                        <div class="opacity-full bg-black"></div>
                                        <figure class="position-absolute">
                                            <a href="#avaliacao" class="inner-link">
                                                <figcaption>
                                                    <h6 class="font-weight-300 text-white margin-20px-bottom">Avaliação Psicológica</h6>
                                                    <p class="text-white width-85 sm-width-100">
                                                        Disponibilizamos testes psicológicos possibilitam identificar os processos cognitivos, emocionais, comportamentais e neurológicos.
                                                    </p>
                                                    <div class="separator-line-horrizontal-medium-light2 opacity5 bg-white margin-35px-top sm-margin-15px-top"></div>
                                                </figcaption>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-four-slides swiper-pagination-white"></div>
                            <div class="swiper-button-next swiper-button-black-highlight display-none"></div>
                            <div class="swiper-button-prev swiper-button-black-highlight display-none"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="descricao" class="wow fadeIn bg-light-gray" id="section-down">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-9 center-col margin-six-bottom text-center last-paragraph-no-margin">
                            <div class="alt-font text-chocolate margin-10px-bottom text-uppercase text-small">Objetivo</div>
                            <h5 class="alt-font text-extra-dark-gray font-weight-600">A Psicologia</h5>
                            <p class="center-col display-inline-block xs-width-100">
                                Nosso objetivo principal é oferecer a sociedade prevenção e promoção de saúde nos seus diversos espaços. Favorecendo a qualidade de vida, focando nossas ações nas potencialidades de cada pessoa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid wow fadeIn">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <img src="assets/images/14.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="big-section" id="clinica">
                <div class="container">
                    <div class="row padding-six-lr">
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 sm-margin-5px-bottom wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="separator-line-horrizontal-full bg-chocolate margin-20px-bottom sm-display-none"></div>
                            <span class="text-uppercase alt-font text-medium-gray letter-spacing-1 font-weight-600 text-small">Definição</span>
                        </div>
                        <div class="col-lg-8 col-md-7 col-md-offset-2 last-paragraph-no-margin">
                            <h5 class="alt-font text-extra-dark-gray font-weight-600 clear-both margin-5px-bottom">Psicologia Clínica</h5>
                            <div class="text-uppercase alt-font text-dark-gray font-weight-600 text-small margin-30px-bottom">Abordagem Cognitivo Comportamental</div>
                            <p class="text-medium line-height-30">A Terapia Cognitivo Comportamental (TCC), entende a forma como o ser humano interpreta os acontecimentos como aquilo que nos afeta, e não os acontecimentos em si. Ou seja: é a forma como cada pessoa vê, sente e pensa com relação à uma situação que causa desconforto, dor, incômodo, tristeza ou qualquer outra sensação negativa. </p>
                            <p class="text-medium line-height-30">Essa abordagem é bastante específica, clara e direta. Seu objetivo principal é identificar padrões de comportamento, pensamento, crenças e hábitos que estão na origem dos problemas, indicando, a partir disso, técnicas para alterar essas percepções de forma positiva.</p>
                            <p class="text-medium line-height-30">A TCC se destina tanto ao tratamento dos diferentes transtornos psicológicos e emocionais como a depressão, ansiedade, transtornos psicossomáticos, transtornos alimentares, fobias, traumas, dependência química, entre outros.</p>
                            <p class="text-medium line-height-30">Além disso, a Terapia Cognitivo Comportamental auxilia nas diversas questões que envolvem nossa vida como um todo, como: dificuldades nos relacionamentos, escolhas profissionais, luto, separações, perdas, estresse, dificuldades de aprendizagem, desenvolvimento pessoal e muitos outros.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wow fadeIn border-top border-width-1 border-color-medium-gray big-section" style="visibility: visible;animation-name: fadeIn;" id="organizacional">
                <div class="container">
                    <div class="row padding-six-lr">
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 sm-margin-5px-bottom wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="separator-line-horrizontal-full bg-chocolate margin-20px-bottom sm-display-none"></div>
                            <span class="text-uppercase alt-font text-medium-gray letter-spacing-1 font-weight-600 text-small">Definição</span>
                        </div>
                        <div class="col-lg-8 col-md-7 col-md-offset-2">
                            <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-30px-bottom clear-both">Psicologia Organizacional</h5>
                            <p class="text-medium line-height-30">A Psicologia Organizacional é a área de atuação que tem como foco o desenvolvimento e a aplicação de princípios científicos e técnicos, objetivando estudar e interferir no comportamento humano relacionado ao ambiente de trabalho, possibilitando alcançar níveis excelentes de qualidade por toda a organização, atuando sobre os problemas organizacionais da gestão, diretamente ligados ao bem estar dos colaboradores.</p>
                            <p class="text-medium line-height-30 margin-25px-bottom">Dentre as principais atividades desenvolvidas nessa área, estão: </p>
                            <ul class="list-style-5">
                                <li>Seleção de Pessoal</li>
                                <li>Avaliação Psicológica</li>
                                <li>Avaliação Psicossocial (NR’s)</li>
                                <li>Desenvolvimento Profissional</li>
                                <li>Diagnóstico Organizacional</li>
                                <li>Pesquisa de Satisfação no Trabalho</li>
                                <li>Pesquisa de Clima</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wow fadeIn border-top border-color-medium-gray big-section" style="visibility: visible; animation-name: fadeIn;" id="avaliacao">
                <div class="container">
                    <div class="row padding-six-lr">
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 sm-margin-5px-bottom wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="separator-line-horrizontal-full bg-chocolate margin-20px-bottom sm-display-none"></div>
                            <span class="text-uppercase alt-font text-medium-gray letter-spacing-1 font-weight-600 text-small">Definição</span>
                        </div>
                        <div class="col-lg-8 col-md-7 col-md-offset-2">
                            <h5 class="alt-font text-extra-dark-gray font-weight-600 margin-30px-bottom clear-both">Avaliação Psicológica</h5>
                            <p class="text-medium line-height-30">
                                É um processo técnico científico, realizado de forma dinâmica com instrumentos psicológicos específicos para cada demanda. Realizamos avaliações nos seguintes contextos:
                            </p>
                            <ul class="list-style-5">
                                <li>Avaliação para porte e posse de arma de fogo</li>
                                <li>Avaliação da atenção em crianças, adolescentes e adultos</li>
                                <li>Avaliação da memória em crianças, adolescentes e adultos</li>
                                <li>Avaliação da personalidade em crianças, adolescentes e adultos</li>
                                <li>Avaliação para orientação profissional e redirecionamento de carreira</li>
                            </ul>
                            <!-- <a href="index.html" class="btn btn-dark-gray btn-medium margin-10px-top">Launch Website</a> -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="wow fadeIn no-padding" style="visibility: visible; animation-name: fadeIn;">
                <div class="container-fluid no-padding">
                    <div class="row no-margin">
                        <div class="col-md-6 no-padding wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <img src="assets/images/4.jpg" class="width-100" alt="Imagem ilustrativa" data-no-retina="">
                        </div>
                        <div class="col-md-6 no-padding wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <img src="assets/images/21.jpg" class="width-100" alt="Imagem ilustrativa 2" data-no-retina="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;" id="metodologia">
                <div class="container">
                    <div class="row padding-six-lr">
                        <!-- start feature box item -->
                        <div class="col-md-4  col-sm-4 col-xs-12 sm-margin-40px-bottom xs-text-center wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                            <h5 class="text-light-gray font-weight-300 alt-font no-margin-bottom">01</h5>
                            <span class="text-extra-dark-gray alt-font text-large margin-15px-bottom display-block sm-margin-5px-bottom">Lead with why</span>
                            <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-chocolate width-50px xs-center-col"></div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col-md-4  col-sm-4 col-xs-12 sm-margin-40px-bottom xs-text-center wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                            <h5 class="text-light-gray font-weight-300 alt-font no-margin-bottom">02</h5>
                            <span class="text-extra-dark-gray alt-font text-large margin-15px-bottom display-block sm-margin-5px-bottom">Less but better</span>
                            <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-chocolate width-50px xs-center-col"></div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col-md-4  col-sm-4 col-xs-12 sm-margin-40px-bottom xs-text-center wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                            <h5 class="text-light-gray font-weight-300 alt-font no-margin-bottom">03</h5>
                            <span class="text-extra-dark-gray alt-font text-large margin-15px-bottom display-block sm-margin-5px-bottom">Human centered</span>
                            <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever since. Lorem Ipsum been the industry. Lorem Ipsum has been.</p>
                            <div class="separator-line-horrizontal-medium-light3 bg-chocolate width-50px xs-center-col"></div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </section>

            <section class="wow fadeIn border-top border-width-1 border-color-medium-gray" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 center-col text-center">
                            <i class="fa fa-quote-left icon-small text-chocolate display-block margin-25px-bottom"></i>
                            <h6 class="alt-font text-extra-dark-gray">A ciência não é uma ilusão, mas seria uma ilusão acreditar que poderemos encontrar noutro lugar o que ela não nos pode dar.</h6>
                            <span class="text-uppercase text-extra-small alt-font letter-spacing-3 text-medium-gray">Sigmund Freud</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;" id="sobre">
                <div class="container">
                    <div class="row equalize md-equalize-auto">
                        <div class="col-lg-3 col-md-6 col-sm-6 text-center display-table xs-margin-15px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn; height: 398px;">
                            <div class="display-table-cell vertical-align-middle">
                                <img src="assets/images/18.jpg" alt="" class="width-100" data-no-retina="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 text-center display-table wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn; height: 398px;">
                            <div class="display-table-cell vertical-align-middle">
                                <img src="assets/images/17.jpg" alt="" class="width-100" data-no-retina="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding display-table md-margin-five-top sm-text-center xs-no-margin-top wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn; height: 398px;">
                            <div class="display-table-cell vertical-align-middle padding-twelve-lr md-padding-15px-lr xs-text-center xs-padding-five-lr xs-padding-ten-top width-100">
                                <h4 class="font-weight-600 alt-font text-extra-dark-gray letter-spacing-minus-1">Profissional</h4>
                                <p class="text-extra-large alt-font font-weight-400">CRP 07/24616</p>
                                <p>Mestranda em Psicologia/UCS. Especialista em Terapia Cognitivo Comportamental pela Capacitar/UNIFIA (2017). Graduada em Psicologia pela FSG - Faculdade da Serra Gaúcha (2014). Ênfase em Psicologia Organizacional e do Trabalho. Atualmente atua como Psicóloga Organizacional e Clínica.</p>
                                <a href="about-us-modern.html" class="btn btn-small btn-dark-gray">+ Informações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="border-none no-padding wow fadeIn faq" style="visibility: visible; animation-name: fadeIn;">
                <div class="container-fluid">
                    <div class="row equalize sm-equalize-auto">
                        <div class="col-md-12 col-sm-12 col-xs-12 display-table wow fadeIn" style="visibility: visible; animation-name: fadeIn; height: 668px;">
                            <div class="display-table-cell-vertical-middle padding-thirteen-lr padding-nine-tb md-padding-ten-all sm-padding-six-all xs-padding-50px-tb xs-no-padding-lr">
                                <h5 class="alt-font text-extra-dark-gray text-center margin-eight-bottom font-weight-600"><span class="font-weight-300 display-block xs-margin-three-bottom">Alguma dúvida?</span> Será um prazer esclarecê-la</h5>
                                <div class="panel-group accordion-style1" id="accordion-design">
                                    <!-- start accordion item -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion-design" href="#design1" class="collapsed" aria-expanded="false">
                                                <div class="panel-title font-weight-500 text-uppercase">Quem precisa fazer Terapia Cognitivo Comportamental?<span class="pull-right"><i class="ti-plus"></i></span></div>
                                            </a>
                                        </div>
                                        <div id="design1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                Todos podem fazer a Terapia Cognitivo Comportamental: homens, mulheres, crianças, adultos, idosos, pessoas com algum transtorno mental ou que estão passando por qualquer tipo de conflito interno. Entretanto, a TCC é altamente recomendada principalmente em casos de depressão, transtornos de ansiedade, transtorno obsessivo compulsivo, síndrome do pânico, fobia social e outras situações que possuem como base fundamental os comportamentos, pensamentos e emoções da pessoa com relação à vida.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                    <!-- start accordion item -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion-design" href="#design2" class="collapsed" aria-expanded="false">
                                                <div class="panel-title font-weight-500  text-uppercase">Quais benefícios da Psicologia Organizacional?<span class="pull-right"><i class="ti-plus"></i></span></div>
                                            </a>
                                        </div>
                                        <div id="design2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <ul class="">
                                                    <li>Trabalhadores saudáveis fisicamente e psicologicamente</li>
                                                    <li>Aumento da satisfação no trabalho</li>
                                                    <li>Maior comprometimento organizacional</li>
                                                    <li>Aumento da produtividade</li>
                                                    <li>Redução do turnover\absenteísmo</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                    <!-- start accordion item -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion-design" href="#design3" class="collapsed" aria-expanded="false">
                                                <div class="panel-title font-weight-500  text-uppercase">Quais os tipos de avaliação psicológica?<span class="pull-right"><i class="ti-plus"></i></span></div>
                                            </a>
                                        </div>
                                        <div id="design3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <ul class="">
                                                    <li>Avaliação da Personalidade</li>
                                                    <li>Hiperatividade e Déficit de Atenção</li>
                                                    <li>Avaliação da Atenção</li>
                                                    <li>Seleção e promoção de Pessoal</li>
                                                    <li>Orientação Vocacional</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end accordion item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php if (isset($posts) && !empty($posts)) { ?>
                <section id="blog" class="wow fadeIn hover-option4 blog-post-style3 bg-light-gray" style="visibility: visible; animation-name: fadeIn;">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Informação na sua mão</div>
                                <h5 class="alt-font text-extra-dark-gray font-weight-700 text-uppercase">Últimos Posts</h5>
                            </div>
                        </div>
                        <div class="row equalize xs-equalize-auto padding-six-lr">
                            <?php foreach ($posts as $post) { ?>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 wow fadeInUp sm-padding-30px-bottom xs-text-center" style="visibility: visible; animation-name: fadeInUp; height: 500px;">
                                    <div class="blog-post bg-light-gray inner-match-height">
                                        <!-- <div class="blog-post-images overflow-hidden position-relative">
                                        <a href="https://www.themezaa.com/html/pofo/blog-masonry.html" target="_blank">
                                            <img src="assets/images/backgrounds/header1.jpg" alt="" data-no-retina="">
                                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                        </a>
                                    </div> -->
                                        <div class="post-details padding-40px-all sm-padding-20px-all">
                                            <a href="<?= 'blog/post.php?id=' . $post['id']; ?>" target="_blank" class="alt-font post-title text-medium text-extra-dark-gray width-90 display-block md-width-100 margin-5px-bottom">
                                                <?= Post::limita_caracteres($post['titulo'], 30); ?>
                                            </a>
                                            <p>
                                                <?= Post::limita_caracteres(strip_tags($post['corpo']), 100); ?>
                                            </p>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb sm-margin-15px-tb"></div>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small display-inline-block sm-display-block sm-margin-10px-top">por
                                                    <a href="https://www.themezaa.com/html/pofo/blog-masonry.html" target="_blank" class="text-medium-gray"><?= $post['autor']; ?></a>
                                                    &nbsp;&nbsp;|&nbsp;&nbsp;
                                                    <?php
                                                    $data_formatada = new DateTime($post['data']);
                                                    echo $data_formatada->format('d.m.Y');
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <section id="contato" class="wow fadeIn border-bottom border-color-extra-light-gray" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="row sm-col-2-nth">
                        <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-50px-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                            <i class="icon-map-pin icon-medium margin-25px-bottom xs-margin-10px-bottom"></i>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Venha nos visitar</div>
                            <p class="width-70 md-width-85 sm-width-50 xs-width-60 xs-margin-10px-bottom center-col">Rua Júlio de Castilhos, 734 <br> Centro - Farroupilha / RS</p>
                            <a href="https://www.google.com/maps/place/Psic%C3%B3loga+Morgana+Buratti/@-29.2297767,-51.3450981,15z/data=!4m5!3m4!1s0x0:0x2f986111f542d709!8m2!3d-29.2297767!4d-51.3450981" class="margin-15px-top text-decoration-line-through-deep-pink display-inline-block text-uppercase text-chocolate text-small xs-no-margin-top" target="_blank">Visualizar</a>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-50px-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <i class="icon-chat icon-medium margin-25px-bottom xs-margin-10px-bottom"></i>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Contatos</div>
                            <p class="width-70 md-width-85 sm-width-50 xs-width-60 xs-margin-10px-bottom center-col"><a href="https://api.whatsapp.com/send?l=pt_BR&phone=54996732039" target="_blank">Whatsapp: (54) 99673.2039</a> <br> <a href="tel:54996732039"> Telefone: (54) 99673-2039 </a> </p>
                            <a href="tel:54996732039" class="margin-15px-top text-decoration-line-through-deep-pink display-inline-block text-uppercase text-chocolate text-small xs-no-margin-top">Ligar</a>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <i class="icon-envelope icon-medium margin-25px-bottom xs-margin-10px-bottom"></i>
                            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Emails</div>
                            <p class="width-70 md-width-85 sm-width-50 xs-width-60 xs-margin-10px-bottom center-col"><a href="mailto:selecao@morganaburatti.com.br">selecao@morganaburatti.com.br</a><br><a href="vagas@morganaburatti.com.br">vagas@morganaburatti.com.br</a></p>
                            <a href="mailto:vagas@morganaburatti.com.br" class="margin-15px-top text-decoration-line-through-deep-pink display-inline-block text-uppercase text-chocolate text-small xs-no-margin-top">Escrever</a>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </section>

            <footer class="footer-center-logo bg-light-gray padding-five-tb xs-padding-30px-tb">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <!-- start copyright -->
                        <div class="col-md-4 col-sm-5 col-xs-12 text-small text-center alt-font display-table xs-text-center xs-margin-15px-bottom">
                            <div class="display-table-cell vertical-align-middle">
                                &COPY; 2019 Morgana Buratti
                            </div>
                        </div>
                        <!-- end copyright -->
                        <!-- start logo -->
                        <div class="col-md-4 col-sm-2 col-xs-12 text-center display-table xs-margin-10px-bottom">
                            <div class="display-table-cell vertical-align-middle">
                                <a href="./"><img class="footer-logo" src="assets/images/logos/logo.png" alt="Morgana Buratti" style="min-height: 35px"></a>
                            </div>
                        </div>
                        <!-- end logo -->
                        <!-- start social media -->
                        <div class="col-md-4 col-sm-5 col-xs-12 text-center display-table xs-text-center">
                            <div class="display-table-cell vertical-align-middle">
                                <!-- <span class="alt-font text-small margin-20px-right">Mídias sociais</span> -->
                                <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                    <ul class="small-icon no-margin-bottom">
                                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a class="linkedin" href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="instagram" href="https://instagram.com/" target="_blank"><i class="fa fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </footer>

        </div>
        
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    </div>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
    <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/bootsnav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/page-scroll.js"></script>
    <script type="text/javascript" src="assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.count-to.js"></script>
    <script type="text/javascript" src="assets/js/jquery.stellar.js"></script>
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/classie.js"></script>
    <script type="text/javascript" src="assets/js/hamburger-menu.js"></script>
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/js/equalize.min.js"></script>
    <script type="text/javascript" src="assets/js/skill.bars.jquery.js"></script>
    <script type="text/javascript" src="assets/js/justified-gallery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="assets/js/instafeed.min.js"></script>
    <script type="text/javascript" src="assets/js/retina.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>

    <script>
        var menu = $('.sidenav-header');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                menu.addClass('colorful');
            } else {
                menu.removeClass('colorful');
            }
        });
    </script>
</body>

</html>