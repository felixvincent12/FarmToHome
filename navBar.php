<?php
        echo '<div data-ng-init="login=false"></div>';

        session_start();
        if ($_SESSION['login_user'] != "" && $_SESSION['role'] != ""){
            echo '<div data-ng-model="login = true"></div>';
        }
    
        else{
            echo'<div data-ng-model = "login = false"></div>';
        }
    ?>

<!--modal for login -->
    <?php require_once "loginModal.php" ?>




<!-- navigation bar code-->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-collapse" role="navigation">
                        
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
                        <li><a href="aboutUs.php">About Us</a></li>
                        <li><a href="FeedbackPage.php">Give Feedback</a></li>
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
                 <a type="submit" class="btn btn-success" href="ShoppingCart.php">
                       <span class="glyphicon glyphicon-shopping-cart "></span> Cart Items
                  </a>
                  <button class="btn btn-primary navBtn" data-toggle="modal" data-target="#loginModal" data-ng-show="login == false">
                    Login
                  </button>
<!--
                  <a class="btn btn-primary navBtn" href="UserProfilePage.php" data-ng-show="login == true">
                    User
                </a>
-->
                   <a class="btn btn-primary navBtn dropdown-toggle" data-toggle="dropdown" data-ng-show="login == true">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="caret"></span>
                   </a>
                
                   <ul class="dropdown-menu">
                        <li><a href="#">User Profile</a></li>
                        <li><a href="#">Purchase History</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                       
                    
             </div>
           </div>
     </nav>



