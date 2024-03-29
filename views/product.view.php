<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition">
    <?php require('partials/header.php')?>
    <main>
        <section class="product-section">
            <div class="product-section-container">
                <div class="product-img-wrapper">
                    <div class="product-img-main">
                        <a >
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
                <div class="product-text-wrapper">
                    <div class="product-text-title">
                        <hgroup class="product-h-group">
                            <h1><?=$product['productCollection']?></h1>
                            <h2><?=$product['productName']?></h2>
                            <p class="product-price">$<?=$product['productPrice']?></p>
                            
                        </hgroup>
                        <div class="product-btn-container">
                            <button class="add product-btn " data-id="<?=$product['id']?>">Add to Cart</button>
                        </div>
                        
                    </div>
                   
                    <div class="product-tabs" >
                        <div class="product-text-tablist-container" data-name="tab-container">
                    
                            
                            <div
                            role="tablist"
                            aria-labelledby="tablist-1"
                            class="tablist automatic">
                            
                            <button 
                                       
                                        class="product-tablist-btn"
                                        role="tab"
                                        aria-selected="true"
                                        data-tab-id= "1"
                                       >
                                        Description
                                        
                                        
                            </button>
                            <button 
                                        
                                        class="product-tablist-btn"
                                        role="tab"
                                        aria-selected="false"
                                        aria-controls="tabpanel-2"
                                        data-tab-id= "2"
                                        >
                                        Details
                                        
                            </button>
                            <button 
                                        
                                        class="product-tablist-btn"
                                        role="tab"
                                        aria-selected="false"
                                        data-tab-id= "3"
                                        >
                                        Shipping
                                  
                            </button>
                           
                            </div>
                            <div class="product-tabpanel-container">
                                <div 
                                        
                                        role="tabpanel"
                                       
                                      
                                        data-content-id="1"
                                        aria-hidden="false"
                                        class="product-tabpanel-content"
                                       >
                                      
                                        <h4 id="tab-header-m">Description</h4> 
                                        <p>
                                   
                                        </p>
                                </div>
                                <div 
                                      
                                        role="tabpanel"
                                       
                                        
                                       data-content-id="2"
                                       aria-hidden="true"
                                       class="product-tabpanel-content"
                                        >
                                        <h4 id="tab-header-m">Details</h4> 
                                </div>
                                <div 
                                       
                                        role="tabpanel"
                                       
                                        data-content-id="3"
                                        aria-hidden="true"
                                        class="product-tabpanel-content">
                                    
                                        <h4 id="tab-header-m">Shipping Information</h4> 
                                </div>
                                
                                
                        
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
           
        </section>
   
   
   
    <div class="product-accordion">
        <section class="product-accordion-section">
            <h2 class="product-accordion-heading">
                <button 
                    class="product-accordion-btn-trigger" 
                    aria-expanded="true">
                    Dimensions
                </button>
            </h2>
            <div class="product-accordion-description" aria-hidden="false">
                <div>
                <p><?=htmlspecialchars($product['productDimensions'])?></p>
                </div>            
        </section>
        <section class="product-accordion-section">
            <h2 class="product-accordion-heading">
                <button 
                    class="product-accordion-btn-trigger" 
                    aria-expanded="false">
                   Broad Overview
                </button>
            </h2>
            <div class="product-accordion-description" aria-hidden="true">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eaque consectetur perspiciatis distinctio odio excepturi earum inventore voluptatem odit ea quae optio nemo quasi repudiandae fugiat, rem cum recusandae repellat!</p>

                </div>           
        </section>
        <section class="product-accordion-section">
            <h2 class="product-accordion-heading">
                <button 
                    class="product-accordion-btn-trigger" 
                    aria-expanded="false">
                   Build Guide
                </button>
            </h2>
            <div class="product-accordion-description" aria-hidden="true">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eaque consectetur perspiciatis distinctio odio excepturi earum inventore voluptatem odit ea quae optio nemo quasi repudiandae fugiat, rem cum recusandae repellat!</p>
                    <br>
                    <br>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque corporis aliquid doloribus similique quam cupiditate voluptatem illum voluptas quia reiciendis! Nemo nihil beatae assumenda sint quae delectus et rem quis.</p>
                </div>
            </div>
        </section>
         <section class="product-accordion-section">
            <h2 class="product-accordion-heading">
                <button 
                    class="product-accordion-btn-trigger" 
                    aria-expanded="false">
                   Reviews
                </button>
            </h2>
            <div class="product-accordion-description" aria-hidden="true">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eaque consectetur perspiciatis distinctio odio excepturi earum inventore voluptatem odit ea quae optio nemo quasi repudiandae fugiat, rem cum recusandae repellat!</p>
                    <br>
                    <br>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque corporis aliquid doloribus similique quam cupiditate voluptatem illum voluptas quia reiciendis! Nemo nihil beatae assumenda sint quae delectus et rem quis.</p>
                </div>
            </div>
        </section>
    </div>
        
       
    
    
    
</main>
<script src="Assests/Scripts/main.js"></script>
<script src="Assests/Scripts/cart.js"></script>
<script src="Assests/Scripts/two.js"></script>


</body>

<?php require('partials/footer.php') ?>
</html>