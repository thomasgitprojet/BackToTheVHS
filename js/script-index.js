import Tools from "./functions.js";

const openMenu = document.querySelector(".menu-close");
const closeMenu = document.querySelector(".nav__page-close__img")
const navPage = document.querySelector(".nav__page-close");
const btnMoreInfos = document.querySelector(".js-btn");
const moreInfo = document.querySelector(".content__more-infos");


// openMenu.addEventListener("click", function() {
//     navPage.classList.remove("nav__page-close");
//     navPage.classList.add("nav__page-open");

// })
Tools.openMenu(openMenu, navPage);
Tools.closeMenu(closeMenu, navPage);

// closeMenu.addEventListener("click", function() {
//     navPage.classList.remove("nav__page-open");
//     navPage.classList.add("nav__page-close");

// })

btnMoreInfos.addEventListener("click", function(){
    moreInfo.classList.toggle("hidden")
})