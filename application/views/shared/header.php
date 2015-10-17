<html>
    <head>
        <title>Something to Write</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <?= link_tag('lib/css/style.css'); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <?= link_tag('lib/js/scripts.js');?>
    </head>
    <body class="main-body">
    <nav class="navbar navbar-default navbar-fixed-top">
        <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand name" href="/"><?= img('lib/images/logo.png') ?> <span>STW</span> <i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                <ul class="nav navbar-nav">
                    <li><a href="#">Apps</a></li>
                    <li><a href="#">Gear</a></li>
                    <li><a href="#">Tech</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Money</a></li>
                    <li><a href="#">Insights</a></li>
                    <li><a href="#">Launch</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Distract</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>