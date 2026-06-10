<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "header1.php";

include "crud.php";
?>
      <div class="box1">
      <h2>All Students</h2>
      <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
      </div>
      <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
<?php

$query="SELECT * FROM students";
    
    $result=mysqli_query($connection,$query);

  if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
    else{
    while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
      <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
         <?php
        }
     }
      ?>
    </tbody>
</table>

     <!-- Modal -->
<form action="insert.php" method="POST">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="age" placeholder="Enter age">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_student" value="ADD"></button> 
      </div>
    </div>
  </div>
</div>   
 </form>
<?php
    include "footer.php";
?>
    