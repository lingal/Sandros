
// buttons
const navBtn = document.getElementById('nav-btn');
const menuBtns = document.querySelectorAll('.menu-btn');
//nav button items
const lineTop = document.querySelector('.line-top');
const lineMid = document.querySelector('.line-middle');
const lineBottom = document.querySelector('.line-bottom');

//elements
const navMenuEl = document.querySelector('.sm-screen-nav');
const mainLeftEl = document.querySelector('.main-left');
const bgImagesEl = document.querySelectorAll('.bg-img');


navBtn.addEventListener('click', function () {
  navMenuEl.classList.toggle('show-nav-menu');
  lineTop.classList.toggle('line-top-rotate');
  lineMid.classList.toggle('line-middle-hide');
  lineBottom.classList.toggle('line-bottom-rotate');
})


// menuBtns.forEach(function(btn) {
//   btn.addEventListener('click', function(e) {
//     bgImagesEl.forEach(img => {
//       img.style.display = 'none';
//     })
//   })
// })