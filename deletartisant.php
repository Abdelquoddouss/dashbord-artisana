<?php
    include "conection.php";
        $id = $_GET['id'];
        $query = "DELETE FROM art WHERE id = $id";
        $result = mysqli_query($conn , $query);
        if(isset($result)){
            header("location:artisant.php?msg=deleted database successfuly");
        }
        else{
            echo "error";
        }
?>