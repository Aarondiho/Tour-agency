<?php
session_start();
 //Check whether the session variable SESS_MEMBER_ID is present or not

    if (!isset($_SESSION['util_id_util']) || ($_SESSION['util_id_util'] == '')) {
        header("location: ../index.php");
        exit();
    }

	$session_id = $_SESSION['util_id_util'];
	$email = $_SESSION['util_email'];
	$util_type = $_SESSION['util_type'];
	$mot_pass = $_SESSION['util_mot_pass'];
    $nom = $_SESSION['util_nom'];
    $prenom = $_SESSION['util_prenom'];
    $type = $_SESSION['util_type'];
    $typeFed = $_SESSION['util_federation'];
    

?>