
        
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
        
