$(function () {
    toggleMenu();
});
function toggleMenu() {
    $('.icon-menu').on('click', function (e) {
        $('body').toggleClass('no-scroll');
        $(this).toggleClass('open');
        $(".navbar-menu").toggleClass('open');
    });
}
