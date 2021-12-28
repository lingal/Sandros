
function showService() {
  const btnShow = document.querySelectorAll('.service-btn');
  const services = document.querySelectorAll('.service');

  btnShow.forEach((btn, i) => {
    btn.addEventListener('click', function () {
      services.forEach(function (service, x) {
        if (i === x) {
          service.classList.toggle('show-content');
        } else {
          service.classList.remove('show-content');
        }
      })
    })
  })
}
showService();


function showBooking() {
  const modal = document.querySelector('.modal-overlay');
  const closeModalBtn = document.querySelector('.close-modal');
  const btns = document.querySelectorAll('.book-btn');
  btns.forEach(function (btn) {
    // console.log(btn);
    btn.addEventListener('click', function () {
      modal.classList.toggle('show-modal');
    })
  })
  closeModalBtn.addEventListener('click', function () {
    if (modal.classList.contains('show-modal')) {
      modal.classList.remove('show-modal');
    }
  })
}

showBooking();