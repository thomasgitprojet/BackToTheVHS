/**
 * Get current global token value.
 * @returns 
 */
function getToken() {
    return document.getElementById('token').value;
}

/**
 * Display error message with template
 * @param {string} errorMessage 
 */
function displayError(errorMessage) {
    // const li = document.importNode(document.getElementById('templateError').content, true);
    // console.log(li.querySelector('[data-error-message]'));
    // const m = li.querySelector('[data-error-message]');
    // m.innerText = errorMessage;
    // document.getElementById('errorsList').appendChild(li);
    // setTimeout(() => m.remove(), 2000);
    console.error(errorMessage);
}

/**
 * Display message with template
 * @param {string} message 
 */
function displayMessage(message) {
//     const li = document.importNode(document.getElementById('templateMessage').content, true);
//     const m = li.querySelector('[data-message]')
//     m.innerText = message;
//     document.getElementById('messagesList').append(li);
//     setTimeout(() => m.remove(), 2000);
    console.log(message);
}

/**
 * Generate asynchronous call to api.php with parameters
 * @param {*} method GET, POST, PUT or DELETE
 * @param {*} params An object with data to send.
 * @returns 
 */
async function callAPI(method, params) {
    try {
        const response = await fetch("api.php", {
            method: method,
            body: JSON.stringify(params),
            headers: {
                'Content-type': 'application/json'
            }
        });
        const dataResponse = await response.json();
        return dataResponse;
    }
    catch (error) {
        console.error("Unable to load datas from server : " + error);
    }
}

/**
 * Create a new product
 * 
 * @param {object} data New user data
 * @returns 
 */
export function addUser(data) {

    if (!data.name.length) {
        displayError("Nom de produit invalide.");
        return;
    }

    //TO DO ajouter d'autre vérifications

    data.token = getToken();
    if (!data.token.length) {
        displayError("Jeton invalide.");
        return;
    }

    data.action = 'create';

    callAPI('POST', data)
        .then(output => {
            if (!output.isOk) {
                displayError(data.errorMessage);
                return;
            }

            displayMessage(output.message);
        });
}

/**
 * Get the list of products for sale
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProducts(elementParent, dataBase) {
    for (let object of dataBase) {
        const productTemplate = document.getElementById('productTemplate');
        const product = document.importNode(productTemplate.content, true);
        product.querySelector(".js-product__img").src = object.img;
        product.querySelector(".product-tlt").textContent = object.title;
        product.querySelector(".product-price").textContent = object.price + "€";
        product.querySelector(".product__date").textContent = object.date;

        elementParent.appendChild(product);
    }
}

/**
 * Get the list of products for sale by order decreasing price
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProductsByOrderdecreasingPrice(elementParent, dataBase) {
    dataBase.sort(function (a, b) {
        return a.price - b.price;
    })

    dataBase.forEach(function (p) {

        const productTemplate = document.getElementById('productTemplate');
        const product = document.importNode(productTemplate.content, true);
        product.querySelector(".js-product__img").src = p.img;
        product.querySelector(".product-tlt").textContent = p.title;
        product.querySelector(".product-price").textContent = p.price + "€";
        product.querySelector(".product__date").textContent = p.date;

        elementParent.appendChild(product);

    })
}

/**
 * Get the list of products for sale by order increasing price
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProductsByOrderincreasingPrice(elementParent, dataBase) {
    dataBase.sort(function (a, b) {
        return b.price - a.price;
    })

    dataBase.forEach(function (p) {

        const productTemplate = document.getElementById('productTemplate');
        const product = document.importNode(productTemplate.content, true);
        product.querySelector(".js-product__img").src = p.img;
        product.querySelector(".product-tlt").textContent = p.title;
        product.querySelector(".product-price").textContent = p.price + "€";
        product.querySelector(".product__date").textContent = p.date;

        elementParent.appendChild(product);

    })
}

/**
 * calcul the age of product 
 * @param {string} date in the format jj/mm/aaaa
 * @returns age of product in number
 */
function ageOfVHS(date) {
    const age = new Date(date);
    let ageVHS = (new Date(Date.now() - age)).getFullYear() - 1970;
    return ageVHS
}

/**
 * Get the list of products for sale by order decreasing date
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProductsByOrderdecreasingDate (elementParent, dataBase) {
    dataBase.sort(function (a, b) { 
        return ageOfVHS(a.date) - ageOfVHS(b.date);
    })

    dataBase.forEach(function (p) {

        const productTemplate = document.getElementById('productTemplate');
        const product = document.importNode(productTemplate.content, true);
        product.querySelector(".js-product__img").src = p.img;
        product.querySelector(".product-tlt").textContent = p.title;
        product.querySelector(".product-price").textContent = p.price + "€";
        product.querySelector(".product__date").textContent = p.date;

        elementParent.appendChild(product);

    })
}

/**
 * Get the list of products for sale by order increasing date
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProductsByOrderincreasingDate (elementParent, dataBase) {
    dataBase.sort(function (a, b) { 
        return ageOfVHS(b.date) - ageOfVHS(a.date);
    })

    dataBase.forEach(function (p) {

        const productTemplate = document.getElementById('productTemplate');
        const product = document.importNode(productTemplate.content, true);
        product.querySelector(".js-product__img").src = p.img;
        product.querySelector(".product-tlt").textContent = p.title;
        product.querySelector(".product-price").textContent = p.price + "€";
        product.querySelector(".product__date").textContent = p.date;

        elementParent.appendChild(product);

    })
}
/**
 * Change class of the menu page for to open
 * @param {element} element 
 * @param {*element} navElement 
 */
function openMenu (element, navElement) {
    element.addEventListener("click", function() {
        navElement.classList.remove("nav__page-close");
        navElement.classList.add("nav__page-open");
    })
}

/**
 * Change class of the menu page for to close
 * @param {element} element 
 * @param {*element} navElement 
 */
function closeMenu (element, navElement) {
    element.addEventListener("click", function() {
        navElement.classList.remove("nav__page-open");
        navElement.classList.add("nav__page-close");
    
    })
}

export default {
    getProducts,
    getProductsByOrderdecreasingPrice,
    getProductsByOrderincreasingPrice,
    ageOfVHS,
    getProductsByOrderdecreasingDate,
    getProductsByOrderincreasingDate,
    openMenu,
    closeMenu
}