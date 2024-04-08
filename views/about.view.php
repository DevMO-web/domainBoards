<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition">
    <?php require('partials/header.php')?>
    <main class="about-page-container">
        <div class="about-page-wrapper">
            <section class="about-info-container">
                <div class="about-info-wrapper">
                    <div class="about-info-left-container">
                        <div class="about-info-left-wrapper">
                            <div class="about-info--about-us-content-container">
                                <hgroup class="about-info--about-us-content-wrapper about-us-content">
                                    <h2>About Us</h2>
                                    <p>Hello, Thanks stop for stopping by! 
                                        We are Domain Boards, and we sell surfboards. 
                                        We have been open since July 2023</p>
                                </hgroup>
                            </div>
                            <div class="about-info--location-us-content-container">
                                <hgroup class="about-info--location-us-content-wrapper about-us-content">
                                    <h2>Location</h2>
                                    <p>We are located in Wilmington NC, next to that 
                                        one road that connects with all other roads in 
                                        the United States. You wont miss us!</p>
                                </hgroup>
                            </div>
                            <div class="about-info--shipping-us-content-container">
                                <hgroup class="about-info--shipping-us-content-wrapper about-us-content">
                                    <h2>Shipping</h2>
                                    <p>Jetpack Delivery is our fasted delivery system. 
                                        Our Certified Jetpack GPS will deliver your 
                                        boards in no time!</p>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                    <div class="about-info-right-container">
                        <div class="about-info-left-wrapper">
                            <div class="about-info--image-container">
                                <img src="Assests/Images/About/Info-Contact.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-info-container">
                <div class="contact-info-wrapper">
                <div class="contact-form-container">
                <div class="contact-form-wrapper">
                    <div class="contact-form-input-container">
                    <form method="post" action="send" autocomplete="off">
                        <fieldset>
                        <legend><h2>Contact Us</h2></legend>
                        <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                            switch (true) {
                                case strpos($fullUrl, "?form=empty") !== false:
                                    echo "<p class='error'>One or more fields are empty.</p>";
                                    break;
                                // Add more cases as needed
                                case strpos($fullUrl, "?form=emailerror") !== false:
                                    echo "<p class='error'>Invalid Email Input</p>";
                                    break;
                                case strpos($fullUrl, "?form=invalid") !== false:
                                    echo "<p class='error'>Invalid Character Use:</p>
                                        
                                        <p class='error'>Only letters, -, and ' are allowed.</p>";
                                    break;
                                    case strpos($fullUrl, "?form=emailvalerror") !== false:
                                        echo "<p class='error'>Email Not Valid:</p>
                                        
                                        <p class='error'>Please try another one</p>";
                                    break;
                                case strpos($fullUrl, "?form=success") !== false:
                                    echo "<p class='success'>Email Sent. Thank You! </p>";
                                    break;
                                default:}
                                    // Default case if none of the conditions are met
                                    // This can be used for additional handling or fallback
                                

                        ?>

                        <div class="input-form-container">
                        <div class="input-form-wrapper">
                        <div class="form-name-container form-input-container">
                        <label for="contactName">Name:</label>
                        
                        <input type="text" name="name" id="contactName"  placeholder="">
                        </div>

                        <div class="form-lastname-container form-input-container">
                        <label for="contactLastName">Last Name:</label>
                        <input type="text" name="lastName" id="contactLastName" placeholder="">
                        </div>

                        <div class="form-email-container form-input-container">
                        <label for="contactEmail">Email:</label>
           
                         <input type="email" name="email" id="contactEmail" placeholder="">
                        
                        </div>
                        <div class="form-subject-container form-input-container">
                        <label for="contactSubject">Subject:</label>
                
                        <input type="text" name="subject" id="contactSubject" placeholder="">
        
                    </div>
                        <div class="form-message-container form-input-container">
                        <label for="contactMessage">Message:</label>
                      
                        <textarea name="message" id="contactMessage" placeholder="Type message here..."></textarea>
                
                    </div>
                   
                        

                       
                        
                        
                        
                        <br>

                        <br>
                        <div class="contact-form-button-container">
                             <button type="submit">Send</button>
                             </div>
                        </div>
                                </div>
                        </fieldset>
                    </form>
                    </div>
                   
                
                </div>
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