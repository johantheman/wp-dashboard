<?php
error_reporting(E_ALL ^ E_WARNING);
include 'assets\php\connection.php';
include 'assets\php\functions.php';



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Grapevine Reporting Services</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                    DStv Dashboard
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="active">
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>


                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fa fa-table"></i>
                            </a>
                        </li>
                        <li >
                            <a href="table.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret"></b>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="notifications.php">Notification 1</a></li>
                                <li><a href="notifications.php">Notification 2</a></li>
                                <li><a href="notifications.php">Notification 3</a></li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                Account
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Contact Us
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#myModal" data-toggle="modal">Support Services</a></li>
                                <li><a href="#myModal" data-toggle="modal">Account Manager</a></li>
                                <li><a href="#myModal" data-toggle="modal">Reporting Services</a></li>
                                <li class="divider"></li>
                                <li><a href="#myModal" data-toggle="modal">Contact Information</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mail Selector</h4>
                                <p class="category">Last 30 days email stats</p>
                            </div>
                            <div class="content " style="padding: 30px">
                                <form action="table.php" method="POST" role="form" class="form-horizontal">



                                    <div class="form-group" >

                                        <select name="mail" class="form-control" id="sel1">
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "1"){echo 'selected="selected"';}}?> value="1">Premium - 1</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "2"){echo 'selected="selected"';}}?> value="2">Premium - 2</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "3"){echo 'selected="selected"';}}?> value="3">Premium - 3</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "4"){echo 'selected="selected"';}}?> value="4" >Premium - 4</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "5"){echo 'selected="selected"';}}?> value="5">Premium - 5</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "6"){echo 'selected="selected"';}}?> value="6">Premium - 6</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "7"){echo 'selected="selected"';}}?> value="7">Premium - 7</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "8"){echo 'selected="selected"';}}?> value="8">Premium - 8</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "9"){echo 'selected="selected"';}}?> value="9">Premium - 9</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "10"){echo 'selected="selected"';}}?> value="10">Premium - 10</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "11"){echo 'selected="selected"';}}?> value="11">Premium - 11</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "12"){echo 'selected="selected"';}}?> value="12">Compact - 1</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "13"){echo 'selected="selected"';}}?> value="13">Compact - 2</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "14"){echo 'selected="selected"';}}?> value="14">Compact - 3</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "15"){echo 'selected="selected"';}}?> value="15">Compact - 4</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "16"){echo 'selected="selected"';}}?> value="16">Compact - 5</option>
                                            <option <?php if(isset($_POST['mail'])){if($_POST['mail'] == "17"){echo 'selected="selected"';}}?> value="17">Compact - 6</option>
                                        </select><br>
                                        <br>

                                        <p align="center"> <button type="submit" class="btn btn-primary btn-large">Run Report</button></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <?php

            //creating the mailer views

            if(isset($_POST['mail'])){
                $select1 = $_POST['mail'];
                switch ($select1){
                    case "1":
                        display_row_premium(1);
                        break;
                    case "2":
                        display_row_premium(2);
                        break;
                    case "3":
                        display_row_premium(3);
                        break;
                    case "4":
                        display_row_premium(4);
                        break;
                    case "5":
                        display_row_premium(5);
                        break;
                    case "6":
                        display_row_premium(6);
                        break;
                    case "7":
                        display_row_premium(7);
                        break;
                    case "8":
                        display_row_premium(8);
                        break;
                    case "9":
                        display_row_premium(9);
                        break;
                    case "10":
                        display_row_premium(10);
                        break;
                    case "11":
                        display_row_premium(11);
                        break;
                    case "12":
                        display_row_compact(1);
                        break;
                    case "13":
                        display_row_compact(2);
                        break;
                    case "14":
                        display_row_compact(3);
                        break;
                    case "15":
                        display_row_compact(4);
                        break;
                    case "16":
                        display_row_compact(5);
                        break;
                    case "17":
                        display_row_compact(6);
                        break;

                    default:
                        display_row_premium(7);
                        break;
                }

            }


            ?>
</div></div>

            <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.grapevinegroup.co.za">Johan Erasmus</a>, web development
                </p>
            </div>
        </footer>


    </div>
</div>

<!--modal begins here-->
<div class="modal fade slide left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                <h3 class="modal-title" id="myModalLabel">We would love to hear from you</h3>

            </div>
            <div class="modal-body">
                <!--<p class="lead">Please get in touch!</p>-->
                <form method="post" id="myForm">
                    <div class="form-group">
                        <label for="name">Your name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Your email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required/>
                    </div>
                    <div class="form-group">
                        <label for="comment">Your comment:</label>
                        <textarea class="form-control" id="comment" name="comment" required></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="Forward">
                </form>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Form</button>-->
            </div>
        </div>
    </div>
</div>
<!--end modal-->

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>



</html>
