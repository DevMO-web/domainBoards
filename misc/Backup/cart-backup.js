//JSON Data Expirement

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
        "name": "Wetsuit",
        "price": 37.08,
        "img": "Slapper.jpg"
    },
    {
        "id": 3,
        "name": "Fins",
        "price": 45.70,
        "img": "Flipper.jpg"
    },
      {
        "id": 4,
        "name": "Darfle",
        "price": 900,
        "img": "dar.jpg"
    }
]
`;
const productInfo = JSON.parse(jsonDataString);
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
    constructor(){
        this.cartItems = []
        
    }

    saveCart(){
        sessionStorage.setItem('activeCart', JSON.stringify(this.cartItems));
    }

    loadCart(){
        this.cartItems = JSON.parse(sessionStorage.getItem('activeCart'));
    }

    testCart(){
    if (sessionStorage.getItem('activeCart') != null){
        loadCart()
    }}

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
        }else{
            console.log(`You Have ${count} Items`);
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
  
}

////______________________--------______--__-_-_-_-_--_--------____--_____-


const productContainer = document.querySelector('.product-btn')
productContainer.addEventListener('click', eventHandler);

const cartContainer = document.querySelector(".global-shopping-cart-items-list-container")
cartContainer.addEventListener('click', eventHandlerTwo)
////______________________--------______--__-_-_-_-_--_--------____--_____-

//Example:

let activeCart = new Cart();
let item

 // Declare the variable with broader scope
//Event Delegation
function eventHandler(event){
    
    switch (event.target.classList[0]) {
        case 'add':
            console.log('Add Clicked');
            addToCart()
            break;
        case 'remove':
            console.log('Remove Clicked');
            removeFromCart()
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
            removeFromCart()
            break;
        case 'clear':
            console.log('Clear Clicked');
            clearCart()
            itemCount()
            totalPrice()
            break;
        default:
            console.log('Neither Clicked')
            console.log(e);
    }

}

function addToCart() {
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
        // Extract product information
        const name = product.name;
        const price = product.price;
        const qty = product.qty // You can set the quantity to 1 when adding
        const img = product.img;
        const id = product.id;

        // Create an item and add it to the cart
        const item = new Item(name, price, qty, img, id);
        activeCart.addItem(item);
       
        CreateElement(item)
        
        activeCart.saveCart();
        // Update the cart display
        displayCart(activeCart);
    }
}

function removeFromCart() {
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
    activeCart.saveCart();
    displayCart(activeCart);
}

 function DecreaseQty(){
    let cart = activeCart.cartItems
    let getID = event.target.getAttribute('data-id')
    for (let i in cart) {
        if (cart[i].id == getID ) {
            const itemContainer = document.querySelector(`li[data-id="${getID}"]`);
            const qtyElement = itemContainer.querySelector('.product-qty');
            qtyElement.textContent = parseInt(cart[i].qty);
            qtyElement.setAttribute('data-product-qty', cart[i].qty);
       }
    }
    activeCart.saveCart();
    displayCart(activeCart);
}


function removeElement(){
    let getID = event.target.getAttribute('data-id')
    const itemContainer = document.querySelector(`li[data-id="${getID}"]`);
    itemContainer.remove()
    activeCart.saveCart();
    displayCart(activeCart);   
}

function clearCart() {
    // Now you can access the same "item" variable here
    const ul = document.querySelector('.global-shopping-cart-ul');

    while(ul.firstChild){
        ul.removeChild(ul.firstChild);
    }

    activeCart.clearItems(item);
    activeCart.saveCart()
}

function itemCount() {
    const getTotal = activeCart.getTotalCount();
    const div = document.querySelector('.global-shopping-cart-list-quantity-container');

    // Select the <h1> element with the specific 'data-id' attribute
    const countContainer = div.querySelector('h3[data-id="2023"]');

    if (countContainer) {
        // If it exists, update it with the total count
        countContainer.textContent = `Item Total(${getTotal})`;
    } else {
        // If it doesn't exist, create a new element
        const newCountContainer = document.createElement("h3");
        newCountContainer.classList.add('global-shopping-cart-list-quantity-container-h3');
        newCountContainer.setAttribute('data-id', 2023);
        newCountContainer.textContent = `Item Total(${getTotal})`;
        div.appendChild(newCountContainer);
    }

    if (getTotal === 0){
        
        countContainer.textContent = `Your Cart is Empty`; 
    }
}

function totalPrice(){
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
                qtyElement.textContent = parseInt(cartDisplay[i].qty);
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
        const productQty = document.createElement('p')
        productQty.classList.add('product-qty')
        productQty.setAttribute('data-product-qty', item.qty)
        productQty.textContent = item.qty
    //-------------------
    
        const secondDiv = document.createElement('div')
        secondDiv.classList.add('product-price')
        secondDiv.setAttribute('data-product-price', '')
        const removeButton =document.createElement('button')
        removeButton.classList.add('remove')
        removeButton.setAttribute('data-id', item.id)
        removeButton.textContent = "remove"

    //-------------------
    
    const thridDiv = document.createElement('div')
    thridDiv.classList.add('product-img-container')
    thridDiv.setAttribute('data-id', '')
    const productImg =document.createElement('img')
    productImg.classList.add('product-img')
    productImg.setAttribute('data-id',"" )


    //Append Actions
    firstDiv.append(productTitle,productPrice,productQty)
    secondDiv.append(removeButton)
    thridDiv.append(productImg)
    parentLi.append(firstDiv,secondDiv,thridDiv);
    ul.append(parentLi)  
    }
}



function displayCart(activeCart){
    itemCount()
    totalPrice()
    console.log('display cart activated')
    activeCart.saveCart()
    activeCart.loadCart()
    activeCart.testCart()
}

displayCart(activeCart)