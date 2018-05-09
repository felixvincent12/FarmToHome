<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="loginModal1" aria-hidden="true" data-ng-controller="loginCtrl">
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
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" data-ng-model="loginEmail"/>
                    </div>
                                
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" data-ng-model="loginPassword"/>
                    </div>
                            
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default loginSubmitBtn" data-ng-click="login()">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>