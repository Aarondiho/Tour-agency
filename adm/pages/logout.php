
<script>
    start_load();
    </script>
<?php
include '../connection/db_connect.php';
include('../includes/session.php');
$enligne = 0;

$online = $conn->EXEC("UPDATE utilisateur SET enligne ='$enligne' WHERE id_util='$session_id'");

if($online){
    
unset($_SESSION['util_id_util']);

    header("location: ../index.php");
}


?>