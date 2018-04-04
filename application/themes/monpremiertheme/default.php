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
        
        <!-- Content -->
        <?php
            $a = new Area('Contenu');
            $a->display($c);
        ?>

        <!-- Footer -->
        <?php include('elements/footer.php') ?>
        
    </div>
    
    <script type='text/javascript' src='<?= $view->getThemePath() ?>/styles/vendor/bootstrap.min.js'></script>
    
    <?php Loader::element('footer_required'); ?>
</body>
</html>
