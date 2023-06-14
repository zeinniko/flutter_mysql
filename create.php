<?php
    $conn = new mysqli("localhost", "root", "", "latihan");
    $title = isset($_POST['title'])?$_POST['title']:'';
    $content = isset($_POST['content'])?$_POST['content']:'';

    if(!empty($title) && !empty($content)){
        $result = mysqli_query($conn, "INSERT INTO note_app SET title='$title', content='$content'");
        if ($result) {
            echo json_encode([
                "message" => "Data Berhasil Disimpan"
            ]);
        }else{
            echo json_encode([
                "message" => "Data Gagal Disimpan"
            ]);
        }
    }else {
        echo json_encode([
            "message" => "Data Wajib Diisi"
        ]);
    }
?>
