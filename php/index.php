<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['first_name'])) {

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome back, <?php echo $_SESSION['first_name']; ?>!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link href="/styles/client_acc.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/sidebars.css">
  </head>

  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow ">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/index.html"><img src="/assets/logo/sk_logo.svg" alt="Sandra K logo" class="img-fluid w-25"></a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="/php/config/logout.php">Log Out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link" id="upload" href="#">
                  Upload invoice
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="creditors" href="#">
                  Creditors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="debtors">
                  Debtors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.xero.com/" target="_blank">
                  Go to Xero
                </a>
              </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="
              d-flex
              justify-content-between
              flex-wrap flex-md-nowrap
              align-items-center
              pt-3
              pb-2
              mb-3
              border-bottom
            ">
            <h1 class="h2">Welcome, <?php echo $_SESSION['first_name']; ?>!</h1>
          </div>

          <div class="main-content"></div>

        </main>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/scripts/php_content.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/scripts/sidebars.js"></script>
  </body>

  </html>

<?php
} else {
  header('Location: index.php');
  exit();
}
?>