$(function () {
    toggleMenu();
    servicesSlider();
});
function toggleMenu() {
    $('.icon-menu').on('click', function (e) {
        $('body').toggleClass('no-scroll');
        $(this).toggleClass('open');
        $(".navbar-menu").toggleClass('open');
    });
}
function servicesSlider(){
    $('.services-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
              }
            }
          ]
      });
}
console.log("hello worldd")