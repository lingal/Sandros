<?php

include '../config/db_config.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM debtors";

  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_OBJ);


  echo '<h2>Debtors</h2>
    <h5 class="my-3">Delete</h5>
    <form action="/php/config/delete_debtors.php" method="get" class="mb-2 d-flex justify-content-between">
    <input type="text" name="ref" placeholder="Ref"/>
    <input type="submit"  value="Delete">
    </form>

    <h5 class="my-3">Add new</h5>
    <form action="/php/config/insert_debtor.php" method="post" class="mb-2 d-flex justify-content-between">
    <input type="text" name="ref" placeholder="ref"/>
    <input type="text" name="company" placeholder="company"/>
    <input type="text" name="contact" placeholder="Contact"/>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="area" placeholder="area">
    <input type="submit" value="Add">
</form>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Ref</th>
            <th scope="col">Company</th>
            <th scope="col">Contact</th>
            <th scope="col">Email</th>
            <th scope="col">Area</th>
          </tr>
        </thead>';
  echo '<tbody>';
  foreach ($stmt->fetchAll() as $debtors) {
    echo "<tr>
                <td>$debtors->id</td>
                <td>$debtors->ref</td>
                <td>$debtors->company_name</td>
                <td>$debtors->main_contact</td>
                <td>$debtors->email</td>
                <td>$debtors->area</td>
            </tr>";
  }
  echo '</tbody>';
  echo '</table>';

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

