<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Shopping Cart</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    if (isset($_SESSION['status'])) {
                      echo "<h4 class='alert alert-success'>".$_SESSION['status']."</h4>";
                      unset($_SESSION['status']); 
                    }    
                        ?>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>How to insert data into database using php</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <form action="code.php" method="POST">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter your name" class="form-control"
                                        required>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control"
                                        required>
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" placeholder="Enter your phone number"
                                        class="form-control" required>
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" placeholder="Enter your designation"
                                        class="form-control" required>
                                    <button type="submit" name="insert_data" class="btn btn-primary mt-2">Save
                                        Data</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </body>

</html>