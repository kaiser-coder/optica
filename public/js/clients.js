$(document).on('click', '#search-btn', function() {
    $('.search-form').toggleClass('active');
    $('.shopping-cart').removeClass('active');
    $('.login-form').removeClass('active');
    $('.navbar').removeClass('active');
});
$(document).on('click', '#cart-btn', function() {
    $('.shopping-cart').toggleClass('active');
    $('.search-form').removeClass('active');
    $('.login-form').removeClass('active');
    $('.navbar').removeClass('active');
});
$(document).on('click', '#user-btn', function() {
    $('.login-form').toggleClass('active');
    $('.search-form').removeClass('active');
    $('.shopping-cart').removeClass('active');
    $('.navbar').removeClass('active');
});

$(document).on('click', '#menu-btn', function() {
    $('.navbar').toggleClass('active');
    $('.search-form').removeClass('active');
    $('.shopping-cart').removeClass('active');
    $('.login-form').removeClass('active');
});

// image galery Js
$(document).on('click', '.gal', function() {
    $(".gal").removeClass("actifs");
    $(this).addClass("actifs");
});
