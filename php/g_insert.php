<?php 
session_start();
    if(isset($_POST['submit'])){
        
        include_once "config.php";
        $group_name = $_POST['group'];
        $user_check = $_POST['user_check'];
        if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if(in_array($img_ext, $extensions) === true){
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if(in_array($img_type, $types) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                        $ran_id = rand(time(), 100000000);
                        
                        $insert_query = mysqli_query($conn, "INSERT INTO rooms (roomname,img) VALUES ('$group_name','{$new_img_name}')");
                    }}}} 
$N = count($user_check);
for($i=0; $i < $N; $i++)
{
    $sql = mysqli_query($conn, "INSERT INTO g_users (user_id,group_name) VALUES ('$user_check[$i]', '$group_name')");
}
$sql = mysqli_query($conn, "INSERT INTO g_users (user_id,group_name) VALUES ('$_SESSION[unique_id]', '$group_name')");
header("location:../users.php");

    }
    
?>