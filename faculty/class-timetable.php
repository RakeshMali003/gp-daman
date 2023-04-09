<?php
include('afterloginfacultysidebar.php');
 include('../connection/connection.php');
 ?>




<div class="main_content">

<div class="modal-body">
          <form class="row g-3 mt-2" method="POST">
<h3><label for="">Abb Time Table</label></h3> <hr>
            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Enrollment Number</label>
              <input type="number" class="form-control" name="enrollmentnumber" required>
            </div>

            <div class="col-md-6">
              <label for="validationDefault05" class="form-label">Student Name</label>
              <input type="text" class="form-control" name="sname" pattern="[A-Za-z ]+" minlength="3" required >
            </div>

            <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Subject</label>
      <select class="form-select" name="subject" id="validationDefault04" required>
        <option value="Math Basic">Math basic</option>
        <option value="Marth part-2">Math part-2</option>
        <option value="Marth advance">Math advance</option>
        <option value="Enviromental">enviromental</option>
        <option value="English">english</option>
        <option value="Python">python</option>
        <option value="Python advance">python advance</option>
        <option value="asp.net">asp.net</option>
        <option value="ens">ens</option>
        <option value="Ict">Ict</option>
        <option value="Icn">Icn</option>
        <option value="Java">Java</option>
        <option value="Java Advance">Java advance</option>
        <option value="Os">os</option>
        <option value="Electronic">electronic</option>
      </select>
    </div>
            
    <div class="col-md-6">
      <label for="validationDefault04" class="form-label">Semester</label>
      <select class="form-select" name="sem" id="validationDefault04" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
   
      </select>
    </div>

            <div class="col-md-4">
              <label for="validationDefault05" class="form-label">Mark</label>
              <input type="text" class="form-control" name="mark" pattern="[0-9]{1,3}" minlength="1" maxlength="2" required>
            </div>

            

            <div class="col-12">
              <input type="submit" class="btn btn-primary" name="submit" value="Add Result">
            </div>

            




          </form>

          

</div>


<?php

include('afterloginfacultyfooter.php');

?>


