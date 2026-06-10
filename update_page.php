<?php
require_once "header1.php";
include "crud.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);

}else{
    die("ID not provided.");
}


if(isset($_POST['update_student'])){

    $id = $_GET['id'];

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "UPDATE students
              SET first_name='$first_name',
                  last_name='$last_name',
                  age='$age'
              WHERE id='$id'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed: " . mysqli_error($connection));
    }

    header("Location: index.php");
    exit();
}
?>

<form action="update_page.php?id=<?php echo $id; ?>" method="POST">
      
<div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter first name" value="<?php echo $row['first_name']; ?>">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter last name" value="<?php echo $row['last_name']; ?>">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control" id="age" placeholder="Enter age" value="<?php echo $row['age']; ?>">
          </div>
       
      </div>
      <input type="submit" class="btn btn-primary" name="update_student" value="UPDATE">
</form>



<?php require_once "footer.php"; ?>