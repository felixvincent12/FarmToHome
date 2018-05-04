<!DOCTYPE html>
<html lang="en">
    <!-- header of the page-->
     <head> 
        <title>Sign Up Page</title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" href="css/style.css" rel="stylesheet"/>
         <script src="js/jquery.min.js"></script>
        <script src="js/validation.js"></script>
    </head> 
    <body>
        <div class="container">
        <form name="sigUpForm" style="margin: 10px 80px 40px 80px;  border:1px solid grey; padding: inherit; border-radius: 10px; padding-bottom: 10px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="image/log.png"/ class="text-center">
                </div>
            </div>
            
            
            <h1>Sign Up</h1>
            <hr / >
            
            
            <div class="row">
                <div class="col-md-2">
                    <label>Name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="First" pattern="[a-zA-Z]" title="Letter only" name="fname" class="form-control" required>
                    <p id="vldfName" style="color: red;"></p>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Last" name="lname" class="form-control" required>
                    <p id="vldlName" style="color: red;"></p>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-2">
                <label for="email">Email</label>
                </div>
                <div class="col-md-9">
                    <input type="text" placeholder="Enter Email" name="email" class="form-control" required>
                    <p id="vldEmail" style="color: red;"></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label for="psw">Password</label>
                </div>
                <div class="col-md-9">
                    <input type="password" placeholder="Enter Password" name="pass" class="form-control" required>
                    <p id="vldPass" style="color: red;"></p>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-2">
                    <label for="psw-repeat">Confirm Password</label>
                </div>
                <div class="col-md-9">
                    <input type="password" placeholder="Repeat Password" name="pass-repeat" class="form-control" required>
                    <p id="vldCoPass" style="color: red;"></p>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-2">
                    <label>Date of Birth</label>
                </div>
                <div class="col-md-9">
                    <input type="date" class="form-control" name="dob" required>
                    <p id="vldDob" style="color: red;"></p>
                </div>
            </div>
            
        
            <div class="row">
                <div class="col-md-2">
                    <label><b>Address</b></label>
                </div>
                <div class="col-md-9">
                    <input type="text" placeholder="Street Address" class="form-control" name="address1" required>
                    <p id="vldAddress1" style="color: red;"></p>
                </div>
            </div>
            
            <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-9">
                    <input type="text" placeholder="Street Address 2" class="form-control" name="address2" />
                    <p></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label>City</label>
                </div>
                <div class="col-md-9">
                    <select class="form-control" name="city" required>
                        <option value="">Select City</option>
                        <option value="betong">Betong</option>
                        <option value="bintulu">Bintulu</option>
                        <option value="kapit">Kapit</option>
                        <option value="kuching">Kuching</option>
                        <option value="limbang">Limbang</option>
                        <option value="miri">Miri</option>
                        <option value="mukah">Mukah</option>
                        <option value="samarahan">Samarahan</option>
                        <option value="sarikei">Sarikei</option>
                        <option value="serian">Serian</option>
                        <option value="sibu">Sibu</option>
                        <option value="sriAman">Sri Aman</option>
                    </select>
                    <p id="vldCity" style="color: red;"></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label>Postal / Zip Code</label>
                </div>
                <div class="col-md-9">
                    <input type="number" placeholder="Postal / Zip Code" class="form-control" name="postalCode" required>
                    <p id="vldPosCode" style="color: red;"></p>
                </div>
            </div>
            
        
            <div class="row">
                <div class="col-md-2">
                    <label>Phone Number</label>
                </div>
                <div class="col-md-9">
                    <input type="number" placeholder="Phone Number E.g. 01110596###" class="form-control" name="phoneNum" required>
                    <p id="vldPhoneNum" style="color: red;"></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <label>User Types:</label><br/>
                </div>
                <div class="col-md-9">
                    <label class="radio-inline"><input type="radio" name="userType" checked >Consumer</label><br/>
                    <label class="radio-inline"><input type="radio" name="userType">Farmer</label>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="button" onclick="validateForm()" class="signupbtn btn btn-success">Sign Up</button>
                    <button type="button" class="cancelbtn btn btn-default" onclick="window.location.href='index.php'">Cancel</button>
                </div>
            </div>
            
        </form>
            </div>
        
        <!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
        <script src="js/jquery.min.js"></script> 
        <!-- All Bootstrap  plug-ins  file --> 
        <script src="js/bootstrap.min.js"></script>
        <!-- Basic AngularJS -->
        <script src="js/angular.min.js"></script>
    </body>
</html>