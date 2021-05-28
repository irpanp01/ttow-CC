<?php
    include 'auth.php';
    $id = $_GET['id'];

    $query="DELETE FROM detail_wayang WHERE id='$id'";
    $result = mysqli_query($conn, $query);

?>