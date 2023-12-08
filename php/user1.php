<?php
    session_start();
    include_once "config.php";
    $sql = "SELECT * FROM users where NOT unique_id = {$_SESSION['unique_id']} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "g_data.php";
    }
    echo $output;
?>