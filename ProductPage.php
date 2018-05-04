<!DOCTYPE html>
<html lang='en' data-ng-app="">
    <!-- header of the page-->
     <head> 
        <title>Product Page</title> 
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
        <!--modal for login -->
        <div class="modal fade" id="loginModal" role="dialog" tabindex="-1" aria-labelledby="loginModal1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--modal header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h1 class="modal-title" id="loginModal1">Login</h1>
                    </div>
                    
                    <!-- modal body-->
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                            </div>
                            
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!--modal for more detial of product-->
        <div class="modal fade" id="productModal" role="dialog" tabindex="-1" aria-labelledby="productModal1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <!-- modal body-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src=""/>
                            </div>
                            <div class="col-md-9">
                                <h1>{{productName}}</h1>
                                <p>Description:<span>{{description}</span></p>
                                <p>Unit:<span>{{unit}}</span></p>
                                <p>Price:RM<span>{{price}}/{{unit}}</span></p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="productPageModalQuantity">Quantity</label>
                                    <select id="productPageModalQuantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-md-offset-5">
                                    <button type="submit" class="btn btn-default">Add to Cart</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- row 1: for navigation bar-->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- navigation bar code-->
                     <?php require_once "navBar.php" ?>
                </div>
            </div>
        </div>
        
        <!--row 2: for content: product -->
        <div class="row pushNav">
            <div class="col-md-12">
                
                <!-- use for filter-->
                <div class="row">
                    <div class="col-md-12">
                        <label for="productFilter">Filter:</label>
                        <select name="productFilter">
                            <option data-ng-repeat="type in products">{{type}}</option>
                        </select>
                    </div>
                </div>
                
                <!--show product-->
                <button class="btn btn-primary" data-toggle="modal" data-target="#productModal">More</button>
                
                
            </div>
        </div>
        
        
        
        <!--row 3: footer-->
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