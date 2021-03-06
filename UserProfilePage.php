
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