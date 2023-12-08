<?php 
    if(isset($_POST['submit'])){
        
        include_once "php/config.php";
        $group_name = $_POST['group'];
        $user_check = $_POST['user_check'];
        $sql = mysqli_query($conn, "INSERT INTO rooms (roomname) VALUES ('$group_name')");

$N = count($user_check);
for($i=0; $i < $N; $i++)
{
    $sql = mysqli_query($conn, "INSERT INTO g_users (user_id,group_name) VALUES ('$user_check[$i]', '$group_name')");
}
header("location:./group");

    }
    
?>