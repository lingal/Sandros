const btnShow = document.querySelectorAll('.service-btn');
const services = document.querySelectorAll('.service');



btnShow.forEach((btn, i) => {
  btn.addEventListener('click', function () {
    services.forEach((service, x) => {
      if (i === x) {
        service.classList.toggle('show-content');
      } else {
        service.classList.remove('show-content');
      }
    })
  })
})