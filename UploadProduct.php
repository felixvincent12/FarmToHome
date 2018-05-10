 
        <!-- content-->
        <div class="container pushNav">
        <div class="row">
            <div class="col-md-12">
                 <form role="form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" name="productPicture" accept="image/*">
                        </div>
                        <div class="col-md-8">
                            <label for="pName">Product Name: <input type="text" id="pName"></label><br/>
                            <label for="pPrice">Price (per unit): <input type="text" id="pPrice"></label><br/>
                            <label for="pUnit">Unit: 
                                <select>
                                    <option value="kg">kilo-gram</option>
                                    <option value="gram">gram</option>
                                </select>
                            </label><br/>
                            
                            <label for="pUnit">Category: 
                                <select>
                                    <option value="">brocolli</option>
                                    <option value="">others</option>
                                </select>
                            </label><br/>
                            
                            <label for="pQuantity">Quantity: <input type="text" id="pQuantity"></label><br/>
                            <label for="pDesc">Description: <textarea rows="4" cols="50"></textarea></label>
                        </div>
                    </div>
                          
                     <div class="row uploadProductBtnGrp">
                        <button class="btn btn-success">Upload</button>
                         <a type="submit" class="btn btn-danger" href="#ProductManagementPage">Cancel</a>
                    </div>
                </form>
                
            </div>
        </div>
        </div>