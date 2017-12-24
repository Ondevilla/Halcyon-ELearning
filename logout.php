<?php
session_start();



 include 'import.css.js.php';




 

?>


<?php if ($_SESSION['HorS']==1)
{

session_destroy();
echo "<script>window.open('login2.php','_self')</script>";
        exit();

}
?>


<?php if ($_SESSION['HorS']==2)
{

session_destroy();
echo "<script>window.open('login3.php','_self')</script>";
        exit();

}
?>
