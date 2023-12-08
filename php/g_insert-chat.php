<?php 
    session_start();
    if(isset($_POST['submit'])){
        
        include_once "config.php";
        $incoming_msg_id=$_SESSION['unique_id'];
        $g_id=$_POST['useri'];
        $g_name=mysqli_real_escape_string($conn,$_POST['group_name']);
        $message =$_POST['message'] ;
        $message=str_replace("<br>", "", $message);
        $message=str_replace("<div>", "<br>", $message);
        $message=str_replace("</div>", "", $message);

        $sql = "SELECT * FROM users where unique_id='{$_SESSION['unique_id']}'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $message="Name: ".$row['fname']."<br>".$message;
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO g_msg (g_id,incoming_msg_id, msg)
                                        VALUES ('$g_id', '{$incoming_msg_id}', '{$message}')");


header("location: ./g_chat.php?group_name=$g_name");
        }
    }else{
        header("location: ./");
    }
    


    
?>