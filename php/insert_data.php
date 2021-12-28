<?php 

include 'db_config.php';

try {
  if(!$_POST) {
    die('Netinkamas metodas');
  }

$conn = new PDO("mysql:host=$servername;dbname=$dbname",
  $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO persons (first_name, last_name, email)
 VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lasttname);
$stmt->bindParam(':email', $email);

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$stmt->execute();

echo 'New records added successfuly';

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}