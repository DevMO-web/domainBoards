


//PHP FOR PRODUCTS
<?php foreach($products as $product) : ?>
                    <div class="item-container">
                            <div class="shop-card">
                                <div class="shop-card-image">
                                    <img src="Assests/Images/Shop/Products/surfboard-1/front.webp">
                                </div>
                                <div class="shop-card-title">
                                    <h5><?=$product['productName']?></h5>
                                </div>
                                <div class="shop-card-price">
                                    <p>$<?=$product['productPrice']?></p>
                                </div>
                            </div>
                            <div class="shop-button-container">
                                <button class="shop-btn"><a href="/product?id=<?=$product['id']?>">select</a></button>
                            </div>
                           
                        </div>
                       
                   
<?php endforeach; ?>