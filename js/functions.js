/**
 * create elemnt of template
 * @param {*} object object of the loop from dataBase
 * @param {*} elementParent 
 */
function creatTemplate (object, elementParent) {
    const productTemplate = document.getElementById('productTemplate');
    const product = document.importNode(productTemplate.content, true);
    product.querySelector(".js-product__img").src = object.img;
    product.querySelector(".product-tlt").textContent = object.title;
    product.querySelector(".product-price").textContent = object.price + "€";
    product.querySelector(".product__date").textContent = object.date;

    elementParent.appendChild(product);
}

/**
 * Get the list of products for sale
 * @param {element} elementParent element parent of template
 * @param {array} dataBase data base of products
 */
function getProducts(elementParent, dataBase) {
    for (let object of dataBase) {
        creatTemplate (object, elementParent)
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
        creatTemplate (p, elementParent)
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
        creatTemplate (p, elementParent)
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
        creatTemplate (p, elementParent)
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
        creatTemplate (p, elementParent)
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