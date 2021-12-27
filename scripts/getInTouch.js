const contactBtn = document.querySelector('.contact-btn');
const contactForm = document.querySelector('.aside');
const contact = document.getElementById('contact-form');



contactBtn.addEventListener('click', function() {
  contactForm.style.display = 'grid';
  contact.scrollIntoView(true);
})