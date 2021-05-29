<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM detail_wayang";
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    // print_r($result);

    if($result){
        $output = array();
        foreach($result as $obj) {
            $output[]=$obj;
        }
    } else {
        echo 'Error: No result.';
    }
    header("Conten Type : JSON");
    echo json_encode($output, JSON_PRETTY_PRINT);
    // include 'auth.php'
    // $output = array();

    // $sql = "SELECT * FROM detail_wayang;"
    // $query = mysqli_query($mysqli,$sql) or die ("Tidak Terhubung");
    
    // while($obj = mysqli_fetch_array($query)){
    //     $output[]=$obj;
    // }
    // header('Conten Type : JSON');
    // echo json_encode($output,JSON_PRETTY_PRINT);
?>
