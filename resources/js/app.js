import './bootstrap';
// import '../css/main.css';
import '../css/cifor.css';
import '@fortawesome/fontawesome-free/css/all.css';
import jQuery from 'jquery';
import Toastify from 'toastify-js';
import 'toastify-js/src/toastify.css';
import 'toastify-js/src/toastify.js';
window.$ = window.jQuery = jQuery;
window.Toastify = Toastify;

$.fn.cfShow = function() {
    if(this.hasClass('cf-modal')) {
        this.css('display', 'flex');
    }
}

$.fn.cfHide = function() {
    const attr = $(this).attr('backdrop-static');
    if(this.hasClass('cf-modal')) {
        if(typeof attr === 'undefined') {
            this.css('display', 'none');
        }
    }
}

$('.m-close').on('click', function() {
    $(this).parentsUntil('.cf-modal').parent().cfHide();
});

$('.cf-modal').on('click', function() {
    if(!this.hasAttribute('backdrop-static')) {
        $(this).cfHide();
    }
});

$('.dropdown-toggle').on('click', function() {
    $('.dropdown-menu').toggle();
});

window.addEventListener("click", function (e) {
    if (!e.target.matches(".dropdown-toggle")) {
        document.querySelectorAll(".dropdown-menu").forEach((menu) => {
            if (!menu.contains(e.target)) {
                $(menu).toggle();
            }
        });
    }
});