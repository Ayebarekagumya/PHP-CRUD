<?php
include "crud.php";

if (isset($_POST['add_student'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$first_name', '$last_name', $age)";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>