$(document).ready(function(){
    let menuMobile=$('.mobile-menu');
    let menu=$('.menu_mob');
    menuMobile.click(function(){
        menuMobile.toggleClass('mobile-menu_active');
        menu.toggleClass('menu_active');
    });

});
