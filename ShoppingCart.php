
        
        <!-- content-->
        <div class="container pushNav ">
        <div class="row ">
            <div class="col-md-8 cart-border">
                 <div class="row cartItemBorder" >
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
                                <div class="col-md-1 col-md-offset-10">
                                    <button class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                </div>
            </div>
            
            <div class="col-md-3 col-md-offset-1 cart-border">
                <h1>Price Details</h1>
                <ul>
                    <li>Product name: RM price</li>
                </ul>
                
                <h2>Order Total: price</h2>
                
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="WEFSQ6F3EMMCA">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                
            </div>
        </div>
        </div>
