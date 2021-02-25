$(function() {
    $('.c-menu').click(function() {
        $('.p-sidebar').addClass('js-open');
        $('body').addClass('js-open');
        $('.l-header__left').addClass('js-open');
        $('.c-search').addClass('js-open');
        $('.c-submit').addClass('js-open');
    });

    $('.c-close').click(function() {
        $('.p-sidebar').removeClass('js-open');
        $('body').removeClass('js-open');
        $('.l-header__left').removeClass('js-open');
        $('.c-search').removeClass('js-open');
        $('.c-submit').removeClass('js-open');
    })
});