<!DOCTYPE html>
<html lang="en">

<head>
<?php include './templates/head.php';?>

  <link rel="stylesheet" href="/styles/about_me.css">
  <link rel="stylesheet" href="/styles/footer-style.css">
  <title>Sandra K || About Me</title>
</head>

<body>
<?php include './templates/header.php';?>
  <main>
    <section class="about-me max-width">
      <div class="grid">
        <div class="text-container">
          <p class="section-intro">about me</p>
          <h2 class="section-title">
            Approachable and professional Chartered Accountant.
          </h2>
          <p class="section-info">
            My name is Sandra and I founded Sandra K Accounting, to provide a
            comprehensive range of accounting services for companies across
            the UK and Canada. I am an AAT Chartered Accountant with over 5
            years experience, both in accountancy practice and in industry. I
            love what I do and want to be able to help small companies with
            their finance functions. As an independent accountant, I take
            pride in ensuring all my clients receive the same dedicated
            service with rigorous attention to detail. My sole aim is to
            ensure timely and effective management of your accounts, enabling
            your business to grow and thrive.
          </p>
        </div>
        <div class="img-container">
          <img src="/assets/images/portfolio_img.jpg" alt="woman in black" />
        </div>
      </div>
    </section>
    <section class="contact-me">
      <h3>get in touch</h3>
      <form action="#" id="contact-form" class="contact-form">
        <input type="text" class="fname" placeholder="Name..." />
        <input type="text" class="lname" placeholder="Last name..." />
        <input type="email" placeholder="Email""/>
          <textarea cols=" 30" rows="10" placeholder="Your message"></textarea>
        <button type="submit">Submit</button>
      </form>
    </section>
  </main>
  <?php include './templates/footer.php' ?>
  <script src="/scripts/script.js"></script>
</body>

</html>