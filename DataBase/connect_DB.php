<?php
    // Connecting to Database
    $serverName = "localhost";
    $userName = "root";
    $pass = "";

    // Create a connection 
    $connect = mysqli_connect($serverName, $userName, $pass);

    // Die if connection was not successfull
    if ($connect) {
        echo '<div class="container"><div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Yaah !!</strong> Your  has been Submitted !!
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


?>