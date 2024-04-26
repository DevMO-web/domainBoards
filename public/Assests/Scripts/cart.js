//=============Start: Fetch API=============


//This is where I get my data for the fetch api. My php file creates this file
const phpFile = ('data.json')

const phpDatabse = ('/fetch')

const display = document.querySelector("#tt")

const cartPointer = document.querySelector(".global-shopping-cart-ul")
let jsonString

//Grabs json data from json file in server
//This needs to handle erros at some point
//this is async because the fetch api returns a promise.
//await key works with promises
//.json method grabs the proper information from my data json. without it, the entire response will be returned
//.json returns an array
//By defualt the response will return a response if ok or not okay
//if its not okay, throw this error.


const getData = async() => {
    const res = await fetch(phpDatabse);
    if(!res.ok){
        throw new Error(`HTTP error! status: ${res.status}`)
    }
   const data = await res.json();
    jsonString = JSON.stringify(data); // Assign the stringified data to the variable outside the function
    json = JSON.parse(jsonString)
    console.log("this is a test:",json)
    return data
    
}

getData()

//Grabs Data from Server
function grabData(){
    //Get file contents of this file
    let test;
    
    fetch(phpFile)
    //Now, turn it into json with the response that comes back
    .then((response) => {
        if(!response.ok) throw new Error ('Not Valid')
        return response.json()
    }).then((data)=> {
        //doing this allows me to call
        //put if statement in this one
        test = data
        console.log(test)
        localStorage.setItem("products", JSON.stringify(test))
        return test
    })
    //Then, that converted json, change its name to dataArray
    .then((dataArray) => {
        const gridContainer = document.querySelectorAll('.grid-container');
         
        if(gridContainer){
            //This Looks at each grid container class and selects their individual class name
            gridContainer.forEach(id => {
                const dataName= id.getAttribute('data-name');
               //each individual id gets inner HTML put in it
                id.innerHTML = dataArray
                
                .map(({productName, productPrice, id, mainImage, categoryID}) =>  {
                 //But Only if the dataName and Category ID are equal
                if(dataName == categoryID){
                    if(productPrice > 599 && productPrice <= 620){
                        return `
                        <div class="item-container">
                        <div class="shop-card">
                            <div class="shop-card-image">
                                <img src="${mainImage}" loading="lazy">
                            </div>
                            <div class="shop-card-title shop-card-title-version-two">
                                <h5>${productName}</h5>
                            </div>
                            <div class="shop-card-price shop-card-price-version-two">
                                <p>$${productPrice}</p>
                            </div>
                        </div>
                        <div class="shop-button-container">
                            <button class="shop-btn shop-btn-version-two"><a href="/product?id=${id}">select</a></button>
                        </div>
                       
                    </div>
                        `
                    }else if (productPrice > 199 && productPrice <= 500) {
                        // Execute this block of code if the productPrice is between 90 and 100
                        return `
                            <div class="item-container">
                                <div class="shop-card">
                                    <div class="shop-card-image shop-card-image-version-three">
                                        <img src="${mainImage}" loading="lazy">
                                    </div>
                                    <div class="shop-card-title">
                                        <h5>${productName}</h5>
                                      
                                    </div>
                                    <div class="shop-card-price">
                                        <p>$${productPrice}</p>
                                    </div>
                                </div>
                                <div class="shop-button-container">
                                    <button class="shop-btn shop-btn-version-three"><a href="/product?id=${id}">select</a></button>
                                </div>
                            </div>
                        `;
                    }else{
                        return `
                        <div class="item-container">
                        <div class="shop-card">
                            <div class="shop-card-image">
                                <img src="${mainImage}" loading="lazy">
                            </div>
                            <div class="shop-card-title">
                                <h5>${productName}</h5>
                            </div>
                            <div class="shop-card-price">
                                <p>$${productPrice}</p>
                            </div>
                        </div>
                        <div class="shop-button-container">
                            <button class="shop-btn"><a href="/product?id=${id}">select</a></button>
                        </div>
                       
                    </div>
                        `
                    }
                  
                }
                 
                }).join('');
            })
          
        }else{
            console.log('There is no display anymore')
            console.log(test)
           
        }
      
       
       
    })

    .catch((error)=> {
        console.warn(error.message)
        
    })
}   

