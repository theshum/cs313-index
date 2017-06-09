<?php
    session_start();
    require("connectdb.php");

    $db = get_db();
    $userLogged = $_SESSION['username'];
    if(empty($userLogged)) {
        header('location:'.'signin.php');
        die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Project</title>
          <!-- http://getbootstrap.com/getting-started/ - Latest compiled and minified CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- main css file -->
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <!-- jquery js file...needed for some boostrap functions -->
        <script src="js/jquery-3.2.1.min.js"></script> 
        <!-- http://getbootstrap.com/getting-started/ - Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body> 
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Adam Shumway</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="project.php">Project Milestone 1</a></li>
            <!--        <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>-->
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assignments <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="shopping.php">Prove03 - Shopping Cart</a></li>
                        <li><a href="w5-db.php">Prove05 - Data Access</a></li>
                        <li><a href="w6-db.php">Prove06 - Data Modification</a></li>
                    <!-- <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>-->
                        <li><a href="assignments.html">All Assigments</a></li>
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container" id="project">
            <div class="row">
                <h1>Camp Registration</h1>
                <h3>********* WELCOME <?php echo $userLogged;?> *********</h3>
                <hr>
                <form class="form horizonal" action="camper-search.php" method="post">
                    <div class="form-group row">
                        <div class="form-group col-sm-12 col-sm-offset-2">
                            <label class="control-label col-sm-2" for="search">Search Camper</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="search">
                            </div>
                            <div class="col-sm-2">
                                <input class="btn btn-primary" type="submit" value="Search">
                            </div>
                        </div>
                    </div>
                    <!--<div class="form-group col-sm-offset-3">
                        
                    </div>-->
                </form>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </body>
</html>