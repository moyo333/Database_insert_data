 <?php
session_start();

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'phptutorials');

// Check if the form is submitted
if (isset($_POST['insert_data'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];

    // Insert data into database
    $query = "INSERT INTO employees (name, email, phone, designation) VALUES ('$name', '$email', '$phone', '$designation')";
    $query_run = mysqli_query($con, $query); // Use $con here

    // Check if the query was successful
    if ($query_run) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: insert-data.php");
        exit(); // Best practice to stop script after redirect
    } else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: insert-data.php");
        exit();
    }
}
?>