grabData()


function cacheCheck(){

}
//Displays the json objects
//Must call getData inorder for this function to grab info
//map method object parameter represents each indivuidal object as we iterate through the array
//
/*const displayData = async () => {
    const payload = await getData();
    let dataDisplay = payload.map((object) => {
        const { productName, productPrice, id} = object
        console.log(object)
        
        return `
        <div class="item-container">
        <div class="shop-card">
            <div class="shop-card-image">
                <img src="Assests/Images/Shop/Products/surfboard-1/front.webp">
            </div>
            <div class="shop-card-title">
                <h5>${productName}</h5>
            </div>
            <div class="shop-card-price">
                <p>$${productPrice}</p>
            </div>
        </div>
        <div class="shop-button-container">
            <button class="shop-btn"><a href="/product?id=${id}">select</a></button>
        </div>
       
    </div>
        `
  
    }).join("")

    display.innerHTML = dataDisplay
  
}
displayData()
*/

  
//=============End: Fetch API=============

//=============Start: Shopping Cart Classes=============
const jsonDataString = `
[
    {
        "id": 1,
        "productName": "Surfboard",
        "productPrice": 1400,
        "img": "Sikyo.jpg"
    },
    {
        "id": 2,
        "productName": "Wetsuit",
        "productPrice": 37.08,
        "img": "Slapper.jpg"
    },
    {
        "id": 3,
        "productName": "Fins",
        "productPrice": 45.70,
        "img": "Flipper.jpg"
    },
      {
        "id": 4,
        "productName": "Darfle",
        "productPrice": 900,
        "img": "dar.jpg"
    }
]
`;
const productInfo = JSON.parse(jsonDataString);

//const productInfo = JSON.parse(jsonDataString);
console.log(productInfo[0].productPrice); 


function jsonGrab(){
    for (let i = 0; i < productInfo.length; i++){
    console.log(productInfo[i].name)
}
}

// ************************************************
// Shopping Cart API
// ************************************************

//BluePrint For What An Item Should Hold
class Item{ 
    constructor(name, price, qty = 1, img, id, category){
        this.name = name;
        this.price = price;
        this.qty = qty;
        this.img = img;
        this.id = id;

    }

}

//BluePrint for Defining What it means to be a Cart
class Cart{

    //the constructor will intialize things autmatically. Just like in PHP
    constructor(){
        this.cartItems = [];
        //Load cart first
        this.loadCart()
        this.transferCart()
        
    }

  

    saveCart(){
        localStorage.setItem('activeCart', JSON.stringify(this.cartItems));
    }

    loadCart(){
        this.cartItems = JSON.parse(localStorage.getItem('activeCart')) || [];
        

    }

    transferCart(){
        if (this.cartItems.length === 0) {
            console.log('The cart is empty.');
            cartPointer.setAttribute('data-id', 'cart')
           
            
        } else {
            //redefine so that its no longer undefined
           
            let consistentCart = this.cartItems
            
            const cartHTML = consistentCart.map(({ name, price, id, img, qty }) => {
                return `
                            
                        

                        <li class="global-shopping-cart-li" data-id="${id}" data-description="removal">
                            
                        <div class="global-shopping-cart-qty-container">
                            <p class="product-qty" data-product-qty="${qty}">${qty}x</p>
                        </div>

                        <div class="global-shopping-cart-li-image-container" data-id="">
                            <img src="${img}" loading="lazy">
                        </div>
                            
                        <div class="global-shopping-cart-li-content-container" data-info="products">
                            <h4 class="product-name" data-product-title="${name}">${name}</h4>
                            <span class="product-price" data-product-price="${price}">$${price}</span>
                        </div>
                            
                        <div class="global-shopping-cart-li-remove-container" data-product-price="">
                                <button class="remove" data-id="${id}">remove</button>
                        </div>
                    </li>
                `;
            }).join('');
    
            // Log or return the generated HTML
            
            cartPointer.innerHTML = cartHTML
            

           
        }
    }

