<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_GET['incoming_id']);
        
            $sql = mysqli_query($conn, "DELETE FROM messages WHERE (outgoing_msg_id='$outgoing_id' and incoming_msg_id='$incoming_id') or (outgoing_msg_id='$incoming_id' and incoming_msg_id='$outgoing_id') ");
            header("location: ../chat.php?user_id=$incoming_id");
    }else{
        header("location: ..l./login.php");
    }


    
?>