<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();
    $output = array();
    $query="SELECT * FROM detail_wayang";
    $result = $conn->prepare($query);
    while($obj = $result){
        $output[] = $obj;
    }
    header('Content-Type: JSON');
    echo json_encode($output, JSON_PRETTY_PRINT);
?>
