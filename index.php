<?php
    // include 'auth.php';
    // $db = new auth();
    // $conn = $db->connect();

    // $output = array();
    // $query="SELECT * FROM detail_wayang";
    // $statement = $conn->prepare($query);
    // $statement->execute();
    // while($obj = $statement->fetch(PDO::FETCH_ASSOC) {
    //     $output[] = $obj;
    // }
    // header('Content-type: JSON');
    // echo json_encode($output, JSON_PRETTY_PRINT);
    include 'auth.php'
    $output = array();

    $sql = "SELECT * FROM detail_wayang;"
    $query = mysqli_query($mysqli,$sql) or die ("Tidak Terhubung");
    
    while($obj = mysqli_fetch_array($query)){
        $output[]=$obj;
    }
    header('Conten Type : JSON');
    echo json_encode($output,JSON_PRETTY_PRINT);
?>
