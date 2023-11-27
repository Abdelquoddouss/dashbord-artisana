<?php
  include 'header.php';
?>

<?php
          include "conection.php";
            $query = "SELECT * FROM `produit` ";
            $result = mysqli_query($conn , $query);

   ?>
   

<div class="container"><a type="button" href="formproduit.php" class=" btn btn-success mt-5">Add NEW</a></div>
    <div class="container table mt-5">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">le nom de produit</th>
                <th scope="col">categorie</th>
                <th scope="col">prix fixe</th>
                <th scope="col">remise</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
             while($rows = mysqli_fetch_assoc($result)):
               
          ?>
              <tr>
         
                <td><?php echo $rows['nom_produit']?></td>
                <?php
                
                $idca=$rows['categories_id'];
                $sql67="select c.nom from categories c where id like '$idca'";

                $result4=mysqli_query($conn,$sql67);
                while($row = mysqli_fetch_assoc($result4)){
                     
                ?>
                <td><?php echo $row['nom'] ?></td><?php }?>
                <td><?php echo $rows['prix_fixe']?></td>  
                <td><?php echo $rows['remise']?></td>
                <th scope="col" ><a href="updatepro.php?id=<?=$rows['id']?>"><lord-icon src="https://cdn.lordicon.com/fkaukecx.json"  trigger="hover" style="width:50px;height:50px"></lord-icon></a> </th>
                <th scope="col"><a href="deletpro.php?id=<?=$rows['id']?>"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:50px;height:50px"> </lord-icon></a> </th>
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