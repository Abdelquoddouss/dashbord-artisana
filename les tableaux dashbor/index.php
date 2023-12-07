<?php
   include_once 'header.php';
   session_start();
  if(empty($_SESSION['role'])){
    header("location:../../views/signin.php");
  }
   ?>
   <?php
          include "conection.php";
            $query = "SELECT * FROM `inscription`";
            $result = mysqli_query($conn , $query);
   ?>
      
    <div class="container"><a type="button" href="user.php" class=" btn btn-success mt-5">Add NEW</a></div>
    <div class="container table mt-5">
          <table class="table">
            <thead>
              <tr>
              
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
             while($rows = mysqli_fetch_assoc($result)):
            ?>
              <tr>
         
                <td><?php echo $rows['nom']?></td>
                <td><?php echo $rows['prenom']?></td>
                <td><?php echo $rows['email']?></td>
                <td><?php echo $rows['phone']?></td>
                <th scope="col" ><a href="update.php?id=<?=$rows['id']?>"><lord-icon src="https://cdn.lordicon.com/fkaukecx.json"  trigger="hover" style="width:50px;height:50px"></lord-icon></a> </th>
                <th scope="col"><a href="delet.php?id=<?=$rows['id']?>"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:50px;height:50px"> </lord-icon></a> </th>
              </tr>
              <?php
                endwhile;
             ?>
            </tbody>
          </table>        
            </div>

        </div>
   <?php
      include_once 'footer.php';

    ?>
<script src="https://cdn.lordicon.com/lordicon.js"></script>    
   

