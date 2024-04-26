<!DOCTYPE html>
<html lang="en">
<head>
<?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition">
<?php require('partials/header.php')?>
    <main>
     
        <section class="blog-hero-section">
            <div class="blog-hero-img-container">
                <img src=<?=imagePath($journal,$journalEntry['id'])?> alt="dude">
            </div>
        </section>
        <section class="blog-heading-section">
            <div class="blog-heading-container">
                
                <hgroup class="blog-heading-hgroup">
                    <h1 class="blog-title"> <?=$journalEntry['title']?></h1>
                   
                    <div class="blog-credentials">
                        <p class="blog-date">August 31, 2023</p>
                        <p class="blog-author">By: Devin Moats</p>
                    </div>
                    
                </hgroup>
               

            </div>
        </section>
        <section class="blog-body-section">
          
            <div class="blog-body-wrapper">
                <div class="blog-body-container">
                
                <div class="blog-body-text">
                    <h3>DAY ONE</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio id, eum, adipisci ullam ad dolor error veritatis asperiores a reprehenderit atque doloribus, quis nesciunt esse quas velit nulla neque laborum!</p>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                        </p>
                </div>
                <div class="blog-body-paragraphs">
                    <h3>DAY TWO</h3>
              
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                        </p>
                </div>
              
              
                </div>
            </div>
            
        </section>
        <!--
        <section class="blog-more-journals-section">
            <div class="blog-more-journals-container">
                <h2>More Journals For You</h2>
                <div class="blog-more-journals-list">
                    <ul class="blog-more-ul">
                        <li class="blog-more-li">
                            <div class="blog-more-list-img">
                                <img src="/Surfing/Assets/Global/Polo-2.jpg">
                            </div>
                            <div class="blog-more-list-btn">
                                <button>read more</button>
                            </div>
                            
                            
                        </li>
                        <li class="blog-more-li">
                            <div class="blog-more-list-img" >
                                <img src="/Surfing/Assets/Global/Polo-2.jpg">
                            </div>
                            <div class="blog-more-list-btn">
                                <button>read more</button>
                            </div>
                            
                            
                        </li>
                        
                    </ul>
                    <ul class="blog-more-ul">
                        <li class="blog-more-li">
                            <div class="blog-more-list-img" >
                                <img src="/Surfing/Assets/Global/Polo-2.jpg">
                            </div>
                            <div class="blog-more-list-btn">
                                <button>read more</button>
                            </div>
                            
                            
                        </li>
                        <li class="blog-more-li">
                            <div class="blog-more-list-img">
                                <img src="/Surfing/Assets/Global/Polo-2.jpg">
                            </div>
                            <div class="blog-more-list-btn">
                                <button>read more</button>
                            </div>
                            
                            
                        </li>
                        
                    </ul>
                </div>
            </div>

        </section>
-->
        

       
        
    </main>
    <?php require('partials/footer.php') ?>
    <script src="Assests/Scripts/main.js"></script>
    <script src="Assests/Scripts/cart.js"></script>
</body>
</html>