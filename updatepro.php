<?php
   include "conection.php";
   $id = $_GET['id'];
   

   if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $prix= $_POST['prix'];
    $remise= $_POST['remise'];
    $categorie= $_POST['categorie'];

      $query = "UPDATE `produit` SET `nom_produit`='$name',`prix_fixe`='$prix',`remise`='$remise',`categories_id`='$categorie'";
      $result = mysqli_query($conn,$query);

      if(isset($result)){
         header("location:index.php?msg=user updated successfully");
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
              value="<?php echo $rows['nom_produit']?>"  
            />
            <label class="form-label" for="name">Nom de Produit</label>
          </div>
          <div class="form-card">
            <input
              class="form-input"
              type="number"
              name="prix"  
              value="<?php echo $rows['prix_fixe']?>" 
            />
            <label class="form-label" for="Number">prix_fix</label>
          </div>

          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="remise"
              value="<?php echo $rows['remise']?>"
            />
            <label class="form-label" for="remise">Remise</label>
          </div>

          <div class="form-card">
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name='categorie'>
        <option selected>Qu elle categories</option>
            <?php  $query= "select * from categories ";
                   $result = mysqli_query($conn,$query);
            while ($ty=mysqli_fetch_assoc($result)) {
            ?>
            
            <option value="<?=$ty['id']?>"><?=$ty['nom']?></option>
            <?php 
            }
            ?>
        </select> 
            
            <label class="form-label" for="number">categories</label>
          </div>

          <div class="btn-wrap">
            <button type="submit"  name="submit"> Submit</button>
          </div>
        </form>
      </div>
    </div> 
</body>
</html>