const navBtn = document.getElementById('nav-btn');
const navBar = document.querySelector('.nav-center');

console.log(navBar);
console.log(navBtn);

navBtn.addEventListener('click', function() {
  navBar.classList.toggle('show-menu');
})