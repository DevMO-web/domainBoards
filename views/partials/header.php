<header class= "global-header-section">
        <div class="global-header-container">
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
                    src="/Assests/Images/Brand/Logo-R.svg" 
                    alt="Domain Boards logo with a bald man sitting in a lotus position awaiting for you to meet the waves">
                    </a>
                    </div>
                </div>

                <div class="global-header-shopping-icon-container">
                    <button class="global-header-shopping-btn" id="shopping-cart" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping icons"></i>
                        <p class="home-header-shopping-cart-icon-label"></p>
                    </button> 
                </div>
            
            </div>
        
            <?php view('partials/nav.php')?>

        </div>

       <?php view('partials/shoppingCart.php');?>
    </header>