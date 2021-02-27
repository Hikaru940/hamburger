$(function() {
    $('.c-menu').click(function() {
        $('.p-sidebar').addClass('js-open');
        $('body').addClass('js-open');
        $('.c-black-bg').addClass('js-black-bg');
    });

    $('.c-close').click(function() {
        $('.p-sidebar').removeClass('js-open');
        $('body').removeClass('js-open');
        $('.c-black-bg').removeClass('js-black-bg');
    })
});