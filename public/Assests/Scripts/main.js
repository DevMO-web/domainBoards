
//=============Start: Header Buttons=============

function transitionAfterPageLoad() {
    document.getElementById("body").classList.remove("no-transition");
  }
  
  (function() {
    transitionAfterPageLoad();
  })()
  
  
  
  
  const shopIcon = document.getElementById('shopping-cart');
  const body = document.body;
  const drawer = document.getElementById('cart')
  const closeIcon= document.getElementById('cart-close')
  
    shopIcon.addEventListener('click', function() {
      body.classList.toggle('is-drawerActive-cart')
      if (this.getAttribute('aria-expanded') == 'false') {
        this.setAttribute('aria-expanded', 'true');
        drawer.setAttribute('aria-hidden','false')
      } else {
        this.setAttribute('aria-expanded', 'false')
        drawer.setAttribute('aria-hidden','true')
      
      };
      
    });
    closeIcon.addEventListener('click', () => {
      body.classList.remove('is-drawerActive-cart')
      shopIcon.setAttribute('aria-expanded', 'false')
      drawer.setAttribute('aria-hidden','true')
  });
  
  const hamIcon = document.getElementById('hamburger-menu');
  const hamdrawer = document.getElementById('nav')
 
  
    hamIcon.addEventListener('click', function() {
      body.classList.toggle('is-drawerActive-nav')
      if (this.getAttribute('aria-expanded') == 'false') {
        this.setAttribute('aria-expanded', 'true');
        hamdrawer.setAttribute('aria-hidden','false')
      } else {
        this.setAttribute('aria-expanded', 'false')
        hamdrawer.setAttribute('aria-hidden','true')
      
      };
      
    });
  
 //=============END: Header Buttons=============
 
 
 //=============Start: Accordian=============

    const accordion = document.querySelector(".product-accordion");

    accordion.addEventListener("click", (e) => {
      const activePanel = e.target.closest(".product-accordion-section");
      if (!activePanel) return;
      toggleAccordion(activePanel);
    });
    
    function toggleAccordion(panelToActivate) {
      const activeButton = panelToActivate.querySelector("button");
      const activePanel = panelToActivate.querySelector(".product-accordion-description");
      const activePanelIsOpened = activeButton.getAttribute("aria-expanded");
    
      if (activePanelIsOpened === "true") {
        panelToActivate
          .querySelector("button")
          .setAttribute("aria-expanded", false);
    
        panelToActivate
          .querySelector(".product-accordion-description")
          .setAttribute("aria-hidden", true);
      } else {
        panelToActivate.querySelector("button").setAttribute("aria-expanded", true);
    
        panelToActivate
          .querySelector(".product-accordion-description")
          .setAttribute("aria-hidden", false);
      }
    }
    
 //=============END: Accordian=============
 
 //=============Start: Product Thumbnail=============
let thumbnails = document.getElementsByClassName('product-imgs')

let activeImages = document.getElementsByClassName('active')

/*This loops through all the classes called thumbail.*/ 

for (var i=0; i < thumbnails.length; i++){
    thumbnails[i].addEventListener('click', function(){
        this.classList.add('active')
        document.getElementById('product-img-main').src = this.src
    })
}
 

const productImages = document.querySelectorAll(".product-imgs")

productImages.forEach(img =>{
  const test = img.getAttribute('src')

  if(test.trim() === ""){
    img.remove()
  }
})





 //=============End: Product Thumbnail=============

 