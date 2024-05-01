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

export default {
    getProducts,
    getProductsByOrderdecreasingPrice,
    getProductsByOrderincreasingPrice,
    ageOfVHS,
    getProductsByOrderdecreasingDate,
    getProductsByOrderincreasingDate
}