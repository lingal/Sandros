<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './templates/head.php';?>

  

  <link rel="stylesheet" href="/styles/reviews-style.css">

  <title>Sandra K || Reviews</title>
</head>

<body>
  <?php include './templates/header.php';?>

  <main>
    <div class="bg-img">
      <div class="max-width title-text">
        <h1>what clients say</h1>
        <div class="divider">&nbsp</div>
        <p>
          I am very fortunate to have formed excellent partnerships with many of my clients. And I’ve formed more than just working relationships with them; we have formed true friendships. Here’s what they’re saying about my service.

        </p>
      </div>
    </div>
    <section class="max-width">
      <article class="review">

        <div class="review-content">
          <div class="client-info">
            <img src="https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg" class="client-img" alt="client photo">
            <div class="author">
              <h4 class="client">Anna Powell</h4>
              <p class="company-name">Corporation IT</p>
            </div>
          </div>
          <p class="review-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quam modi odit numquam maxime hic nam officiis tenetur, incidunt nostrum libero quisquam, facilis consequatur obcaecati? Ipsa asperiores ipsum cumque. Rem?
          </p>
        </div>

        
          <button class="prev-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        

      </article>
    </section>
  </main>

  <?php include './templates/footer.php' ?>

  <script src="scripts/reviews.js"></script>
  <script src="/scripts/script.js"></script>
</body>

</html>