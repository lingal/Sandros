const navBtn = document.querySelector('.header-btn');
const showMenu = document.querySelector('.navbar-menu');
const topLineEl = document.querySelector('.top-line');
const midLineEl = document.querySelector('.middle-line');
const bottomLineEl = document.querySelector('.bottom-line');


navBtn.addEventListener('click', function() {
  showMenu.classList.toggle('hidden');
  topLineEl.classList.toggle('show-top-line');
  midLineEl.classList.toggle('show-middle-line');
  bottomLineEl.classList.toggle('show-bottom-line')
})