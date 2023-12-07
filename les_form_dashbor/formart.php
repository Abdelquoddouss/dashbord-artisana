<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/user.css" rel="stylesheet">

</head>
<body>
<div class="form-main" >
      <div class="main-wrapper">
        <h2 class="form-head">form Artisant:</h2>
        <form class="form-wrapper" method="post">
          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="nom"  
            
            />
            <label class="form-label" for="last-name">Nom</label>
          </div>
          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="age"   
            />
            <label class="form-label" for="Name">age</label>
          </div>

          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="metier"
            />
            <label class="form-label" for="email">metier</label>
          </div>

          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="adress"   
            />
            <label class="form-label" for="phone_number">Adress</label>
          </div>

          <div class="btn-wrap">
            <button type="submit"  name="submit"> Submit</button>
          </div>
        </form>
      </div>
    </div>
</body>
</html>

    


<?php

include '../conection.php';

if (isset($_POST['submit'])) {
  
  $name=$_POST['nom'];
  $age= $_POST['age'];
  $metier= $_POST['metier'];
  $adress= $_POST['adress'];

  $query="INSERT INTO `art`(`artisant`, `age`, `metier`, `local`) VALUES ('$name','$age','$metier','$adress')";
  $result = mysqli_query($conn,$query);
  
 if(isset($result)){
  header("location:artisant.php");
 }
}

?>