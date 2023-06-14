<?php
    $conn = new mysqli("localhost", "root", "", "latihan");
    $title = isset($_POST['id'])?$_POST['id']:'';

    if(!empty($id)){
        $result = mysqli_query($conn, "DELETE FROM note_app WHERE id='$id'");
        if ($result) {
            echo json_encode([
                "message" => "Data Berhasil Dihapus"
            ]);
        }else{
            echo json_encode([
                "message" => "Data Gagal Dihapus"
            ]);
        }
    }else {
        echo json_encode([
            "message" => "Data tidak ada"
        ]);
    }
?>
