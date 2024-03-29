<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition edit-page">
<div class="top-edit-headers">
    <button><a href="/adminzone">exit</a></button>
    <h1 class="edit-main-title">CREATE PRODUCT</h1>
</div>

    <main class="edit-main">
    
        <section class="product-section">
            <div class="product-section-container">
                <div class="product-img-wrapper">
                    <div class="product-img-main">
                        <a>
                        <img src=""id="product-img-main">

                        </a>
                    </div>
                    <div class="product-img-side">
                    <ul class="product-img-side-groupings">
                            <li>
                                <a>
                                    <img src=" class="product-imgs active" id="product-side-main">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src="" class="product-imgs" id="product-side-two">
                                </a>
                            </li>
                            <li >
                                <a>
                                    <img src=""class="product-imgs" id="product-side-three">
                                </a>
                            </li>
                            <li>
                                <a>
                                    <img src=""class="product-imgs" id="product-side-four">
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
                            <input class="edit-text-containers-top" type="text" name="productCollection" placeholder="" value="" >
                            <h2>Product Name</h2>
                            <input class="edit-text-containers-top" type="text" name="productName" placeholder="" value="">
                            <h2>Price</h2>
                            <input class="edit-text-containers-top"  data-specific="price" type="number" name="productPrice" placeholder="" value="">
                            
                        </hgroup>
                        
                        
                    </div>
                   
                    <div class="edit-text-wrapper" >
                        <div class="edit-text-tablist-container" data-name="tab-container">
                        <hgroup class="product-h-group">
                            <h1 class="edit-text-headers">Product Information</h1>
                            <h2>Description</h2>
                            <textarea class="edit-text-containers-middle" type="text" name="productDesc" placeholder="" value=""></textarea>
                            <h2>Shipping</h2>
                            <textarea class="edit-text-containers-middle" type="text" name="productShipping" placeholder="" value=""></textarea>
                            <h2>Details</h2>
                            <textarea class="edit-text-containers-middle"  data-specific="productDetails" type="number" name="productDetails" placeholder="" value=""></textarea>
                            
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
                            <textarea class="edit-text-containers-bottom" name="productDimensions" placeholder=""></textarea>
                            <h2>Overview</h2>
                            <textarea class="edit-text-containers-bottom" type="text" name="productOverview" placeholder="" value=""></textarea>
                            <h2>Build Guide</h2>
                            <textarea  class="edit-text-containers-bottom"  data-specific="productGuide" type="number" name="productGuide" placeholder="" value=""></textarea>
                            
                        </hgroup>
            </div>
        </section>
        
    </div>
        
    

    
    
</main>
<div class="edit-button-save-container">
    <button class="edit-save-button" data-id="create" type="submit">SAVE</button>
</div> 

<script src="Assests/Scripts/create.js"></script>


</body>


</html>