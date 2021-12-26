// buttons
const navBtn = document.getElementById('nav-btn');

//nav button items
const lineTop = document.querySelector('.line-top');
const lineMid = document.querySelector('.line-middle');
const lineBottom = document.querySelector('.line-bottom');

//elements
const navMenuEl = document.querySelector('.sm-screen-nav');



navBtn.addEventListener('click', function () {
  console.log('click');
  navMenuEl.classList.toggle('show-nav-menu');
  lineTop.classList.toggle('line-top-rotate');
  lineMid.classList.toggle('line-middle-hide');
  lineBottom.classList.toggle('line-bottom-rotate');
})