    //Searches array index for same name. then, if there is a same name it, increment qty 
    addItem(item) {
        const cartList = this.cartItems;
        let itemCheck = false;

        for(let i = 0; i < cartList.length; i++){
            if(cartList[i].name === item.name){
                cartList[i].qty += item.qty;
                console.log(`Added ${cartList[i].name} to the cart. New quantity: ${cartList[i].qty}`);
                itemCheck = true;
                
                break; // Exit the loop once an item with the same name is found
               
            }
        }
        if(!itemCheck){
            cartList.push(item);
            console.log(`Added ${item.qty} ${item.name}(s) to the cart.`);
           
        }
        this.saveCart()

    }

    removeItem(item) {
        const cartList = this.cartItems;
        this.intialLength()

        for (let i = 0; i < cartList.length; i++) {
            if (cartList[i].name === item.name) {
                if (cartList[i].qty > 1) {
                    cartList[i].qty -= 1;
                    console.log(`Removed 1 ${item.name} from the cart. New quantity: ${cartList[i].qty}`);
                    return false
                } else {
                    cartList.splice(i, 1);
                    console.log(`Removed all ${item.name} from the cart.`);
                    this.finalLength()
                    return true
                }
                break; // Signifies the task is complete and no longer needs to run
            }
        }
    }


    intialLength(){
        const cartList = this.cartItems;
        const intialLength = cartList.length
        console.log(`The inital Length is ${intialLength}`)
    }


    finalLength(){
        const cartList = this.cartItems;
        const finalLength = cartList.length; // Get the length of the cart after the splice
        console.log(`The final Length is ${finalLength}`);
    }

    
    getTotalPrice(){
        const cartList = this.cartItems;
        
        let total = 0;

        for (let i = 0; i < cartList.length; i++) {
            total += cartList[i].qty * cartList[i].price
            
        }
        const formatTotal = total.toFixed(2)
        console.log(`Your total is $${formatTotal}`);

        return Number(formatTotal)
      
    }

    getTotalCount(){
        const cartList = this.cartItems;
      
        let count = 0;
      

        for (let i = 0; i < cartList.length; i++) {
            count += cartList[i].qty
        
            
        }

        if(count === 0){
            console.log(`There are no items in your inventory`);
            const countContainer = document.querySelector('.home-header-shopping-cart-icon-label');
            countContainer.textContent = "cart"
            
        }else{
            console.log(`You Have ${count} Items`);
            const countContainer = document.querySelector('.home-header-shopping-cart-icon-label');
            countContainer.textContent = ""
        }
       
        return count;
        
    }

    getQty(){
        let qty = 0;
        const cartList = this.cartItems;
        for( let i = 0; i < cartList.length; i++){
            qty += cartList[i].qty
        }
        return qty // make sure you write qty when you return.     
        
    }

    clearItems() {
        this.cartItems = [];
        console.log('Items Cleared')
        
    }
    
