const blockMenu = document.getElementsByClassName("block-menu");
let btnMenuShow = document.getElementById("btnMenuShow");
let btnMenuHide = document.getElementById("btnMenuHide");

// Show menu
btnMenuShow.addEventListener("click", function(e){
    e.preventDefault();
    blockMenu[0].classList.add("menu-expand");
    document.querySelectorAll('html, body').forEach(node => node.style.height = '100%');
    document.querySelectorAll('html, body').forEach(node => node.style.overflow = 'hidden');
});

// Hide menu
btnMenuHide.addEventListener("click", function(e){
    e.preventDefault();
    blockMenu[0].classList.remove("menu-expand");
    document.querySelectorAll('html, body').forEach(node => node.style.height = 'auto');
    document.querySelectorAll('html, body').forEach(node => node.style.overflow = 'auto');
});


// Search form
let toggleFormSearch = document.getElementById("toggleFormSearch");
let formSearch = document.getElementById("form-search");

toggleFormSearch.addEventListener("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    formSearch.classList.toggle("form-show");
});
formSearch.addEventListener("click", function(e){
    e.stopPropagation();
});
document.addEventListener("click", function(){
    formSearch.classList.remove('form-show');
});


/*$(document).ready(function(){

	"use strict";

    // Menu show/hide    

    $('#btnMenuShow').click(function(event){
        event.preventDefault();
        $('.block-menu').addClass('menu-expand', 500);
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    });

    $('#btnMenuHide').click(function(event){
        event.preventDefault();
        $('.block-menu').removeClass('menu-expand', 500);
        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
    });
	
    // Searchform
    $('#toggleFormSearch').click(function(event){
        event.preventDefault();
        event.stopPropagation();

        $('#form-search').toggleClass('form-show', 500);
    });
    $('#form-search').click(function(event){
        event.stopPropagation();
    });

    $(document).click(function() {
        $('#form-search').removeClass('form-show');
    });
});
*/