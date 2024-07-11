import Tools from "./functions.js";

const dataBase = [
    {
        title: "Abyss",
        price: 13,
        date: "10/10/1989",
        img: "img/abyss.jpg",
    },
    {
        title: "bloodsport",
        price: 11,
        date: "10/10/1990",
        img: "img/bloodsport.jpg",
    },
    {
        title: "Double Impact",
        price: 11,
        date: "10/10/1992",
        img: "img/double impact.jpg"
    },
    {
        title: "Dracula",
        price: 15,
        date: "10/10/1994",
        img: "img/dracula.jpg"
    },
    {
        title: "Dumb and Dumber",
        price: 18,
        date: "10/10/1995",
        img: "img/dumb and dumber.jpg"
    },
    {
        title: "Jurassic Park",
        price: 16,
        date: "10/10/1993",
        img: "img/jurassic parck.jpg"
    },
    {
        title: "Mélodie du Sud",
        price: 50,
        date: "10/10/1978",
        img: "img/mélodie du sud.jpg"
    },
    {
        title: "Les Goonies",
        price: 20,
        date: "10/10/1984",
        img: "img/les goonies.jpg"
    }
]


const ul = document.querySelector(".js-product__lst");
const selectOrderPrice = document.querySelector(".input__select-priceOrder");
const selectOrderDate = document.querySelector(".input__select-dateOrder");
const openMenu = document.querySelector(".menu-close");
const closeMenu = document.querySelector(".nav__page-close__img")
const navPage = document.querySelector(".nav__page-close");

Tools.getProducts(ul, dataBase);
Tools.openMenu(openMenu, navPage);
Tools.closeMenu(closeMenu, navPage);

selectOrderPrice.addEventListener("change", function (event) {
    if (event.target.value === "1") {
        const ulContent = document.querySelectorAll(".js-product__itm");
        for (let li of ulContent) {
            li.parentElement.removeChild(li);
        }
        Tools.getProductsByOrderdecreasingPrice(ul, dataBase);
    } else if (event.target.value === "2") {
        const ulContent = document.querySelectorAll(".js-product__itm");
        for (let li of ulContent) {
            li.parentElement.removeChild(li);
        }
        Tools.getProductsByOrderincreasingPrice(ul, dataBase)
    }
})

selectOrderDate.addEventListener("change", function (event) {
    if (event.target.value === "3") {
        const ulContent = document.querySelectorAll(".js-product__itm");
        for (let li of ulContent) {
            li.parentElement.removeChild(li);
        }
        Tools.getProductsByOrderdecreasingDate(ul, dataBase);
    } else if (event.target.value === "4") {
        const ulContent = document.querySelectorAll(".js-product__itm");
        for (let li of ulContent) {
            li.parentElement.removeChild(li);
        }
        Tools.getProductsByOrderincreasingDate(ul, dataBase)
    }
    console.log(event.target.value);
})









