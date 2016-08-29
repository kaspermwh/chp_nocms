<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CHP Consult ApS er et rådgivende ingeniørfirma, beliggende i Vejle og Århus. Firmaet blev etableret i 2010 af civilingeniør Carsten Højer Pedersen og i 2011 indtrådte ingeniør Peter Møller Hansen som medejer af firmaet.">
    <meta name="author" content="CHP Consult ApS">
    <meta name="keywords" content="rådgivende ingeniøre, chp, chp consult">

    <title>CHP Consult ApS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../../css/base.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cantarell:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php"><img class="logo" src="../../pics/chp_consult_logo.png">CHP Consult Aps</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../../about.php">Om os</a>
                    </li>
                    <li>
                        <a href="../../contact.php">Kontakt</a>
                    </li>
                    <li>
                        <a href="../../references.php">Referencer</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <!-- Cases.php -->
    <?php include '../../bin/cases.php';?>

   
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $cases[2][0]; ?>
                    <small><?php echo $cases[2][1]; ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="../../<?php echo $cases[2][4]; ?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../../<?php echo $cases[2][5]; ?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../../<?php echo $cases[2][6]; ?>" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3><?php echo $cases[2][0]; ?></h3>
                <p><?php echo $cases[2][2]; ?></p>
                <ul>
                    <li>Bygherre: Ida Engbirk</li>
                    <li>Konsulent(er): Carsten Højer Pedersen, Peter Møller Hansen</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Seneste Projekter</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="../../<?php echo $cases[0][3]; ?>">
                    <img class="img-responsive img-hover img-related" src="../../<?php echo $cases[0][4]; ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="../../<?php echo $cases[1][3]; ?>">
                    <img class="img-responsive img-hover img-related" src="../../<?php echo $cases[1][4]; ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="../../<?php echo $cases[2][3]; ?>">
                    <img class="img-responsive img-hover img-related" src="../../<?php echo $cases[2][4]; ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="../../<?php echo $cases[3][3]; ?>">
                    <img class="img-responsive img-hover img-related" src="../../<?php echo $cases[3][4]; ?>" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CHP Consult Aps 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
    
    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>