    cartTable(){
        let activeCart = this.cartItems
        const tableTest = document.querySelector("#cart-body")
        const span = document.querySelector(".order-top")
        const footer = document.querySelector(".order-footer-container")

        if(tableTest == null){
            console.log("NO")
        }else{
            const totalCount = this.getTotalCount()
            const qtyTable = `
            <h1>Your Cart</h1>
            <span>item total (${totalCount})</span>
        `;      
            const dataTable = activeCart.map(({ name, price, id, img, qty }) => {
                return `
               
                <tr class="cart-body">
                    <td class="item-image">
                        <img src="${img}">
                       
                    </td>
                    <td class="item-name">${name}</td>
                    <td class="item-price">${price}</td>
                    <td class="item-quantity">${qty}</td>
                    <td class="item-total">
                        <div>
                            <span>$${price * qty}</span>
                            
                            <button class="remove table-remove" data-id="${id}">remove</button> 
                        </div>
                    </td>
                    
                </tr>
            
                `;
            
            }).join('');
            const totalPrice = this.getTotalPrice(); // Call the getTotalPrice method
            const shipping = 10.65; // Replace 10 with your actual shipping cost
            const grandTotal = totalPrice + shipping;

const totalCalc = `

<div class="order-footer-wrapper">
<div class="subtotal-container">
    <span class="footer-heading">Subtotal: </span>
    <span>$${totalPrice.toFixed(2)}</span>
</div>
<div class="shipping-containerr">
<span class="footer-heading">Shipping: </span>
    <span>$${shipping.toFixed(2)}</span>
</div>
<div class="total-container">
    <span class="footer-heading footer-grand-total">Grand Total: </span>
    <span>$${grandTotal.toFixed(2)}</span>
</div>
</div>
`;      
        
            
            span.innerHTML = qtyTable
            tableTest.innerHTML = dataTable
            footer.innerHTML  = totalCalc

        }
        
    }
  
}
//=============End: Shopping Cart Classes=============

//=============Start: Shopping Cart DOM Manipulation=============

////______________________--------______--__-_-_-_-_--_--------____--_____-
let activeCart = new Cart();

//This domContnetLoaded makes sure the webiste is completely loaded. I had an issue with the remove event listener not working on the home page once content was loaded
document.addEventListener('DOMContentLoaded', function() {
    const productContainer = document.querySelector('.product-btn');
        
    productContainer.addEventListener('click', eventHandler);
    });

document.addEventListener('DOMContentLoaded', function() {
    const cartContainer = document.querySelector(".global-shopping-cart-items-list-container")
            
    cartContainer.addEventListener('click', eventHandlerTwo)
    });

document.addEventListener('DOMContentLoaded', function() {
    const productTable = document.querySelector("#cart-body")
                
    productTable.addEventListener('click', eventHandlerThree)
        });


////______________________--------______--__-_-_-_-_--_--------____--_____-

//Example:




let item



 // Declare the variable with broader scope
//Event Delegation
function eventHandler(event){
    
    switch (event.target.classList[0]) {
        case 'add':
            console.log('Add Clicked');
            addToCart(event) //must pass event into function now. Event is deprciated
            break;
        case 'remove':
            console.log('Remove Clicked');
            removeFromCart(event)
            break;
        case 'clear':
            console.log('Clear Clicked');
            clearCart()
            itemCount()
            totalPrice()
            break;
        default:
            console.log('Neither Clicked')
            console.log(event);
            console.log(event.target.classList[0]);
        
    }

}

function eventHandlerTwo(event){
    switch (event.target.classList[0]) {
        case 'remove':
            console.log('Remove Clicked');
            removeFromCart(event)
            break;
        case 'clear':
            console.log('Clear Clicked');
            clearCart()
            itemCount()
            totalPrice()
            break;
        default:
            console.log('Neither Clicked')
            console.log(event);
    }

}

function eventHandlerThree(event){
    switch (event.target.classList[0]) {
        case 'remove':
            console.log('Remove Clicked');
            removeFromCart(event)
            break;
        default:
            console.log('Neither Clicked')
            console.log(event);
    }

}

function addToCart(event) {
   
        const productInfo = JSON.parse(localStorage.getItem("products"))
        const productId = event.target.getAttribute('data-id');
      
        // Find the product based on the product ID
        let product = null;
        for (let i = 0; i < productInfo.length; i++) {
            if (productInfo[i].id == productId) {
                product = productInfo[i];
                break;
            }
            
        }
    
        if (product) {
            // Extract product information // This needs to be changed to grab the new JSON names
            const name = product.productName;
            const price = product.productPrice;
            const qty = product.qty // You can set the quantity to 1 when adding
            const img = product.mainImage;
            const id = product.id;
    
            // Create an item and add it to the cart
            const item = new Item(name, price, qty, img, id);
            activeCart.addItem(item);
           
            CreateElement(item)
            
            
            // Update the cart display
            displayCart();
        }
   

  
}

