<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo the alert-->
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Yaah !!</strong> Your Form has been Submitted !!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

        //   submit the info to the Database
        // Connecting to Database
        $serverName = "localhost";
        $userName = "root";
        $pass = "";
        $database = 'haa';

        // Create a connection
        $connect2 = mysqli_connect($serverName, $userName, $pass, $database);

        // Die if connection was not successfull
        if ($connect2) {
            echo '<div class="container"><div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Yaah !!</strong> Your MySQL has been Connected!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div></div>';
        } else {
            // echo the alert-->
            echo '<div class="container my-5"><div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Oops !!</strong> Error : Have Some Issue!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div></div>';
            echo mysqli_connect_error($connect);
        }


        $sql = "INSERT INTO `local` ( `Name`, `Age`, `Email`, `Password`) VALUES ( '$name', '$age', '$email', '$password')";
        $result2 = mysqli_query($connect2,$sql);

        // Check for the table creation success
        if ($result2) {
            echo '<div class="container"><div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Yaah !!</strong> Form submitted Successfully !!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
        } else {
            // echo the alert-->
            echo '<div class="container my-5"><div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Oops !!</strong> Error : Table Already Exits!! -- Plz select Another table Name !!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
        }
    }
?>
