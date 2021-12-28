const reviews = [
  {
    id: 1,
    name: "susan smith",
    job: "web developer",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg",
    text:
      "I'm baby meggings twee health goth +1. Bicycle rights tumeric chartreuse before they sold out chambray pop-up. Shaman humblebrag pickled coloring book salvia hoodie, cold-pressed four dollar toast everyday carry",
  },
  {
    id: 2,
    name: "anna johnson",
    job: "web designer",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883409/person-2_np9x5l.jpg",
    text:
      "Helvetica artisan kinfolk thundercats lumbersexual blue bottle. Disrupt glossier gastropub deep v vice franzen hell of brooklyn twee enamel pin fashion axe.photo booth jean shorts artisan narwhal.",
  },
  {
    id: 3,
    name: "peter jones",
    job: "intern",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883417/person-3_ipa0mj.jpg",
    text:
      "Sriracha literally flexitarian irony, vape marfa unicorn. Glossier tattooed 8-bit, fixie waistcoat offal activated charcoal slow-carb marfa hell of pabst raclette post-ironic jianbing swag.",
  },
  {
    id: 4,
    name: "bill anderson",
    job: "the boss",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883423/person-4_t9nxjt.jpg",
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
              <p class="company-name">${currentReview.job}</p>
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
      <p class="company-name">${reviews[counter].job}</p>
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
    counter = reviews.length -1;
  }
  let html = `
    <div class="client-info">
    <img src="${reviews[counter].img}" class="client-img" alt="client photo">
    <div class="author">
      <h4 class="client">${reviews[counter].name}</h4>
      <p class="company-name">${reviews[counter].job}</p>
    </div>
  </div>
  <p class="review-text">
    ${reviews[counter].text}
  </p>
</div>
`
  reviewContainer.innerHTML = html;

})