<?php 

include 'db_config.php';

try {
  if(!$_POST) {
    die('Error, try again.');
  }

$conn = new PDO("mysql:host=$servername;dbname=$dbname",
  $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO debtors (company_name, main_contact, ref, email, area)
 VALUES (:company_name, :main_contact, :ref, :email, :area)");
$stmt->bindParam(':company_name', $company_name);
$stmt->bindParam(':main_contact', $main_contact);
$stmt->bindParam(':ref', $ref);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':area', $area);

$company_name = $_POST['company'];
$main_contact = $_POST['contact'];
$ref = $_POST['ref'];
$email = $_POST['email'];
$area = $_POST['area'];
$stmt->execute();

header('Location: ../index.php');

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
