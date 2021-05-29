<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();

    $output = array();
    $query="SELECT * FROM detail_wayang";
    $statement = $conn->prepare($query);
    $statement->execute();
    while($obj = $statement->fetch(PDO::FETCH_ASSOC) {
        $output[] = $obj;
    }
    header('Content-type: JSON');
    echo json_encode($output, JSON_PRETTY_PRINT);
?>