function removeFromCart(event) {
    const cart = activeCart.cartItems;
    const getID = event.target.getAttribute('data-id');

    for (let i = 0; i < cart.length; i++) {
        if (cart[i].id == getID) {
            const itemRemoved = activeCart.removeItem(cart[i]); // Check if an item was removed
            if (itemRemoved) {
                removeElement()
                console.log('Item was successfully removed');
            } else {
                console.log('Item Still Exists in the Cart');
            }
            DecreaseQty();
        }
    }
  
    displayCart();
}

 function DecreaseQty(){
    let cart = activeCart.cartItems
    let getID = event.target.getAttribute('data-id')
    for (let i in cart) {
        if (cart[i].id == getID ) {
            const itemContainer = document.querySelector(`li[data-id="${getID}"]`);
            const qtyElement = itemContainer.querySelector('.product-qty');
            qtyElement.textContent = `${cart[i].qty}x`;
            qtyElement.setAttribute('data-product-qty', cart[i].qty);
       }
    }
    
    
}


function removeElement(){
    let getID = event.target.getAttribute('data-id')
    const itemContainer = document.querySelector(`li[data-id="${getID}"]`);
    itemContainer.remove()
   
     
}

function clearCart() {
    // Now you can access the same "item" variable here
    const ul = document.querySelector('.global-shopping-cart-ul');

    while(ul.firstChild){
        ul.removeChild(ul.firstChild);
    }

    activeCart.clearItems(item);
    displayCart()
}

function itemCount() {
    


    
    const getTotal = activeCart.getTotalCount();
    const div = document.querySelector('.global-shopping-cart-list-quantity-container');

    // Select the <h1> element with the specific 'data-id' attribute
    const countContainer = div.querySelector('h3[data-id="2023"]');

    if (countContainer) {
        // If it exists, update it with the total count
        countContainer.textContent = `Item Total (${getTotal})`;
    } else {
        // If it doesn't exist, create a new element
        //This is where I can put the
        const newCountContainer = document.createElement("h3");
        newCountContainer.classList.add('global-shopping-cart-list-quantity-container-h3');
        newCountContainer.setAttribute('data-id', 2023);
        newCountContainer.textContent = `Item Total (${getTotal})`;
        div.appendChild(newCountContainer);
    }

    if (!getTotal === 0 || getTotal === 0){
        
        countContainer.textContent = `Your Cart is Empty`; 
    }
}

function itemCartCount(){


    const getTotal = activeCart.getTotalCount();
    const cart = document.querySelector('.home-header-shopping-cart-icon-label')
    const cartCountContainer = cart.querySelector('span[data-name="cartCounter"]');
   
    if(cartCountContainer){
        cartCountContainer.textContent = `| ${getTotal} items`
        
    }else{
        const newCartCountContainer = document.createElement("span")
        newCartCountContainer.classList.add('cartCounter')
        newCartCountContainer.setAttribute('data-name', 'cartCounter')
        newCartCountContainer.textContent = `| ${getTotal} items`;
        cart.appendChild(newCartCountContainer);
        
    }
    
    
    
}

function totalPrice(){
    console.log("totalPrice called");
    const getPrice = activeCart.getTotalPrice()
    const getUpdatedPrice = getPrice.toFixed(2)
    const div = document.querySelector('.global-shopping-cart-items-footer-container')

    const formatTotalPrice = div.querySelector('h2[data-id="priceIndicator"]')

    if(formatTotalPrice ){
        formatTotalPrice .textContent = `Total: $${getUpdatedPrice}`;
    } else{
        const totalPrice = document.createElement('h2');
        totalPrice.classList.add('global-shopping-cart-item-footer-h2');
        totalPrice.setAttribute('data-id', 'priceIndicator')
        totalPrice.textContent = `Total: $${getUpdatedPrice}`;
        div.appendChild(totalPrice);
    }
    
}

