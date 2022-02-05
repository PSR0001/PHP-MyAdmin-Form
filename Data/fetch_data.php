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
    }
?>