import Tools from "./functions.js";

const openMenu = document.querySelector(".menu-close");
const closeMenu = document.querySelector(".nav__page-close__img")
const navPage = document.querySelector(".nav__page-close");
let form = document.getElementById('addUser');

Tools.openMenu(openMenu, navPage);
Tools.closeMenu(closeMenu, navPage);

// form.addEventListener("submit", function (event) {
//     event.preventDefault();

//     Tools.addUser ({
//         name: this.querySelector('[name="name"]').value,
//         lastName: this.querySelector('[name="lastName"]').value,
//         pseudo: this.querySelector('[name="pseudo"]').value,
//         birthday: this.querySelector('[name="birthday"]').value,
//         email: this.querySelector('[name="email"]').value,
//         pwd: this.querySelector('[name="pwd"]').value
//     })
//     form.reset();
// })