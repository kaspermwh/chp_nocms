<?php include 'header.php';?>
  
        <!-- Cases.php -->
        <?php include 'bin/cases.php';?>
   
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                Referencer
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[0][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[0][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[0][0]; ?></h3>
                <h4><?php echo $cases[0][1]; ?></h4>
                <p><?php echo $cases[0][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[0][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[1][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[1][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[1][0]; ?></h3>
                <h4><?php echo $cases[1][1]; ?></h4>
                <p><?php echo $cases[1][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[1][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[2][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[2][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[2][0]; ?></h3>
                <h4><?php echo $cases[2][1]; ?></h4>
                <p><?php echo $cases[2][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[2][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[0][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[0][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[0][0]; ?></h3>
                <h4><?php echo $cases[0][1]; ?></h4>
                <p><?php echo $cases[0][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[0][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[1][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[1][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[1][0]; ?></h3>
                <h4><?php echo $cases[1][1]; ?></h4>
                <p><?php echo $cases[1][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[1][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        
        <!-- Project Six -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?php echo $cases[2][3]; ?>">
                    <img class="img-responsive img-hover" src="<?php echo $cases[2][4]; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $cases[2][0]; ?></h3>
                <h4><?php echo $cases[2][1]; ?></h4>
                <p><?php echo $cases[2][2]; ?></p>
                <a class="btn btn-primary" href="<?php echo $cases[2][3]; ?>">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

<?php include 'footer.php';?>