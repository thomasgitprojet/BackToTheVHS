const btnMoreInfos = document.querySelector(".js-btn");
const moreInfo = document.querySelector(".content__more-infos")


btnMoreInfos.addEventListener("click", function(){
    moreInfo.classList.toggle("hidden")
})