/*class ve id ile kodları bağlıyorum*/
const searchFrom = document.querySelector(".search-form");
/* buttons */
const searchBtn = document.querySelector("#search-btn");
const navbar = document.querySelector(".navbar");

//!buttons
const menuBtn = document.querySelector("#menu-btn");


/*arama butonuna tıklandığında buton çalışması için*/

searchBtn.addEventListener("click", function () {   /*tıklanma olayı */
    searchFrom.classList.toggle("active"); /*aktive edildi */
});

menuBtn.addEventListener("click", function () {
    navbar.classList.toggle("active");
    document.addEventListener("click", function (e) {
        if (
            !e.composedPath().includes(menuBtn) &&
            !e.composedPath().includes(navbar)
        ) {
        navbar.classList.remove("active");
        }
    });
});
