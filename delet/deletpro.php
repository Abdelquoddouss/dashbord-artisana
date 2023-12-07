<?php
    include "../../config/conection.php";

         $id = $_GET['id'];
        $query = "DELETE FROM produit WHERE id = $id";
        $result = mysqli_query($conn , $query);
        if(isset($result)){
            header("location:../../index.php?msg=deleted database successfuly");
        }
        else{
            echo "error";
        }
        echo  $_GET['id'];
?>