<!DOCTYPE html>
<html lang='en' data-ng-app="">
    <!-- header of the page-->
     <head> 
        <title>Home Page</title> 
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
        
        <!-- row 2: for jumbotron -->
        <div class="row">
            <div class="jumbotron col-md-12">
                <div class="container">
                    <h1 class="jumbo"><br/>
                        Welcome to Farm2Home!<br/>
                        <small class="jumbo">come here and find what you want!</small>
                    </h1>
                </div>
            </div>              
        </div>
        
        <!--row 3: showing the top seller-->
        

        
        
        <!--row4: footer-->
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