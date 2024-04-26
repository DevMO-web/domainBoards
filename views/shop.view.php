
<!DOCTYPE html>
<html lang="en" class="shop">
<?php require('partials/head.php')?>
<body id="body" class="no-transition body">
    <?php require('partials/header.php')?>
   <main> 
    <section class="shop-one">
        <div class="shop-small-hero-container">
            <div class="shop-text-container">
                <h1>view our limited collections</h1>
                <div class="shop-small-hero-btn">
                    <a href="/limited?id=65"class="add">check it</a>
                </div>
                
            </div>
           
        </div>

        
    </section>
  
   
    <section class="tabs">
      
   
        <div class="tablist-container">
            <div class="shop-title">
                <hr class="left-line-shop">
                <h2>Domain Board Items</h2>
                <hr class="right-line-shop">
        </div>
        
        <div
        role="tablist"
        aria-labelledby="tablist-1"
        class="automatic" data-name="tab-container">
        
        <button 
                    id="btn-surfboard" role="tab"
                    class="btn-shop active"
                    type="button"
                    role="tab"
                    aria-selected="true"
                    data-tab-id= "1"
                    data-target="#testing-a">
                    
                    
                    surfboards
        </button>
        <button 
                    id="btn-wetsuit"
                    class="btn-shop"
                    type="button"
                    role="tab"
                    aria-selected="false"
                    data-tab-id= "2"
                    data-target="#testing-b">
                    
                   
                    wetsuits
        </button>
        <button 
                    id="btn-fins"
                    class="btn-shop"
                    type="button"
                    role="tab"
                    aria-selected="false"
                    data-tab-id= "3"
                    data-target="#testing-c">
                    
                
                    fins
        </button>
        <button 
                    id="btn-gear"
                    class="btn-shop"
                    type="button"
                    role="tab"
                    aria-selected="false"
                    data-tab-id= "4"
                
                    data-target="#testing-d">
                
                    gear
        </button>
        <div class="shop-filter">
            
        </div>
         </div>
    <div class="shop-tabcontent-container">
        <div 
            class="test"
            id="testing-a"
            role="tabpanel"
            data-content-id="1"
            aria-hidden="false">
      
        
             
                    <div class="grid-container" id="tt" data-name="1">
                    </div>
          
</div>
            <div class="test"
            role="tabpanel"
            data-content-id="2"
            aria-hidden="true"
            id="testing-b"
            >
            
            
                    <div class="grid-container" id="t0" data-name="2">
                    </div>
                
          
    </div>
    <div class="test"
            role="tabpanel"
            data-content-id="3"
            aria-hidden="true"
            id="testing-c">
            
                    <div class="grid-container" id="t0" data-name="3">
                    </div>
                
          
    </div>
    <div class="test"
            role="tabpanel"
            data-content-id="4"
            aria-hidden="true"
            id="testing-d"
            >
            
            
                    <div class="grid-container" id="t0" data-name="4">
                    </div>
                
          
    </div>
        
                </div>
                </div>
          
    </section>
   </main>
   <?php require('partials/footer.php') ?>


<script src="Assests/Scripts/main.js"></script>
<script src="Assests/Scripts/cart.js"></script>
<script src="Assests/Scripts/two.js"></script>
<script src="Assests/Scripts/test.js"></script>

</body>
</html>