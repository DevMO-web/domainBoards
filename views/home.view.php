<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php')?>
<body id="body" class="no-transition">
    <header class= "global-header-section home-header-section">
        <div class="home-header-container global-header-container">
            <div class="global-header-banner-container">

                <div class="global-header-hamburger-menu-container" id="hamburger-menu" aria-expanded="false">
                    <button class="global-header-hamburger-menu-btn">
                        <i class="fa-solid fa-bars fa-xl icons"></i>
                    </button> 
                </div>
                  
                <div class="global-header-logo-container">
                    <div class="global-header-logo-image">
                    <a href="/adminzone">
                    <img 
                    class="global-logo"
                    src="/Assests/Images/Brand/Logo.svg" 
                    alt="Domain Boards logo with a bald man sitting in a lotus position awaiting for you to meet the waves">
                    </a>
                    
                    </div>
                </div>

                <div class="global-header-shopping-icon-container">
                    <button class="global-header-shopping-btn" id="shopping-cart" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping icons"></i>
                        <p class="home-header-shopping-cart-icon-label">cart</p>
                    </button> 
                </div>
            
            </div>
            
            <?php require('partials/nav.php')?>
           
            <div class="home-header-hero-container">
                <hgroup class="home-header-hero-hgroup">
                    <p>OUT NOW</p>
                    <h1>Wave Seeker</h1>
                    <button class="home-header-hero-btn"><a href="/shop">browse shop</a></button> 
                </hgroup> 
            </div>

        </div>

        <?php view('partials/shoppingCart.php');?>
    </header>
   <main>
   
    <section class="home-category-section">
        <hgroup class="home-category-hgroup">
            <h2>SHOP</h2>
            <p>BY CATEGORY</p>
        </hgroup>
        <div class="home-category-list-container">
            <ul>
                <li><a href="/shop#testing-a" id="surfboards" class="one"><span>surfboards</span></a></li>
                <li><a href="/shop#testing-b" id="wetsuits"  class="two">wetsuits</a></li>
                <li><a href="/shop#testing-c" id="fins" class="three">fins</a></li> 
                <li><a href="/shop#testing-d" id="gear" class="four">gear</a></li>  
            </ul>
        </div>
    </section>

    <section class="home-limited-edition-section">
            
        <div class="home-limited-edition-headings">
            <hgroup class="home-limited-edition-hgroup">
                <hr class="home-limited-edition-line-left">
                <h2>LIMITED EDITION</h2>
                <hr class="home-limited-edition-line-right">
            </hgroup> 
        </div>
    
        <div class="home-limited-edition-list-container">
           
            <ul class="home-limited-edition-list">
                <li class="home-limited-edition-list-item">
                    
                    <div class="home-limited-edition-list-card">
                        <div class="home-limited-edition-list-card-image">
                        <img src=<?=imagePath($home,6)?> class="limited">
                        </div> 
                        <div class="home-limited-edition-list-card-text">
                            <h3>THE ZEUS</h3> 
                            <button class="add"data-id="1">select</button>
                        </div> 
                    </div>
                </li>
                <li class="home-limited-edition-list-item">
                    <div class="home-limited-edition-list-card">
                        <div class="home-limited-edition-list-card-image">
                        <img src="Assests/Images/HomePage/LimitedEditionBoardTwo.png" class="limited">
                        </div> 
                        <div class="home-limited-edition-list-card-text">
                            <h3>THE ZEUS</h3> 
                            <button class="add"data-id="2">select</button>
                        </div> 
                    </div>
                </li>
                <li class="home-limited-edition-list-item">
                    <div class="home-limited-edition-list-card">
                        <div class="home-limited-edition-list-card-image">
                        <img src="Assests/Images/HomePage/LimitedEditionThree.png" class="limited">
                        </div> 
                        <div class="home-limited-edition-list-card-text">
                            <h3>THE ZEUS</h3> 
                            <button class="add"data-id="3">select</button>
                        </div> 
                    </div>
                </li>
                <li class="home-limited-edition-list-item">
                    <div class="home-limited-edition-list-card">
                        <div class="home-limited-edition-list-card-image">
                        <img src=<?=imagePath($home,6)?> class="limited">
                        </div> 
                        <div class="home-limited-edition-list-card-text">
                            <h3>THE ZEUS</h3> 
                            <button class="add"data-id="4">select</button>
                        </div> 
                    </div>
                </li>
                <li class="home-limited-edition-list-item">
                    <div class="home-limited-edition-list-card">
                        <div class="home-limited-edition-list-card-image">
                        <img src=<?=imagePath($home,6)?> class="limited">
                        </div> 
                        <div class="home-limited-edition-list-card-text">
                            <h3>THE ZEUS</h3> 
                            <button>select</button>
                        </div> 
                    </div>
                </li>
                
                
            </ul>
       
    </section>


    <section class="home-boards-section">
        <div class="home-boards-container">
            <div class="home-boards-image-container">
                    <img src=<?=imagePath($home,5)?>>
            </div>
            <hgroup class="home-boards-hgroup">
                <h2>CHECK OUT</h2>
                <p>THE BOARDS</p>
                <a href="/shop#testing-a"><button class="home-btn">browse more</button></a>
            </hgroup>
        </div>
    </section>  

    <section class="home-journals-section">

        <div class="home-journals-container">
            <div class="home-journals-poloroid-one">
                <div class="home-journals-poloroid-container">
                    <img src=<?=imagePath($home,7)?>>
                    <p>Ol' Reliable</p>
                </div>
            </div>
            <div class="home-journals-poloroid-two">
                <div class="home-journals-poloroid-container">
                    <img src=<?=imagePath($home,8)?>>
                    <p>Beach Vibes</p>
                </div>
            </div>
            <hgroup class="home-journals-hgroup">
                <h2>PEEK INTO</h2>
                <p>OUR JOURNAL</p>
                <button class="home-btn"><a href="/journal">read some</a></button>
            </hgroup>
        </div>
   
    </section>

    <section class="home-about-section">
        <div class="home-about-container">
            <div class="home-about-wrapper">
                <div class="home-about-top-part">
                    <span class="home-about-top-background-one"></span>
                    <div class="home-about-top-logo">
                        <img src="Assests/Images/Brand/Mascot.svg">
                    </div>
                    <span class="home-about-top-background-two"></span>
                    <div class="home-about-top-description">
                        <div class="home-about-top-description-container">
                            <h2>ABOUT US</h2>
                            <hr class="home-about">
                            <p>the gang explores the islands of hawaii in search of some great waves and something crazy happens to the boards. They begin flying into orbit</p>
                            <div class="home-about-btn-container">
                                <button class="home-about-btn">Learn More<i class="fa-solid fa-chevron-right about-chevron" id="chevron-2"></i></button>
                                
                            </div>
                           
                        </div>

                        
                    </div>
                </div>
                <div class="home-about-bottom-part">
                    <ul class="home-about-bottom-list">
                        <li class="home-about-bottom-card">
                            <div class="home-about-bottom-img">
                                <figure class="home-about-icon">
                                    <img src=<?=imagePath($home,1)?> class="icon">
                                    <figcaption>
                                        <h4>made in the u.s.a</h4>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="home-about-icon-text">
                                <p></p>
                            </div>
                        </li>
                        <li class="home-about-bottom-card">
                            <div class="home-about-bottom-img">
                                <figure class="home-about-icon">
                                    <img src=<?=imagePath($home,2)?> class="icon">
                                    <figcaption>
                                        <h4>earth friendly</h4>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="home-about-icon-text">
                            </div>
                        </li> 
                        
                    </ul>
                    <ul class="home-about-bottom-list">
                        <li class="home-about-bottom-card">
                            <div class="home-about-bottom-img">
                                <figure class="home-about-icon">
                                    <img src=<?=imagePath($home,3)?> class="icon">
                                    <figcaption>
                                        <h4>jetpack delivery</h4>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="home-about-icon-text">
                            </div>
                        </li> 
                        <li class="home-about-bottom-card">
                            <div class="home-about-bottom-img">
                                <figure class="home-about-icon">
                                    <img src=<?=imagePath($home,4)?> class="icon">
                                    <figcaption>
                                        <h4>powered by love</h4>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="home-about-icon-text">
                            </div>
                        </li>
                    </ul>  
                </div>
            </div>
        </div>
    </section>
   

   </main>
    <?php require('partials/footer.php') ?>
</body>
<script src="Assests/Scripts/main.js"></script>
<script src="Assests/Scripts/cart.js"></script>
</html>