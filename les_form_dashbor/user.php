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
        <h2 class="form-head">FORM:</h2>
        <form class="form-wrapper" method="post">
          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="last-name"  
            
            />
            <label class="form-label" for="last-name">Nom</label>
          </div>
          <div class="form-card">
            <input
              class="form-input"
              type="text"
              name="Name"   
            />
            <label class="form-label" for="Name">prenom</label>
          </div>

          <div class="form-card">
            <input
              class="form-input"
              type="email"
              name="email"
            />
            <label class="form-label" for="email">Email</label>
          </div>

          <div class="form-card">
            <input
              class="form-input"
              type="number"
              name="phone_number"   
            />
            <label class="form-label" for="phone_number">Phone number</label>
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
  
  $last_name=$_POST['last-name'];
  $Name= $_POST['Name'];
  $email= $_POST['email'];
  $phone_number= $_POST['phone_number'];

  $query="INSERT INTO `inscription`(`nom`, `prenom`, `email`, `phone`) VALUES ('$Name','$last_name','$email','$phone_number')";
  $result = mysqli_query($conn,$query);
  
 if(isset($result)){
  header("location:index.php");
 }
}

?>