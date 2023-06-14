<?php
    $conn = new mysqli("localhost", "root", "", "latihan");
    $title = isset($_GET['id'])?$_GET['id']:'';

    $data = mysqli_query($conn, "SELECT * FROM note_app WHERE id='$id'");
    $data = mysqli_fetch_array($data, MYSQLI_ASSOC);

    echo json_encode($data);
?>
