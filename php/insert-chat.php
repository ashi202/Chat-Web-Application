<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_GET['incoming_id']);
        $message =mysqli_real_escape_string($conn, $_GET['value']) ;
        $message=str_replace("<br>", "", $message);
        $message=str_replace("<div>", "<br>", $message);
        $message=str_replace("</div>", "", $message);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or header("location: .l../$incomming_id");;
        }
    }else{
        header("location: ..l./login.php");
    }


    
?>