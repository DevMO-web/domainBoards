let update = document.querySelector('[data-id="edit"]');

console.log(update)


const endpoint = ('/update')


let productOverview = document.querySelector('textarea[name="productOverview"]')


console.log(productOverview)

//The Save Button Event Listener will run the  async function
update.addEventListener('click', updateProducts)

//The async function will get the vaule inside the form
async function updateProducts(event){
    //
    const urlParams = new URLSearchParams(window.location.search);

    // Get the 'id' parameter value
    const id = urlParams.get('id');
    
    // Check if the 'id' parameter is present
    if (id !== null) {
      console.log('ID from URL:', id);
    } else {
      console.log('ID parameter is not defined in the URL');
    }


    let productCollection = document.querySelector('input[name="productCollection"]').value
    let productName = document.querySelector('input[name="productName"]').value
    let productNameFix = productName.toUpperCase();
    let productPrice = document.querySelector('input[name="productPrice"]').value
    let productDesc = document.querySelector('textarea[name="productDesc"]').value
    let productShipping = document.querySelector('textarea[name="productShipping"]').value
    let productDetails = document.querySelector('textarea[name="productDetails"]').value
    let productDimensions = document.querySelector('textarea[name="productDimensions"]').value
    let productOverview = document.querySelector('textarea[name="productOverview"]').value
    let productGuide = document.querySelector('textarea[name="productGuide"]').value

    let values = {
        collection: productCollection,
        name: productNameFix,
        price: productPrice,
        description: productDesc,
        shipping: productShipping,
        details: productDetails,
        dimensions: productDimensions,
        overview: productOverview,
        guide: productGuide,
        id: id
    }

    let jsonstring = JSON.stringify(values)


    let request = new Request(endpoint, {
        method: 'POST',
        body: jsonstring,
        headers: {
            'content-type': 'application/json'
        }
    })

    fetch(request)
    .then(response =>{
        if(!response.ok) throw new Error('invalid')
        return response.text()
    })
    .then((txt) =>{
        console.log(txt)

        
    })
    .catch(console.warn)
}

