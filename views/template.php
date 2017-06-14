<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Site Padrão MVC</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Calendar -->
    <link href="<?php echo BASE_URL; ?>/assets/css/fullcalendar.min.css" rel="stylesheet" />
        
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/pt-br.js"></script>
    <!-- Definindo o a url Padrão do sistema -->
    <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>'</script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <a href="#">Serviços</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    

</body>

</html>
