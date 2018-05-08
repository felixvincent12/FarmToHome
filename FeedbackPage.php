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
        
        <!-- Thank You Note Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title" style="text-align: center;">Thank You Note</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h4 style="text-align: center;">Thank You for Your Feedback!</h4>
                        <img src="image/SmileFace.png" style="width: 100px; height: 100px; display: block; margin-left: auto; margin-right: auto;"/>
                    </div>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default">Close</button>
                </div>
            </div>
            </div>
        </div>
        
        <!-- content-->
        <div class="row pushNav">
            <div class="col-md-12">
            </div>
        </div>
<!--        BIG CONTAINER-->
        <div class="container" style="border: 2px solid grey; border-radius: 10px; box-shadow: 5px 10px; padding: 25px;">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size: 2em;">Feedback</p>
                </div>
            </div>
<!--            SUB CONTAINER-->
            <div class="row" style="margin: 10px 5px 5px 5px; padding: 10px; border: 1px solid grey; border-radius: 10px; background-color: aliceblue;">
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Rate our Website:</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Comments:</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                            <span class="strRate">
                                <input id="rating5" type="radio" name="rating" value="5">
                                <label for="rating5">5</label>
                                <input id="rating4" type="radio" name="rating" value="4">
                                <label for="rating4">4</label>
                                <input id="rating3" type="radio" name="rating" value="3" checked>
                                <label for="rating3">3</label>
                                <input id="rating2" type="radio" name="rating" value="2">
                                <label for="rating2">2</label>
                                <input id="rating1" type="radio" name="rating" value="1">
                                <label for="rating1">1</label>
                            </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea rows="10" cols="50" placeholder="Please write your comments, problems and suggestions here..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success" style="float: right;  " data-toggle="modal" data-target="#myModal">Submit</button>
                            <a href="index.php" class="btn btn-default" style="float: right; margin-right: 6px;">Go back</a>
                            
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