
// buttons
const navBtn = document.getElementById('nav-btn');

//nav button items
const lineTop = document.querySelector('.line-top');
const lineMid = document.querySelector('.line-middle');
const lineBottom = document.querySelector('.line-bottom');

//html elements
const navMenuEl = document.querySelector('.sm-screen-nav');
const mainLeftEl = document.querySelector('.main-left');
const mobileNavEl = document.querySelector('.sm-screen-nav').children;



function smallScreenNav() {
  Object.values(mobileNavEl).forEach(function (nav) {
    nav.addEventListener('click', function () {
      navMenuEl.classList.toggle('show-nav-menu');
      lineTop.classList.toggle('line-top-rotate');
      lineMid.classList.toggle('line-middle-hide');
      lineBottom.classList.toggle('line-bottom-rotate');
    })
  })
}

smallScreenNav();


function showNavMenu() {
  navBtn.addEventListener('click', function () {
    navMenuEl.classList.toggle('show-nav-menu');
    lineTop.classList.toggle('line-top-rotate');
    lineMid.classList.toggle('line-middle-hide');
    lineBottom.classList.toggle('line-bottom-rotate');
  })
}

showNavMenu();


