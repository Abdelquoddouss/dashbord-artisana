<?php
   include "../../config/conection.php";


   $id = $_GET['id'];
   if(isset($_POST['submit'])){

    $name=$_POST['produit_name'];
    $prix= $_POST['produit_price'];
   

      $query = "UPDATE `produit` SET `produit_name`='$name',`produit_price`='$prix'";
      $result = mysqli_query($conn,$query);

      if(isset($result)){
         header("location:../les tableaux dashbor/produit.php?msg=user updated successfully");
      }
      else{
         echo("error");
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/user.css" rel="stylesheet">
</head>
<body>
    <?php
     $query = "SELECT * FROM `produit` WHERE id = $id";
     $result = mysqli_query($conn , $query);
     $rows = mysqli_fetch_assoc($result);
    ?>

<div class="form-main" >
      <div class="main-wrapper">
        <h2 class="form-head">form produit:</h2>
        <form class="form-wrapper" method="post">
          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="name"
              value="<?php echo $rows['produit_name']?>"  
            />
            <label class="form-label" for="name">Nom de Produit</label>
          </div>
          <div class="form-card">
            <input
              class="form-input"
              type="number"
              name="prix"  
              value="<?php echo $rows['produit_price']?>" 
            />
            <label class="form-label" for="Number">prix_fix</label>
          </div>

          

          <div class="btn-wrap">
            <button type="submit"  name="submit"> Submit</button>
          </div>
        </form>
      </div>
    </div> 
</body>
</html>