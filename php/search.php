<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $sql1= "SELECT * FROM g_users WHERE user_id = {$outgoing_id} AND (group_name LIKE '%{$searchTerm}%')";
    $output = "";
    $query = mysqli_query($conn, $sql);
    $query1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($query) > 0 or mysqli_num_rows($query1) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>