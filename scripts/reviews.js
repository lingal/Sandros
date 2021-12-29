const reviews = [
  {
    id: 1,
    name: "Jorie Delnevo",
    company: "Feeney LLC",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg",
    text:
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
  },

  {
    id: 2,
    name: "Veronika Pentycross",
    company: "Parker LLC",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883409/person-2_np9x5l.jpg",
    text:
      "Helvetica artisan kinfolk thundercats lumbersexual blue bottle. Disrupt glossier gastropub deep v vice franzen hell of brooklyn twee enamel pin fashion axe.photo booth jean shorts artisan narwhal.",
  },
  {
    id: 3,
    name: "Ashely Crolla",
    company: "Marvin LLC",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883417/person-3_ipa0mj.jpg",
    text:
      "Sriracha literally flexitarian irony, vape marfa unicorn. Glossier tattooed 8-bit, fixie waistcoat offal activated charcoal slow-carb marfa hell of pabst raclette post-ironic jianbing swag.",
  },
  {
    id: 4,
    name: "Adelle Minigo",
    company: "Bednar-Haley",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg",
    text:
      "Edison bulb put a bird on it humblebrag, marfa pok pok heirloom fashion axe cray stumptown venmo actually seitan. VHS farm-to-table schlitz, edison bulb pop-up 3 wolf moon tote bag street art shabby chic. ",
  },
  {
    id: 4,
    name: "Ives Drew-Clifton",
    company: "Schuppe-Bayer",
    img:
      "https://images.pexels.com/photos/3671083/pexels-photo-3671083.jpeg?cs=srgb&dl=pexels-katie-e-3671083.jpg&fm=jpg",
    text:
      "Edison bulb put a bird on it humblebrag, marfa pok pok heirloom fashion axe cray stumptown venmo actually seitan. VHS farm-to-table schlitz, edison bulb pop-up 3 wolf moon tote bag street art shabby chic. ",
  },
  {
    id: 4,
    name: "Olivier Casement",
    company: "Jenkins and Sons",
    img:
      "https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?cs=srgb&dl=pexels-chloe-1043474.jpg&fm=jpg",
    text:
      "Edison bulb put a bird on it humblebrag, marfa pok pok heirloom fashion axe cray stumptown venmo actually seitan. VHS farm-to-table schlitz, edison bulb pop-up 3 wolf moon tote bag street art shabby chic. ",
  },
];


const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const reviewContainer = document.querySelector('.review-content');

let counter = 0;

window.addEventListener('DOMContentLoaded', function () {
  let currentReview = reviews[counter];
  console.log(currentReview);
  let html = `
            <div class="client-info">
            <img src="${currentReview.img}" class="client-img" alt="client photo">
            <div class="author">
              <h4 class="client">${currentReview.name}</h4>
              <p class="company-name">${currentReview.company}</p>
            </div>
          </div>
          <p class="review-text">
            ${currentReview.text}
          </p>
        </div>
    
    `
  reviewContainer.innerHTML = html;
})


nextBtn.addEventListener('click', function () {
  counter++;
  console.log(counter);

  if (counter > reviews.length - 1) {
    counter = 0;
  }

  let html = `
    <div class="client-info">
    <img src="${reviews[counter].img}" class="client-img" alt="client photo">
    <div class="author">
      <h4 class="client">${reviews[counter].name}</h4>
      <p class="company-name">${reviews[counter].company}</p>
    </div>
  </div>
  <p class="review-text">
    ${reviews[counter].text}
  </p>
</div>
`
  reviewContainer.innerHTML = html;

})

prevBtn.addEventListener('click', function() {
  counter--;
  if(counter < 0) {
    counter = reviews.length-1;
  }
  let html = `
    <div class="client-info">
    <img src="${reviews[counter].img}" class="client-img" alt="client photo">
    <div class="author">
      <h4 class="client">${reviews[counter].name}</h4>
      <p class="company-name">${reviews[counter].company}</p>
    </div>
  </div>
  <p class="review-text">
    ${reviews[counter].text}
  </p>
</div>
`
  reviewContainer.innerHTML = html;

})