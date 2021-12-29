<?php

include 'db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "DELETE FROM creditors WHERE ref = :ref";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':ref', $_GET['ref']);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    echo '<table>';
    foreach ($stmt->fetchAll() as $creditors) {
        echo "<tr>
        <td>$creditors->id</td>
        <td>$creditors->ref</td>
        <td>$creditors->company_name</td>
        <td>$creditors->main_contact</td>
        <td>$creditors->email</td>
        <td>$creditors->area</td>
            </tr>";
    }
    echo '</table>';
    header('Location: ../index.php');
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}