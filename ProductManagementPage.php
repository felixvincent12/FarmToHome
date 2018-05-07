<!DOCTYPE html>
<html lang='en' data-ng-app="">
    <!-- header of the page-->
     <head> 
        <title>Sell Product Page</title> 
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
        
         <!--modal for edit product -->
        <div class="modal fade" id="editProduct" role="dialog" aria-labelledby="loginModal1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--modal header-->
                    <div class="modal-header">
                        <h1 class="modal-title" id="loginModal1">Edit</h1>
                    </div>
                    
                    <!-- modal body-->
                    <div class="modal-body">
                        <form role="form">
                            
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="file" name="productPicture" accept="image/*">
                                </div>
                                <div class="col-md-10">
                                    <label for="pName">Product Name: <input type="text" id="pName"></label><br/>
                                    <label for="pDesc">Description: <input type="text" id="pDesc"></label><br/>
                                    <label for="pUnit">Unit: 
                                        <select>
                                            <option value="kg">kilo-gram</option>
                                            <option value="gram">gram</option>
                                        </select>
                                    </label><br/>
                                    <label for="pPrice">Price: <input type="text" id="pPrice"></label><br/>
                                    <label for="pQuantity">Quantity: <input type="text" id="pQuantity"></label>
                                </div>
                            </div>
                           
                            
                           
                            
                            <button type="button" class="btn btn-danger editProductBtnGrp" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </form>
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
        
        <!-- content-->
        <div class="container pushNav">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-11 col-md-1">
                            <a class="btn btn-primary" href="UploadProduct.php">Add Product</a>
                        </div>
                    </div>
                    
<!--                    <div class="row" data-ng-repeat="product in products">-->
                        <div class="row productManagementRow">
                            <div class="col-md-2">
                                <img src="image/logo.png"/>
                            </div>
                            <div class="col-md-9">
                                <h1>{{productName}}</h1>
                                <p>Description: {{description}}</p>
                                <p>Unit: {{unit}}</p>
                                <p>Price: RM{{price}} / {{unit}}</p>
                                <p>Quantity Left: {{quantity}}</p>
                            </div>
                            <div class="col-md-1 editProductBtnGroup">
                                <button class="btn btn-danger editProductBtn">Remove</button>
                                <button class="btn btn-success editProductBtn" data-toggle="modal" data-target="#editProduct">Edit</button>
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