function CreateElement(item) {

    const ul = document.querySelector('.global-shopping-cart-ul');
    const existingItem = ul.querySelector(`li[data-id="${item.id}"]`);
    let cartDisplay = activeCart.cartItems;
    
    if (existingItem) {
        for (let i = 0; i < cartDisplay.length; i++) {
            if (cartDisplay[i].id === item.id) {
                const qtyElement = existingItem.querySelector('.product-qty');
                qtyElement.textContent = `${cartDisplay[i].qty}x`;
                qtyElement.setAttribute('data-product-qty', cartDisplay[i].qty);
                
                break; // Exit the loop once the item is found and updated
            }
        }

      ;
       /*  // If an item with the same ID already exists, update the quantity
         */
    } else {
        // If the item doesn't exist, create a new list item
        const parentLi = document.createElement('li');
        parentLi.classList.add('global-shopping-cart-li')
        parentLi.setAttribute('data-id', item.id);
        parentLi.setAttribute('data-description', "removal");
        const firstDiv = document.createElement('div')
        firstDiv.classList.add('global-shopping-cart-li-content-container')
        firstDiv.setAttribute('data-info', 'products')
   
        const productTitle =document.createElement('h4')
        productTitle.classList.add('product-name')
        productTitle.setAttribute('data-product-title', item.name)
        productTitle.textContent = item.name
        const productPrice = document.createElement('span')
        productPrice.classList.add('product-price')
        productPrice.setAttribute('data-product-price', item.price)
        productPrice.textContent = `$${item.price}`
        
    //-------------------
    
        const secondDiv = document.createElement('div')
        secondDiv.classList.add('global-shopping-cart-li-remove-container')
        secondDiv.setAttribute('data-product-price', '')
        const removeButton =document.createElement('button')
        removeButton.classList.add('remove')
        removeButton.setAttribute('data-id', item.id)
        removeButton.textContent = "remove"

    //-------------------

        const qtyDiv = document.createElement('div')
        qtyDiv.classList.add('global-shopping-cart-qty-container')
        const productQty = document.createElement('p')
        productQty.classList.add('product-qty')
        productQty.setAttribute('data-product-qty', item.qty)
        productQty.textContent = `${item.qty}x`
    
    //-------------------
    
    const thridDiv = document.createElement('div')
    thridDiv.classList.add('global-shopping-cart-li-image-container')
    thridDiv.setAttribute('data-id', '')
    const productImg =document.createElement('img')
    productImg.setAttribute('src',item.img )
    


    //Append Actions
    firstDiv.append(productTitle,productPrice)
    secondDiv.append(removeButton)
    thridDiv.append(productImg)
    qtyDiv.append(productQty)
    parentLi.append(qtyDiv,thridDiv,firstDiv,secondDiv,);
    ul.append(parentLi)  
    }
    
    //Icon Numbers
}


//TEST IS FOR THE EMPTY CART PROBLEM I HAVE

function test() {
    const activeCartValue = localStorage.getItem('activeCart');

    console.log(activeCartValue)

    if(activeCartValue === '[]'){
        const cartCountContainer = document.querySelector('span[data-name="cartCounter"]');
        cartCountContainer.textContent = ""
    }else{
        console.log('not emptyyyyyyyyyy')
    }
  


}




function displayCart(){
    itemCount()
    totalPrice()
    
    activeCart.cartTable()
    itemCartCount()
    console.log('display cart activated')
    
    activeCart.saveCart()
    test()
    


}

test()
displayCart()

//=============END: Shopping Cart DOM Manipulation=============
// NOW FOR JSON DATA