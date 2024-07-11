import Tools from "./functions.js";

const openMenu = document.querySelector(".menu-close");
const closeMenu = document.querySelector(".nav__page-close__img")
const navPage = document.querySelector(".nav__page-close");
const btnMoreInfos = document.querySelector(".js-btn");
const moreInfo = document.querySelector(".content__more-infos");


Tools.openMenu(openMenu, navPage);
Tools.closeMenu(closeMenu, navPage);

btnMoreInfos.addEventListener("click", function(){
    moreInfo.classList.toggle("hidden")
})