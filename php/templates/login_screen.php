<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Style reset -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

  <title>Log In</title>

  <style>
    body {
      height: 100vh;
      display: grid;
      grid-template-rows: 75px calc(100vh - 75px);
      place-items: center;
      background-color: #f5f5f5;
    }

    header {
      width: 90vw;
      max-width: 1400px;
      margin-inline: auto;
      justify-self: left;
      font-size: 2rem;
    }

    main {
      display: grid;
      place-items: center;
    }

    img {
      width: 4rem;
      margin-top: -3rem;
      margin-bottom: 2rem;
    }

    input {
      display: block;
      background-color: transparent;
      border: none;
      width: 15rem;
      padding: 0.2rem 0;
    }

    label {
      display: flex;
      border-bottom: 2px solid white;
      margin-bottom: 1rem;
    }

    button[type='submit'] {
      width: 100%;
      padding: 0.2rem 1rem;
    }
   .error-msg {
     color: red;
     text-align: center;
     font-size: 1.2rem;
   }

  </style>
</head>

<body>
  <header>
    <a href="/index.html"><i class="bi bi-arrow-left-square"></i></a>
  </header>
  <main>

    <img src="/node_modules/bootstrap-icons/icons/person-circle.svg" alt="" />
    <form action="/php/config/process.php" method="post">
      <?php if (isset($_GET['error'])){ ?>
        <p class="error-msg"><?php echo $_GET['error'];?></p>
        <?php } ?>
      <label>
        <input type="text" name="clientId" placeholder="Client ID" />
        <i class="bi bi-person"></i>
      </label>
      <label>
        <input type="password" name="password" placeholder="Password" />
        <i class="bi bi-lock"></i>
      </label>
      <button type="submit">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Log in</span>
      </button>

    </form>
  </main>
</body>

</html>