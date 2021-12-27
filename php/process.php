<?php
session_start();
include 'db_config.php';

if (isset($_POST['clientId']) && isset($_POST['password'])) {
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $clientId = validate($_POST['clientId']);
  $password = validate($_POST['password']);

  if (empty($clientId)) {
    header('Location: login_screen.php?error=Client ID is required');
    exit();
  } else if (empty($password)) {
    header('Location: login_screen.php?error=Password is required');
    exit();
  } else {
    $sql = "SELECT * FROM users where client_id = '$clientId' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      // print_r($row);
      if ($row['client_id'] === $clientId && $row['password'] === $password) {
        // echo 'Logged id';
        $_SESSION['client_id'] = $row['clientId'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['id'] = $row['id'];
        header('Location: index.php');
        exit();
      }
    } else {
      header('Location: login_screen.php?error=Incorrect Client ID or Password');
      exit();
    }
  }
} else {
  header('Location: login_screen.php');
  exit();
}
