$(function () {
    toggleMenu();
    servicesSlider();
    formsStyle() ;
    validationFormsError()
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
        arrows: true,
        dots:true,
        responsive: [
            {
              breakpoint: 968,
              settings: {
                arrows: false,
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1
              }
            }
          ]
      });
}
// this function for the sticky menu when we scroll windows
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

// this fuction for styling radio and checkbox in forms
function formsStyle() {
  var radio = document.querySelectorAll('form input[type="radio"]');
  var checkbox = document.querySelectorAll('form input[type="checkbox"]');
  /* get the parent of select and add class name custom select */
  var select = document.querySelectorAll('form select');
  console.log("number select",select);

  select.forEach(inputElem => {
      // selectStyle(inputElem)
      var parentSelect = inputElem.parentNode;
      var newParent = document.createElement("DIV");
      newParent.setAttribute("class", "custom-select");
      parentSelect.insertBefore(newParent,inputElem);
      newParent.appendChild(inputElem);

  });
  selectStyle();
  // $('.js-example-basic-multiple').select2();
  
  radio.forEach(inputElem => {
      CheckmarkStyle(inputElem)
  });
  checkbox.forEach(inputElem => {
      CheckmarkStyle(inputElem)
  });
}

function CheckmarkStyle(input) {
  var inputParent = input.parentElement;
  //add class name for parent element  of checkbox
  var ClassP = document.createAttribute("class");
  //ClassP.value = "inputParent";
  if (input.type === "radio") {
      ClassP.value = "radioParent";
  } else if (input.type === "checkbox") {
      ClassP.value = "checkboxParent";
  }
  inputParent.setAttributeNode(ClassP);
  // add element span with class name checkmark
  var span = document.createElement("span");
  var Class = document.createAttribute("class");
  Class.value = "checkmark";
  span.setAttributeNode(Class);
  inputParent.appendChild(span);
}
// this fuction for styling select option  in forms

function selectStyle() {
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
  }
  function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect);
}


function validationFormsError() {
  const inputs = document.querySelectorAll('input, select, textarea');

  for (let input of inputs) {
      input.addEventListener('invalid', (event) => {
          input.classList.add('novalid');
      }, false);

      input.addEventListener('blur', (event) => {
          input.checkValidity();
      })
  }
}