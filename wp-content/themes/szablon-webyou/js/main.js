var navbarSelector = '.navbar'
var className = 'fixed-top'
var hederTop = document.getElementById("header-top");
navbar = document.querySelector(navbarSelector)
offset = window.pageYOffset + navbar.getBoundingClientRect().top

function scrollHandler () {
    if (window.pageYOffset > offset) {
        navbar.classList.add(className)
        hederTop.style.marginBottom = `${navbar.offsetHeight}px`;
    } else {
        navbar.classList.remove(className)
        hederTop.style.marginBottom = null;
    }
}

scrollHandler()

window.addEventListener('scroll', scrollHandler)


//wielkość slidera
function heightMainslider(){
    var mainSlider = document.querySelector(".home-slider")
    var header = document.getElementById("header")

    mainSlider.style.height = `${(window.innerHeight-header.offsetHeight)}px`
}

heightMainslider();
window.addEventListener('resize', heightMainslider)
