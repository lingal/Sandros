<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './templates/head.php'; ?>
  <link rel="stylesheet" href="/styles/services_style.css">
  <title>Sandra K || Services</title>
</head>

<body>
  <?php include './templates/header.php'; ?>
  <main>
    <div class="bg-img">
      <div class="max-width title-text">
        <h1>what i do</h1>
        <div class="divider">&nbsp</div>
        <p>
          Offering a broad range of accountancy services from tax returns and
          payroll, I am fully qualified and committed to what I do. I rely on
          my reputation for excellence and all my clients receive the same
          dedicated service.
        </p>
      </div>
    </div>

    <!-- services -->
    <section>
      <h2 class="section-title">Accountancy Services for Small Businesses</h2>
      <div class="services-containter">
        <article class="service">
          <div class="service-title">
            <p>Limited Company Statutory Accounts</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              I will take care of the statutory reporting, so you can concentrate on the business!
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>

          </div>
        </article>

        <article class="service">
          <div class="service-title">
            <p>Management Accounts</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              Management Accounts can provide a company with vital additional insight of the business finances. Monthly reporting enables a company to implement changes where they are needed.
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>
          </div>
        </article>

        <article class="service">
          <div class="service-title">
            <p>Corporation Tax Returns</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              Make sure your company is compliant with HMRC Corporation Tax standards.
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>
          </div>
        </article>

        <article class="service">
          <div class="service-title">
            <p>VAT Returns</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              VAT returns involve complex rules and compliances set by HMRC.
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>
          </div>
        </article>

        <article class="service">
          <div class="service-title">
            <p>Payroll</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              I provide a wide range of payroll services to meet all of your company’s payroll needs – whether you need outsourcing support or personal advice, can help you compile your employees‘ payslips and organise your payroll with efficiency.
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>
          </div>
        </article>

        <article class="service">
          <div class="service-title">
            <p>Self Assessment Tax Returns</p>
            <button class="service-btn">
              <span class="btn-show"><i class="fas fa-angle-down"></i></span>
              <span class="btn-close"><i class="fas fa-angle-up"></i></span>
            </button>
          </div>
          <div class="service-description">
            <p>
              Taking on clients for 20-21 tax returns!
            <div class="book-btn-container">
              <p>Book a free 15 mins consulatation</p>
              <button class="book-btn">Book</button>
            </div>
            </p>
          </div>
        </article>
      </div>

      <div class="modal-overlay">
        <div class="modal-container">
          <div class="modal-title">
            <h3>booking</h3>
            <button class="close-modal">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <form action="https://submit-form.com/8zeiZE8Q" method="POST" class="modal-booking-form">
            <label>
              <p>Select a service</p>
              <select name="services">
                <option value="Limited Company">Limited Company Statutory Accounts</option>
                <option value="Tax Returns">Corporation Tax Returns</option>
                <option value="Management">Management Accounts</option>
                <option value="Payroll">Payroll</option>
                <option value="Self Assessment">Self Assessment Tax Returns</option>
              </select>
            </label>
            <label>
              <p>Date*</p>
              <input type="date" name="date" required>
            </label>
            <label>
              <p>Your name*</p>
              <input type="text" name="name" required>
            </label>
            <label>
              <p>Email*</p>
              <input type="email" name="email" required>
            </label>
            <label>
              <p>Phone</p>
              <input type="tel" name="phone">
            </label>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <section class="booking-section">
      <h3>Have a question?</h3>
      <p>Book a free 15 mins consultation</p>
      <form action="" method="POST" class="booking-form">
        <label>
          <p>Select a service</p>
          <select name="services">
            <option value="Limited Company">Limited Company Statutory Accounts</option>
            <option value="Tax Returns">Corporation Tax Returns</option>
            <option value="Management">Management Accounts</option>
            <option value="Payroll">Payroll</option>
            <option value="Self Assessment">Self Assessment Tax Returns</option>
          </select>
        </label>
        <label>
          <p>Date*</p>
          <input type="date" name="date" required>
        </label>
        <label>
          <p>Your name*</p>
          <input type="text" name="name" required>
        </label>
        <label>
          <p>Email*</p>
          <input type="email" name="email" required>
        </label>
        <label>
          <p>Phone</p>
          <input type="tel" name="phone">
        </label>
        <button type="submit">Submit</button>
      </form>

    </section>
  </main>

  <?php include './templates/footer.php' ?>

  <script src="/scripts/script.js"></script>
  <script src="/scripts/services.js"></script>
  <script src="/scripts/getInTouch.js"></script>
</body>

</html>