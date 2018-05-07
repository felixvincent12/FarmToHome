<!DOCTYPE html>
<html lang="en" data-ng-app="farmApp">
    <!-- header of the page-->
     <head> 
        <title>Sign Up Page</title> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" href="css/style.css" rel="stylesheet"/>
        
    </head> 
    <body >
        <div class="container">
        <form name="signUpForm" method="post" style="margin: 10px 80px 40px 80px;  border:1px solid grey; padding: inherit; border-radius: 10px; padding-bottom: 10px;" action="" novalidate>
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="image/logo.png"/ class="text-center">
                </div>
            </div>
            
            
            <h1>Sign Up</h1>
            <hr / >
            

            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.ufName.$invalid && signUpForm.ufName.$dirty, 'has-success': signUpForm.ufName.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="ufName"><span class="text-danger"></span>First Name</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="ufName" name="ufName" data-ng-model="ufName" placeholder="First" pattern="[a-zA-Z]{1,}" required/>
                    <span data-ng-show="signUpForm.ufName.$invalid && signUpForm.ufName.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.ufName.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.ufName.$error.required && signUpForm.ufName.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.ufName.$error.pattern && signUpForm.ufName.$dirty">*Letter only</div>
                    
                </div>
            </div>
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.ulName.$invalid && signUpForm.ulName.$dirty, 'has-success': signUpForm.ulName.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="ulName"><span class="text-danger"></span>Last Name</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="ulName" name="ulName" data-ng-model="ulName" placeholder="First" pattern="[a-zA-Z]{1,}" required/>
                    <span data-ng-show="signUpForm.ulName.$invalid && signUpForm.ulName.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.ulName.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.ulName.$error.required && signUpForm.ulName.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.ulName.$error.pattern && signUpForm.ulName.$dirty">*Letter only</div>
                    
                </div>
            </div>
            
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uEmail.$invalid && signUpForm.uEmail.$dirty, 'has-success': signUpForm.uEmail.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="uEmail"><span class="text-danger"></span>Email</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="uEmail" name="uEmail" data-ng-model="uEmail" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                    <span data-ng-show="signUpForm.uEmail.$invalid && signUpForm.uEmail.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uEmail.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uEmail.$error.required && signUpForm.uEmail.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.uEmail.$error.pattern && signUpForm.uEmail.$dirty">*Please write in correct format</div>
                    
                </div>
            </div>
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uPassword.$invalid && signUpForm.uPassword.$dirty, 'has-success': signUpForm.uPassword.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="uPassword"><span class="text-danger"></span>Password</label>
                </div>
                
                <div class="col-md-9">
                    <input type="password" class="form-control" id="uPassword" name="uPassword" data-ng-model="uPassword" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}" data-ng-minlength="6" data-ng-maxlength="18" required/>
                    <span data-ng-show="signUpForm.uPassword.$invalid && signUpForm.uPassword.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uPassword.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uPassword.$error.required && signUpForm.uPassword.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.uPassword.$error.pattern && signUpForm.uPassword.$dirty">*At least one numeric digit, one upper case letter, one lower case letter, between 6 - 18 character</div>
                    <div class="text-danger" data-ng-show="signUpForm.uPassword.$error.minlength && signUpForm.uPassword.$error.maxlength && signUpForm.uPassword.$dirty">*Password Length must between 6 - 18 character</div>
                    
                </div>
            </div>
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':(signUpForm.uCPassword.$invalid || uCPassword != uPassword) && signUpForm.uCPassword.$dirty, 'has-success': signUpForm.uCPassword.$valid && uCPassword == uPassword}">
                <div class="col-md-2">
                    <label class="control-label" for="uCPassword"><span class="text-danger"></span>Confirm Password</label>
                </div>
                
                <div class="col-md-9">
                    <input type="password" class="form-control" id="uCPassword" name="uCPassword" data-ng-model="uCPassword" placeholder="Repeat Password" data-ng-compare="uPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}" required/>
                    <span data-ng-show="signUpForm.uCPassword.$invalid && signUpForm.uCPassword.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uCPassword.$valid && signUpForm.uCPassword.$dirty" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-if="uCPassword != uPassword">Password not match</div>
                    
                </div>
            </div>
            
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uDob.$pristine, 'has-success': signUpForm.uDob.$dirty}">
                <div class="col-md-2">
                    <label class="control-label" for="uDob"><span class="text-danger"></span>Date of Birth</label>
                </div>
                
                <div class="col-md-9">
                    <input type="date" class="form-control" id="uDob" name="uDob" data-ng-model="uDob" required/>
                    <span data-ng-show="signUpForm.uDob.$pristine && signUpForm.uDob.$touched" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uDob.$dirty" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uDob.$error.required">*Please Choose Date of Birth</div>
                    
                </div>
            </div>
            
        

            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uAddress.$invalid && signUpForm.uAddress.$dirty, 'has-success': signUpForm.uAddress.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="uAddress"><span class="text-danger"></span>Address</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="uAddress" name="uAddress" data-ng-model="uAddress" placeholder="Street Address" pattern=".{5,}" required/>
                    <span data-ng-show="signUpForm.uAddress.$invalid && signUpForm.uAddress.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uAddress.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uAddress.$error.required && signUpForm.uAddress.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.uAddress.$error.pattern && signUpForm.uAddress.$dirty">*Address too short! (should more than 5 characters)</div>
                    
                </div>
            </div>
            
            
            <div class="row form-group">
                <div class="col-md-2">
                    <label class="control-label" for="uCity">City</label>
                </div>
                <div class="col-md-9">
                    <select class="form-control" id="uCity" name="uCity" data-ng-model="uCity" required>
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
                </div>
            </div>
            
            
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uPostCode.$invalid && signUpForm.uPostCode.$dirty, 'has-success': signUpForm.uPostCode.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="uPostCode"><span class="text-danger"></span>Postal / Zip Code</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="uPostCode" name="uPostCode" data-ng-model="uPostCode" placeholder="Enter Postcode" pattern="\d*" maxlength="5" data-ng-minlength="5" required/>
                    <span data-ng-show="signUpForm.uPostCode.$invalid && signUpForm.uPostCode.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uPostCode.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uPostCode.$error.required && signUpForm.uPostCode.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.uPostCode.$error.pattern && signUpForm.uPostCode.$dirty">*Only Number Available</div>
                    <div class="text-danger" data-ng-show="signUpForm.uPostCode.$error.minlength && signUpForm.uPostCode.$dirty">*need 5 digits</div>
                    
                </div>
            </div>
            
             
            <div class="row form-group has-feedback" data-ng-class="{'has-error':signUpForm.uPgone.$invalid && signUpForm.uPhone.$dirty, 'has-success': signUpForm.uPhone.$valid}">
                <div class="col-md-2">
                    <label class="control-label" for="uPhone"><span class="text-danger"></span>Phone Number</label>
                </div>
                
                <div class="col-md-9">
                    <input type="text" class="form-control" id="uPhone" name="uPhone" data-ng-model="uPhone" placeholder="Enter 60..." pattern="\d*" data-ng-minlength="10" data-ng-maxlength="12" required/>
                    <span data-ng-show="signUpForm.uPhone.$invalid && signUpForm.uPhone.$dirty" class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <span data-ng-show="signUpForm.uPhone.$valid" class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <div class="text-danger" data-ng-show="signUpForm.uPhone.$error.required && signUpForm.uPhone.$dirty">*Please Fill In</div>
                    <div class="text-danger" data-ng-show="signUpForm.uPhone.$error.minlength && signUpForm.uPhone.$error.maxlength && signUpForm.uPassword.$dirty">*Phone Number Length must between 10 - 12</div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label>User Types:</label><br/>
                </div>
                <div class="col-md-9">
                    <input type="radio" name="uType" value="consumer" class="radio-inline" checked >Consumer<br/>
                    <input type="radio" name="uType" value="farmer" class="radio-inline">Farmer
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="submit" data-ng-model="btnSubmit" data-ng-disabled="signUpForm.$invalid" class="signupbtn btn btn-success">Sign Up</button>
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
        
        <script src="js/validation.js"></script>
    </body>
</html>