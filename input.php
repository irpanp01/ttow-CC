<?php
    include 'auth.php';
    $id = $_POST['id'];
    $nm_wayang = $_POST['nm_wayang'];
    $desc_wayang = $_POST['desc_wayang'];
    $stry_wayang = $_POST['stry_wayang'];

    $query="INSERT INTO detail_wayang(id,nm_wayang,desc_wayang,stry_wayang) VALUES ('$id','$nm_wayang','$desc_wayang','$stry_wayang')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "Input Sukses";
    }else{
        echo "Input Gagal";
    }
    
?>