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
(function() { 
  // on cible l'objet nav
  let objNav = document.querySelector("nav");
  // on mémorise la position de nav
  let memoPositionNav = objNav.offsetTop;
  function sticky(){
    // position du curseur au scroll
    var posCurseur = this.pageYOffset;
    // je teste la différence de distance entre le scroll et nav
    if(memoPositionNav-posCurseur<1){
      objNav.classList.add("sticky")
    }
    if(posCurseur<101){
      objNav.classList.remove("sticky");
    }
  }
  // evenement
  window.addEventListener("scroll", sticky);
})()