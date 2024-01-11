<?php 
    include "../../config/db_connection.php";
    id(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM ruangan WHERE ID_Ruangan='$id'";

        if ($conn->query($sql) === TRUE) {
            header("location:../admin_home_page.php?page=ruangan");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>