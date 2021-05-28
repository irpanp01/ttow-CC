<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();
    $output = array();
    $query="SELECT * FROM detail_wayang";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while($obj = mysqli_fetch_object($result)){
            $output[] = $obj;
        }
    }
    header('Content-Type: JSON');
    echo json_encode($output, JSON_PRETTY_PRINT);
?>
