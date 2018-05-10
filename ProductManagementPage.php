
        
         <!--modal for edit product -->
        <div class="modal fade" id="editProduct" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--modal header-->
                    <div class="modal-header">
                        <h1 class="modal-title">Edit</h1>
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
        
        
        <!-- content-->
        <div class="container pushNav">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-11 col-md-1">
                            <a class="btn btn-primary" href="#UploadProduct">Add Product</a>
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