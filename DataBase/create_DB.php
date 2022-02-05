    <!-- database alerts -->
    <?php

        // Data-Base name Coming From User
        $nameDB= $_POST['nameDB2'];
        // Create a DB
        $sql = "CREATE DATABASE $nameDB";
        $result = mysqli_query($connect, $sql);

        // For debugging
        // echo var_dump($result);

        if ($result) {
            echo '<div class="container"><div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Yaah !!</strong>' . $nameDB . ' Database Created !!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
        } else {
            // echo the alert-->
            echo '<div class="container my-5"><div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Oops !!</strong> Error : Database Already Exits!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
            echo mysqli_error($connect);
        }
    
    ?>