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
        <script src="js/jquery.min.js"></script>
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
        <!-- Change Password Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title">Change Password</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Old Password</label>
                        <input class="form-control" placeholder="Old Password"/>
                        <br/>
                        <label>New Password</label>
                        <input class="form-control" placeholder="New Password"/>
                        <br/>
                        <label>Retype New Password</label>
                        <input class="form-control" placeholder="Retype New Password"/>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
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
                <div class="col-md-3">
                    <input type="file" id="imgupload" style="display:none;"><img src="image/AvatarIcon.png" onmouseover="hover(this);" onmouseout="unhover(this);" style="width:200px; height:200px; margin-left: 34px;" id="OpenImgUpload"/>
                    <script>
                        function hover(element) {
                            element.setAttribute('src', 'image/AddPictureIcon.png');
                        }

                        function unhover(element) {
                            element.setAttribute('src', 'image/AvatarIcon.png');
                        }
                        
                        $('#OpenImgUpload').click(function(){
                            $('#imgupload').trigger('click'); 
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    <p style="font-size: 3em;">User Profile Name</p>
                    <p>A user story is a tool used in Agile software development to capture a description of a software feature from an end-user perspective. The user story describes the type of user, what they want and why. A user story helps to create a simplified description of a requirement.</p>
                </div>
            </div>
<!--            SUB CONTAINER-->
            <div class="row" style="margin: 10px 5px 5px 5px; padding: 10px; border: 1px solid grey; border-radius: 10px; background-color: aliceblue;">
                <div class="row">
                    <div class="col-md-11" >
                        <h3>Personal Details</h3>
                    </div>                
                    <div class="col-md-1">
                        <button class="btn btn-success" style="margin-top: 15px;">Edit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Name</label>
                    </div>
                    <div class="col-md-10">
                    </div>
                </div>
                <br />
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Date of Birth</label>
                    </div>
                    <div class="col-md-10">
                    </div>
                </div>
                <br />
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Password</label>
                    </div>
                    <div class="col-md-10">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Change Password</button>
                    </div>
                </div>
                <br />
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Phone Number</label>
                    </div>
                    <div class="col-md-10">
                    </div>
                </div>
                <br />
                
                <div class="row">
                    <div class="col-md-2">
                        <label>Address</label>
                    </div>
                    <div class="col-md-10">
                    </div>
                </div>
                <br />
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