<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();

    $query="SELECT * FROM detail_wayang";
    $statement = $conn->prepare($query);
    $statement->execute();
    $output = array();
    
    while($obj = $statement->fetch_array(MYSQLI_ASSOC)) {
        $output[] = $obj;
    }

    mysqli_close($statement);
    echo json_encode($output, JSON_PRETTY_PRINT);
?>
