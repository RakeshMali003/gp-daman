<?php

include('adminsidenavbar.php');

?>

<div class="main_content">


  
  <h3 class="mt-3 mb-3"> Student Enquairy </h3>

  <table id="example">
    <thead>
      <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">Enrollment</th>
        <th scope="col">Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Title</th>
         <th scope="col">Description</th>
         <th scope="col">Date</th>
        <th scope="col">Sem</th>
         <th scope="col">Action</th>
  

</tr>
</thead>
<tbody>
        <?php
    




    include('../connection/connection.php');


    $selectquery = "SELECT * FROM studentenquiry ";
    
    $query = mysqli_query($con, $selectquery);
    
    while($result = mysqli_fetch_assoc($query)){
      ?>
      <tr>
      <td><?php echo $result['sr_no']; ?></td>
      <td><?php echo $result['enrollment']; ?></td>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['faculty']; ?></td>
      <td><?php echo $result['title']; ?></td>
      <td><?php echo $result['description']; ?></td>
      <td><?php echo $result['date']; ?></td>
      <td><?php echo $result['sem']; ?></td>
      <td><a   class="btn btn-danger" href="..\admin\studentenquairydelete.php?id=<?php echo $result['sr_no']; ?>">delete</a></td>
    
    </tr>
    
    <?php
    }
    
    ?>

</tbody>
    <tfoot>
    <tr>
    <th scope="col">Sr no.</th>
        <th scope="col">enrollment</th>
        <th scope="col">Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Title</th>
         <th scope="col">Description</th>
         <th scope="col">Date</th>
        <th scope="col">Sem</th>
         <th scope="col">Action</th>
  

</tr>
    </tfoot>
  </table>


</div>




<?php

include('adminfooter.php');

?>
