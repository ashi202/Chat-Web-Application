<?php 
        include_once "php/config.php";
        $output = "";
        $sql = "SELECT * FROM g_msg";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. nl2br($row['msg']) .'</p>
                                </div>
                                </div>';
                
                }
            }
        else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    

?>