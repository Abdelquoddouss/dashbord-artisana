<?php
 session_start();
  include '../header.php';
  
  if(isset($_SESSION['role']) && $_SESSION['role']==1 ){
    header("location:../../views/signin.php");
  }
?>

<?php
           include "../../config/conection.php";
            $query = "SELECT * FROM `produit` ";
             $result = mysqli_query($conn , $query);
  ?>
   


    <div class="container table mt-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">le nom de produit</th>
                <th scope="col">prix fixe</th>
                <th scope="col">img</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
             while($rows = mysqli_fetch_assoc($result)):
               
          ?>
              <tr>
         
                <td><?php echo $rows['produit_name']?></td>
                <td><?php echo $rows['produit_price']?></td>
       
                <th scope="col" ><a href="../update/updatepro.php"><lord-icon src="https://cdn.lordicon.com/fkaukecx.json"  trigger="hover" style="width:50px;height:50px"></lord-icon></a> </th>
                <th scope="col"><a href="../delet/deletpro.php"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:50px;height:50px"> </lord-icon></a> </th>
              </tr>
              <?php
                endwhile;
             ?>
            </tbody>
          </table>        
            </div>

        </div>  
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

        <!-- <a href="deletpro.php?id=<?=$rows['id']?> -->