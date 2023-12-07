<?php 
 include"header.php";
?>

<?php
          include "conection.php";
            $query = "SELECT * FROM `art`";
            $result = mysqli_query($conn , $query);
   ?>

<div class="container"><a type="button" href="formart.php" class=" btn btn-success mt-5">Add NEW</a></div>
    <div class="container table mt-5">
          <table class="table">
            <thead>
              <tr>
              
                <th scope="col">l`Artisant</th>
                <th scope="col">age</th>
                <th scope="col">metier</th>
                <th scope="col">local</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
             while($rows = mysqli_fetch_assoc($result)):
            ?>
              <tr>
         
                <td><?php echo $rows['artisant']?></td>
                <td><?php echo $rows['age']?></td>
                <td><?php echo $rows['metier']?></td>
                <td><?php echo $rows['local']?></td>
                <th scope="col"><a href="deletartisant.php?id=<?=$rows['id']?>"><lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:50px;height:50px"> </lord-icon></a> </th>
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