// assets/app.js
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import "./sass/application.scss";

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

document.addEventListener("DOMContentLoaded", function () {
    let articleContent = document.getElementsByClassName("article-content-input");
    let menu = document.getElementById("nav-burger");
    let flash = document.getElementById("flash");
    let navLinks = document.getElementById("nav-link-items");

    //let cvWrapper = document.getElementById("cv-wrapper");
    let cvImg = document.getElementById("cv-img");

    /*******************************************************/
    /**********************Popup Img************************/
    /*******************************************************/

    //Start event on click
    let popupManage = function popup() {
        cvImg.classList.toggle("opened");
    };

    //This function is like jQuery fadeOut
    function fadeOut(item) {
        let fadeEffect = setInterval(function () {
            if (!item.style.opacity) {
                item.style.opacity = 1;
            }
            if (item.style.opacity > 0) {
                item.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
            }
        }, 300);
    }

    /*******************************************************/
    /************************FLASH**************************/
    /*******************************************************/
    let flashClosed = function () {
        flash.style.display = "none";
    };

    /*******************************************************/
    /*********************BURGER MENU***********************/
    /*******************************************************/
    let toggle = function () {
        navLinks.classList.toggle("show");
        menu.classList.toggle("clicked");
    };

    /*******************************************************/
    /***************LAUNCH FUNCTIONS ON LOAD****************/
    /*******************************************************/
    window.onload = function () {
        menu.addEventListener("click", toggle);
        if(flash){
            flash.addEventListener("click", flashClosed);
        }
        //cvWrapper.addEventListener("click", popupManage);
        //cvImg.addEventListener("click", popupManage);
    };

    /*******************************************************/
    /**********************TinyCME**************************/
    /*******************************************************/
    if (articleContent.length > 0) {
        tinymce.init({
            selector: ".article-content-input",
            plugins: "link",
        });
    }
});
