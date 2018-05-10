
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
                                    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#payOrStayModal" data-dismiss="modal">Add to Cart</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- modal for pay or stay -->
        <div class="modal fade" id="payOrStayModal" role="dialog" >
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Item has been added to shopping cart!</h3>
                <h4>You want to continue shopping or direct pay?</h4>
            </div>
            <div class="modal-footer">
                <a href="ShoppingCart.php" class="btn btn-primary">Check out</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
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