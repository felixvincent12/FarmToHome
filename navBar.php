 <!-- navigation bar code-->
                     <nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse" role="navigation" data-ng-init="login=false">
                        
                        <!-- for title-->
                        <div class="navbar-header col-md-1" >
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="image/logo.png" width="40"/></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <div class="col-md-8">
                            
                                

                                <!-- list of navigation -->
                                <div class="">
                                    <ul class="nav navbar-nav">
                                        <li><a href="ProductPage.php">Product</a></li>
                                        <li><a href="ProductManagementPage.php">Sell Product</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Give Feedback</a></li>
                                        <li data-ng-show="login == false"><a href="SignUpPage.php">Register</a></li>
                                    </ul>
                                </div>
                                
                                <!-- search bar -->
                                <form class="navbar-form" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Product">
                                    </div>
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span> Search
                                    </button>
                                </form>
                                
                                
                            </div>
                        
                            <!-- for login button and shopping cart-->
                            <div class="col-md-3 pull-right text-right navBtnBar">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-shopping-cart "></span> Cart Items
                                </button>
                                <button class="btn btn-primary navBtn" data-toggle="modal" data-target="#loginModal" data-ng-show="login == false">
                                    Login
                                </button>
                                <a class="btn btn-primary navBtn" href="UserProfilePage.php" data-ng-show="login == false">
                                    User
                                </a>
                            </div>
                         </div>
                    </nav>