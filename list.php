<?php
    $conn = new mysqli("localhost", "root", "", "latihan");
    $data = mysqli_query($conn, "SELECT * FROM note_app");
    
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);

    echo json_encode($data);
?>
