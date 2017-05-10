<!DOCTYPE html>
<html>
<head>
    <title>Air Alert</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="MetaTitle goes here"/>
    <meta name="description" content="MetaDescription goes here"/>
    <meta name="keywords" content=" KeyWord goes here "/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="loading-overlay flex-property hidden-xs">
    <div>
        <img src="img/Loading1.png">
        <img src="img/logo.png" class="hidden">
    </div>
    <script>
        $(function(){
            setInterval(function(){
                $('.loading-overlay div img').toggleClass('hidden');
            }, 500);
        });
    </script>
</div>
<script>
    $(function(){
        $(window).load(function(){
            $('.loading-overlay').detach();
        });
    });
</script>
<header class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="img/logo.png">
            </div>
            <div class="col-sm-10 text-right">
                <ul class="list-inline">
                    <li>
                        <a href="https://act.airalert.in/about_us?utm_source=header&utm_medium=homepage&utm_campaign=air-alert" target="_blank">About</a>
                    </li>
                    <li>
                        <a href="https://act.airalert.in/media?utm_source=header&utm_medium=homepage&utm_campaign=air-alert" target="_blank">Media</a>
                    </li>
                    <li>
                        <a href="https://act.airalert.in/petition/new?utm_source=header&utm_medium=homepage&utm_campaign=air-alert&source=air-alert-hp-header" target="_blank">Start a Campaign</a>
                    </li>
                    <li>
                        <a href="https://act.airalert.in/users/sign_in?utm_source=header&utm_medium=homepage&utm_campaign=air-alert" target="_blank">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="mobile-menu navbar-default hidden-sm hidden-md hidden-lg">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/logo.png">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="https://act.airalert.in/about_us?utm_source=header&utm_medium=homepage-mobile&utm_campaign=air-alert" target="_blank">About</a>
                </li>
                <li>
                    <a href="https://act.airalert.in/media?utm_source=header&utm_medium=homepage-mobile&utm_campaign=air-alert" target="_blank">Media</a>
                </li>
                <li>
                    <a href="https://act.airalert.in/petition/new?utm_source=header&utm_medium=homepage-mobile&utm_campaign=air-alert&source=air-alert-hp-header" target="_blank">Start a Campaign</a>
                </li>
                <li>
                    <a href="https://act.airalert.in/users/sign_in?utm_source=header&utm_medium=homepage-mobile&utm_campaign=air-alert" target="_blank">Log In</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="mobile-overlay hidden hidden-sm hidden-lg hidden-md"></div>