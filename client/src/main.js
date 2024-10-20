// import { ProductData } from "./data/product.js";
// import { ProductView } from "./ui/product/index.js";
import { NavbarData } from "./data/nav.js";
import { NavbarView } from "./ui/product/index.js";

import './output.css';
import { ProductData } from "./data/product.js";
import { ProductView } from "./ui/product/index.js";

let C = {}

// C.init = async function(){
//     let data = await ProductData.fetchAll();
//     let html = ProductView.render(data);
//     document.querySelector("#main").innerHTML = html;
// }

// C.init = async function(){
//     let data = await NavbarData.fetchAll();
//     if (!Array.isArray(data)) {
//         console.error("Fetched data is not an array:", data);
//         return;
//     }
//     let html = NavbarView.render(data);
//     document.querySelector("#main").innerHTML = html;
// }

let V = {};

V.renderMea = async function(){
    let response = await fetch('./src/ui/product/mea.html.inc');
    let megaHtml = await response.text();
    let meaDiv = document.createElement('div');
    meaDiv.innerHTML = megaHtml;
    document.querySelector("#main").appendChild(meaDiv);
};

V.renderNavbar = async function(){
    let response = await fetch('./src/ui/product/research.html.inc');
    let searchHtml = await response.text();
    let searchDiv = document.createElement('div');
    searchDiv.innerHTML = searchHtml;
    document.querySelector("#main").appendChild(searchDiv);
    C.loadnavbar(); // Ensure loadnavbar is called after the HTML is loaded
}


V.init = async function(){
    await V.renderMea(); // Ensure renderMea is awaited
    await V.renderNavbar(); // Ensure renderNavbar is awaited
};

C.loadnavbar = async function(){
    let megaMenu = document.getElementById("mega-menu");
    let panier = document.getElementById("panierMenu");
    let searchMenu = document.getElementById("searchMenu");
    
    document.querySelector(".burger").addEventListener("click", function () {
        megaMenu.classList.toggle("right-full");
        megaMenu.classList.toggle("translate-x-0");
    });
    
    let openerPanier = document.getElementById("openPanier");
    openerPanier.addEventListener("click", function () {
        panier.classList.toggle("hidden");
    });
    
    let closerPanier = document.getElementById("closePanier");
    closerPanier.addEventListener("click", function () {
        panier.classList.toggle("hidden");
    });
    
    let openerSearch = document.getElementById("searchingButton");
    openerSearch.addEventListener("click", function () {
        searchMenu.classList.toggle("hidden");
    });
    
    let closerSearch = document.getElementById("closeSearch");
    closerSearch.addEventListener("click", function () {
        searchMenu.classList.toggle("hidden");
    });
    
    document.addEventListener("click", function (event) {
        let isClickInsidePanier = panier.contains(event.target);
        let isClickInsideMegaMenu = megaMenu.contains(event.target);
        let isClickOnOpenerPanier = openerPanier.contains(event.target);
        let isClickOnBurger = document.querySelector(".burger").contains(event.target);
    
        if (!isClickInsidePanier && !isClickOnOpenerPanier) {
            panier.classList.add("hidden");
        }
    
        if (!isClickInsideMegaMenu && !isClickOnBurger) {
            megaMenu.classList.add("right-full");
            megaMenu.classList.remove("translate-x-0");
        }
    });
}

C.init = async function(){
    await V.init(); // Ensure V.init is awaited
}

C.init();
