/*|--------------------------------------|
* |SL.No | Name | Age | Email | Password |
* |--------------------------------------|
* |  01  | PSR  | 21  | PSR@. | 12345    |
* |--------------------------------------|
*/

<?php

// Create a table in the db
$sql = "CREATE TABLE `$nameDB`.`$table` ( `SL.No` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Age` INT(10) NOT NULL , `Email` VARCHAR(30) NOT NULL , `Password` VARCHAR(30) NOT NULL , PRIMARY KEY (`SL.No`))";

$result2 = mysqli_query($connect,$sql);

// Check for the table creation success
if ($result2) {
    echo '<div class="container"><div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong>Yaah !!</strong>'.$table.' was Created Successfully !!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div></div>';
} else {
    // echo the alert-->
    echo '<div class="container my-5"><div class="alert alert-primary alert-dismissible fade show" role="alert">
<strong>Oops !!</strong> Error : Table Already Exits!! -- Plz select Another table Name !!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div></div>';
}
  
?>



