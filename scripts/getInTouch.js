const contactBtns = document.querySelectorAll('.contact-btn');
const contactForm = document.querySelector('.aside');
const contact = document.getElementById('contact-form');


function navToContact() {

  contactBtns.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      console.log(e.currentTarget);
      contactForm.style.display = 'grid';
      contact.scrollIntoView(true);
    })
  })
}

navToContact();
