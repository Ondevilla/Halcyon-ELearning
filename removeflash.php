<?php

session_start();
$_SESSION["removeflash"] = $_POST["employee_id"];
echo "Are you sure you want to delete this file ? ";



?>