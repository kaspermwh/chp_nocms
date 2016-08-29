<?php include 'header.php';?>
  
        <!-- Cases.php -->
        <?php include 'bin/cases.php';?>
        
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('pics/slider/skibet2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Skibet i Herlev</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('pics/slider/koralvej.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Ombygning Koralvej 4</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('pics/slider/strandvej.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Strandvejen Villa, Vejle</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Velkommen til CHP Consult ApS
                </h1>
            </div>
        </div>
        <!-- /.row -->

       
       <!-- Features Section -->
        <div class="row">
            <div class="col-md-8">
                <p>CHP Consult ApS er et rådgivende ingeniørfirma, beliggende i Vejle og Århus. Firmaet blev etableret i 2010 af civilingeniør Carsten Højer Pedersen og i 2011 indtrådte ingeniør Peter Møller Hansen som medejer af firmaet.</p>
                <p>Firmaets primære opgaver består i projektering af nybyggeri og ombygningssager dvs. konstruktioner, vvs, kloak, ventilation og el.</p>
                <p>CHP Consult ApS samarbejder med el-ingeniørfirmaet Dohn ApS. Se www.dohn.biz.</p>
                <p>Civilingeniør Carsten Højer Pedersen er 60 år og har i perioden 2000-2010 været selvstændig og indehaver af firmaet Teknikergruppen ApS. Carstens kompetenceområder er konstruktioner, autocad og energiberegninger (BE10).</p>
                <p>Peter Møller Hansen er 45 år og har i 16 år arbejdet med såvel nybyggeri som ombygningssager. Peters kompetenceområder er autocad og installationer, herunder vvs, ventilation, kloak.</p>
                <p>Derudover er civilingeniør Rasmus Andersen tilknyttet på deltid og hjælper med projektering af konstruktioner.</p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="pics/chp_consult_welcome.png">
            </div>
        </div>
        <!-- /.row -->
        
        
        <!-- Reference Gallery -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Reference Galleri</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[0][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[0][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[1][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[1][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[2][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[2][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[3][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[3][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[4][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[4][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo $cases[5][3]; ?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo $cases[5][4]; ?>" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Har du brug for at kontakte os, er du velkommen til at skrive til os.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact.php">Klik her for kontakt</a>
                </div>
            </div>
        </div>

        <hr>

<?php include 'footer.php';?>