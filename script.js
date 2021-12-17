const navBtn = document.querySelector('.header-btn');
const showMenu = document.querySelector('.navbar-menu');
const topLineEl = document.querySelector('.top-line');
const midLineEl = document.querySelector('.middle-line');
const bottomLineEl = document.querySelector('.bottom-line');
const aboutBtn = document.querySelector('.about-btn');
const servicesBtn = document.querySelector('.services-btn');
const mainRightEl = document.querySelector('.main-right');

navBtn.addEventListener('click', function() {
  showMenu.classList.toggle('hidden');
  topLineEl.classList.toggle('show-top-line');
  midLineEl.classList.toggle('show-middle-line');
  bottomLineEl.classList.toggle('show-bottom-line');
})

aboutBtn.addEventListener('mouseover', function() {
  mainRightEl.style.backgroundImage = "url('/assets/images/bg/bg.jpg')";
});

servicesBtn.addEventListener('mouseover', function() {
  mainRightEl.style.backgroundImage = "url('/assets/images/bg/shapelined-_JBKdviweXI-unsplash.jpg')";
});