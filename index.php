<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();

    $query="SELECT * FROM detail_wayang";
    $statement = $conn->prepare($query);
    $statement->execute();
    
    $result = $statement->get_result();

    echo json_encode(($result->fetch_assoc()));
?>
