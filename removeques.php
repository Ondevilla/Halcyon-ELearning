<?php

session_start();
$_SESSION["removeques"] = $_POST["employee_id"];
echo "Are you sure you want to delete this Question ? ";



?>