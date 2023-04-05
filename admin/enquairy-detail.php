<?php

include('adminsidenavbar.php');

?>

<div class="main_content">


  
  <h3 class="mt-3 mb-3">Public Enquairy</h3>

  <table id="example">
    <thead>
      <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact No</th>
        <th scope="col">Enquairy</th>
         <th scope="col">Action</th>
  

</tr>
</thead>
<tbody>
        <?php
    




    include('../connection/connection.php');


    $selectquery = "SELECT * FROM enquiry ";
    
    $query = mysqli_query($con, $selectquery);
    
    while($result = mysqli_fetch_assoc($query)){
      ?>
      <tr>
      <td><?php echo $result['sr_no']; ?></td>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['number']; ?></td>
      <td><?php echo $result['enquiry']; ?></td>
      <td><a   class="btn btn-danger" href="..\admin\enquairydelete.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
    
    </tr>
    
    <?php
    }
    
    ?>

</tbody>
    <tfoot>
    <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact No</th>
        <th scope="col">Enquairy</th>
         <th scope="col">Action</th>
  

</tr>
    </tfoot>
  </table>


</div>




<?php

include('adminfooter.php');

?>
