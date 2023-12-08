<?php
    while($row = mysqli_fetch_assoc($query)){
        

        $output .= '<a><div class="content">
        
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] ."<br>" . $row['email'] .'<input type="checkbox" name="user_check[]" value="'.$row['unique_id'].'" /></span>
                        
                    </div>
                    </div> 
                    <div></div></a>';
    }
?>