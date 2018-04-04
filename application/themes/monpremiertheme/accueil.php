<!DOCTYPE html>
<html lang='en'>
<head>
    <?php Loader::element('header_required'); ?>
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    
    <!-- Jquery -->
    <script type='text/javascript' src='<?= $view->getThemePath() ?>/scripts/jquery-3.2.1.min.js'></script>
    
    <!-- Bootstrap -->
	<link rel='stylesheet' type='text/css' href='<?= $view->getThemePath() ?>/styles/vendor/bootstrap.min.css'>
	<!--<link rel='stylesheet' type='text/css' href='styles/vendor/bootstrap-theme.min.css'>-->
    
    <!-- Style -->
    <link rel='stylesheet' type='text/css' href='<?= $view->getThemePath() ?>/styles/style.css'>
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">
        
        <!-- Header -->
        <?php include('elements/header.php') ?>

        <!-- Carousel -->
        <div id='mainCarousel' class='carousel slide' data-ride='carousel' data-interval=false>
            <div class='carousel-inner'>
                <div class='item active'>
                    <img class='d-block w-100' src='<?= $view->getThemePath() ?>/images/slide-1.jpg' alt='First slide'>
                    <div class='carousel-caption col-md-5 col-md-offset-3'>
                        <?php
                            $a = new Area('slide description');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class='item'>
                    <img class='d-block w-100' src='<?= $view->getThemePath() ?>/images/slide-2.jpg' alt='Second slide'>
                    <div class='carousel-caption col-md-5 col-md-offset-3'>
                        <?php
                            $a = new Area('slide N°2 description');
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
            <a class='left carousel-control' href='#mainCarousel' role='button' data-slide='prev'>
                <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='right carousel-control' href='#mainCarousel' role='button' data-slide='next'>
                <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>

        <!-- Content -->
        <div class='container main-content'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src='<?= $view->getThemePath() ?>/images/best-renovation.png' alt='Best Renovation'>
                        <div class="caption">
                            <?php
                                $a = new Area('item 1 text');
                                $a->display($c);
                            ?>
                            <p><a href="#" class="btn btn-link" role="button">See Details <i class='glyphicon glyphicon-arrow-right'></i></a></p>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src='<?= $view->getThemePath() ?>/images/chemical-research.png' alt='Chemical Reasearch'>
                        <div class="caption">
                            <?php
                                $a = new Area('item 2 text');
                                $a->display($c);
                            ?>
                            <p><a href="#" class="btn btn-link" role="button">See Details <i class='glyphicon glyphicon-arrow-right'></i></a></p>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <?php
                        $a = new Area('recent blog posts');
                        $a->display($c);
                    ?>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class='contact'>
            <div class='container'>
                <div class='row'>
                    <?php
                        $a = new Area('call to action text');
                        $a->display($c);
                    ?>
                </div>
            </div>
        </div>

        <!-- Works -->
        <div class='container works'>
            <div class='row'>
                <div class='col-md-12 center-col'>
                    <?php
                        $a = new Area('works title text');
                        $a->display($c);
                    ?>
                </div>
            </div>

            <div class='row'>
                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src='<?= $view->getThemePath() ?>/images/manufacturing-project.png' alt='Best Renovation'>
                        <div class="caption">
                            <?php
                                $a = new Area('work 1 text');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src='<?= $view->getThemePath() ?>/images/plantation-construction.png' alt='Chemical Reasearch'>
                        <div class="caption">
                            <?php
                                $a = new Area('work 2 text');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                </div>

                <div class='col-md-4'>
                    <div class='thumbnail'>
                        <img src='<?= $view->getThemePath() ?>/images/the-interior-design.png' alt='Chemical Reasearch'>
                        <div class="caption">
                            <?php
                                $a = new Area('work 3 text');
                                $a->display($c);
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row'>
                <div class='col-md-12 center-col'>
                    <p><a href="#" class="btn btn-link" role="button">View all works <i class='glyphicon glyphicon-arrow-right'></i></a></p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('elements/footer.php') ?>
        
    </div>
    
    <script type='text/javascript' src='<?= $view->getThemePath() ?>/styles/vendor/bootstrap.min.js'></script>
    
    <?php Loader::element('footer_required'); ?>
</body>
</html>
