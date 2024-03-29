<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition edit-page">
<h1 class="edit-main-title">EDIT PRODUCT</h1>
    <main class="edit-main">
    
        <section class="product-section">
            <div class="product-section-container">
                <div class="product-img-wrapper">
                    <div class="product-img-main">
                        <a>
                        <img src="<?=$product['mainImage']?>"id="product-img-main">

                        </a>
                    </div>
                    <div class="product-img-side">
                    <ul class="product-img-side-groupings">
                            <li>
                                <a>
                                    <img src="<?=$product['mainImage']?>" class="product-imgs active" id="product-side-main">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="<?=$product['sideImageOne']?>" class="product-imgs" id="product-side-two">
                                </a>
                            </li>
                            <li >
                                <a>
                                    <img src="<?=$product['sideImageTwo']?>"class="product-imgs" id="product-side-three">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="<?=$product['sideImageThree']?>"class="product-imgs" id="product-side-four">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="edit-text-wrapper">
                    <div class="product-text-title">
                        <hgroup class="product-h-group">
                            <h1 class="edit-text-headers">Product Details</h1>
                            <h2>Collection</h2>
                            <input class="edit-text-containers-top" type="text" name="productCollection" placeholder="<?=$product['productCollection']?>" value="" >
                            <h2>Product Name</h2>
                            <input class="edit-text-containers-top" type="text" name="productName" placeholder="<?=$product['productName']?>" value="">
                            <h2>Price</h2>
                            <input class="edit-text-containers-top"  data-specific="price" type="number" name="productPrice" placeholder="<?=$product['productPrice']?>" value="">
                            
                        </hgroup>
                        
                        
                    </div>
                   
                    <div class="edit-text-wrapper" >
                        <div class="edit-text-tablist-container" data-name="tab-container">
                        <hgroup class="product-h-group">
                            <h1 class="edit-text-headers">Product Information</h1>
                            <h2>Description</h2>
                            <textarea class="edit-text-containers-middle" type="text" name="productDesc" placeholder="<?=$product['productDesc']?>" value=""></textarea>
                            <h2>Shipping</h2>
                            <textarea class="edit-text-containers-middle" type="text" name="productShipping" placeholder="<?=$product['productShipping']?>" value=""></textarea>
                            <h2>Details</h2>
                            <textarea class="edit-text-containers-middle"  data-specific="productDetails" type="number" name="productDetails" placeholder="<?=$product['productDetails']?>" value=""></textarea>
                            
                        </hgroup>
                        
                            
                            
                                
                                
                        
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
           
        </section>
   
   
   
    <div class="product-accordion">
    <div class="edit-text-accordion" data-name="tab-container">
                        <hgroup class="product-h-group">
                            <h1 class="edit-text-headers">Product Information</h1>
                            <h2>Dimensions</h2>
                            <textarea class="edit-text-containers-bottom" name="productDimensions" placeholder="<?=$product['productDimensions']?>"></textarea>
                            <h2>Overview</h2>
                            <textarea class="edit-text-containers-bottom" type="text" name="productOverview" placeholder="<?=$product['productName']?>" value=""></textarea>
                            <h2>Build Guide</h2>
                            <textarea  class="edit-text-containers-bottom"  data-specific="productGuide" type="number" name="productGuide" placeholder="<?=$product['productPrice']?>" value=""></textarea>
                            
                        </hgroup>
            </div>
        </section>
        
    </div>
        
    

    
    
</main>
<div class="edit-button-save-container">
    <button class="edit-save-button" data-id="edit" type="submit">SAVE</button>
</div> 

<script src="Assests/Scripts/edit.js"></script>


</body>


</html>