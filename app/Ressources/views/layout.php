<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP5</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable = yes">

    <link rel="stylesheet" href="web/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/styles.css">
</head>
<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <div class="row-fluid">
        <header class="container-fluid">
            <div id="logo" class="pull-left"><img src="web/img/logo.png" alt="Logo"></div>

            <div class="subNav pull-right">
                <ul class="nav nav-pills">
                    <li><a href=""><span>Bonjour Khalid</span></a></li>
                    <li class=""><a href="?bundle=authentification&action=disconnect" class="btn btn-danger">Logout</a></li>

                    <li class="active"><a href="?bundle=authentification&action=login" class="btn btn-primary">Login</a></li>
                </ul>
            </div>
        </header>
    </div>

    <div class="row-fluid">
        <div class="container">
            <?php require_once 'src/Authentification/Ressources/views/authentification/login.php'; ?>
        </div>
    </div>



    <!-- Js section -->
    <!-- <script src="js/dist/all.js"></script> -->

    <!-- The following js is just for dev and needs to be removed when in prod. -->
    <script src="web/js/jquery.min.js"></script>
    <script src="web/js/bootstrap.min.js"></script>
    <!-- <script src=""></script> -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        // e.src='//www.google-analytics.com/analytics.js';
        // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        // ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>