<!DOCTYPE html>
<html lang='en' data-ng-app="">
    <!-- header of the page-->
     <head> 
        <title>Template Page</title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <!-- Bootstrap --> 
        <link href="css/bootstrap.min.css" rel="stylesheet" />  
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 
        elements and media queries --> 
        <!-- WARNING: Respond.js doesn't work if you view the 
        page via file:// --> 
        <!--[if lt IE 9]> 
            <script src="js/html5shiv.js"></script> 
            <script src="js/respond.min.js"></script> 
        <![endif]--> 
        <link type="text/css" href="css/style.css" rel="stylesheet"/>
    </head> 
    
    <body>
        
        
        <!-- row 1: for navigation bar-->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- navigation bar code-->
                    <?php require_once "navBar.php" ?>
                </div>
            </div>
        </div>
        
        <!-- content-->
        <div class="row pushNav">
            <div class="container">
            <div class="col-md-12">
                <h1 class="text-center">About Us</h1>
                <hr>
                <!-- description -->
                 <div class="row">
                    <div class="col-md-12" id="aboutus">
                        <p>FarmtoHome is a first web application created to connect customers directly with farmers. FarmtoHome offers higher profit to farmers who decides to join and also flexible groceries shopping for the customers. All orders made will be delivered within 2 days by our special delivery couriers from the farmer to the customers' door. All groceries are ensured to be fresh and safe as well as well-packed before it is delivered to the customer.</p> 
                    </div>
                </div>
                <!-- Mission -->
                <br />
                <div class="row">
                    <div class="col-md-12" id="mission">
                        <h3 class="text-center" style="font-weight:bold">Our Mission</h3>
                        <p>Our mission is to provide better groceries shopping and selling methods between the farmers and the customers by utilizing the existing technology.</p> 
                    </div>
                </div>
                <!-- Meet the team -->
                <div class="row">
                    <h3 class="text-center" style="font-weight:bold">Meet The Team</h3>
                    <div class="col-md-4 text-center team">
                        <img src="image/guy.png" class="img-circle" alt="Felix" width="200px" height="200px"/>
                        <h3>Felix Vincent<br/><small>Founder</small></h3>
                        <p>Description</p>
                    </div>
                    <div class="col-md-4 text-center team">
                        <img src="image/girl.png" class="img-circle" alt="Felix" width="200px" height="200px"/>
                        <h3>Felicia Andayani<br/><small>Founder</small></h3>
                        <p>Description</p>
                    </div>
                    <div class="col-md-4 text-center team">
                        <img src="image/guy.png" class="img-circle" alt="Felix" width="200px" height="200px"/>
                        <h3>Lee Sing Hong<br/><small>Founder</small></h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        
        <!--footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <h1>About us</h1>
                        <a href="#">Click here to know more about our company</a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h1>Company contact number</h1>
                        <a href="tel:+0123456789">+0123456789</a>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h1>company email</h1>
                        <a href="mailto:abcdefg@mail.com">abcdefg@mail.com</a>
                    </div>        
                </div>
            </div>
        </footer>
        
        <!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
        <script src="js/jquery.min.js"></script> 
        <!-- All Bootstrap  plug-ins  file --> 
        <script src="js/bootstrap.min.js"></script> 
        <!-- Basic AngularJS -->
        <script src="js/angular.min.js"></script>
    </body>
</html>