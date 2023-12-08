<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_GET['group_name']);
        
            $sql = mysqli_query($conn, "DELETE FROM g_users WHERE (user_id='$outgoing_id' and group_name='$incoming_id')");
            header("location: ../users.php");
    }else{
        header("location: ..l./login.php");
    }


    
?>