const bgImageEl = document.querySelector('.bg-img');

function changeBgImg() {
  const serviceBtn = document.querySelector('.service');
  const reviewsBtn = document.querySelector('.reviews');
  const contactBtn = document.getElementById('contact');


  serviceBtn.addEventListener('mouseover', function () {
    bgImageEl.style.opacity = '1';
    bgImageEl.style.backgroundImage = `url(/assets/images/services.jpg)`;

  })

  reviewsBtn.addEventListener('mouseover', function () {
    bgImageEl.style.opacity = '1';
    bgImageEl.style.backgroundImage = `url(/assets/images/reviews.jpg)`;
  })

  contactBtn.addEventListener('mouseover', function () {
    bgImageEl.style.opacity = '1';
    bgImageEl.style.backgroundImage = `url(/assets/images/image.jpg)`;
  })


}

changeBgImg();