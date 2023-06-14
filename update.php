<?php
    $conn = new mysqli("localhost", "root", "", "latihan");
    $id = isset($_POST['id'])?$_POST['id']:'';
    $title = isset($_POST['title'])?$_POST['title']:'';
    $content = isset($_POST['content'])?$_POST['content']:'';

    if(!empty($id) && !empty($title) && !empty($content)){
        $result = mysqli_query($conn, "UPDATE note_app SET title='$title', content='$content' WHERE id='$id'");
        if ($result) {
            echo json_encode([
                "message" => "Data Berhasil Diubah"
            ]);
        }else{
            echo json_encode([
                "message" => "Data Gagal Diubah"
            ]);
        }
    }else {
        echo json_encode([
            "message" => "Data Wajib Diisi"
        ]);
    }
?>
