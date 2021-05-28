<?php
    include 'auth.php';
    $id = $_POST['id'];
    $nm_wayang = $_POST['nm_wayang'];
    $desc_wayang = $_POST['desc_wayang'];
    $stry_wayang = $_POST['stry_wayang'];

    $query = "UPDATE detail_wayang SET nm_wayang = '$nm_wayang',desc_wayang = '$desc_wayang',stry_wayang = '$stry_wayang' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if($result){
        echo "Update Sukses";
    }else{
        echo "Update Gagal";
    }
    
?>