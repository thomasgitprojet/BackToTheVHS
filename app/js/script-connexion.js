import Tools from "./functions.js";

const openMenu = document.querySelector(".menu-close");
const closeMenu = document.querySelector(".nav__page-close__img")
const navPage = document.querySelector(".nav__page-close");
let form = document.getElementById('addUser');

Tools.openMenu(openMenu, navPage);
Tools.closeMenu(closeMenu, navPage);