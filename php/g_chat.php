<?php 
 session_start();
 include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../login.php");
  }
?>
<?php include_once "../header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          include_once "config.php";
          $group_name = mysqli_real_escape_string($conn, $_GET['group_name']);
          
          $sql = mysqli_query($conn, "SELECT * FROM rooms WHERE roomname = '$group_name'");
          //$sql1 = mysqli_query($conn, "SELECT * FROM g_users WHERE group_name = 'ewrtwe'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            //$row1 = mysqli_fetch_assoc($sql1);
          }
        ?>
        <a href="../users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $group_name ?></span>
          
        </div>
      </header>
      <a href="g_left.php?group_name=<?php echo $group_name; ?>"><p align="right">Left Group&nbsp;</p></a>
      <div class="chat-box">

      </div>
      <form action="upload.php" method="post" id="uploadImage"  >
      <label for="uploadFile" id="rr"><img src="upload.png" /></label>
     <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" hidden/>
     </form>
      <form action="g_insert-chat.php" method="post" class="typing-area" id = "submitForm">
      <textarea id="textarea" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off" form = "submitForm"></textarea>
        
        <input type="text" class="incoming_id" name="useri" value="<?php echo $row['sn']; ?>" form = "submitForm" hidden>
        <input type="text" class="incoming_id" name="group_name" value="<?php echo mysqli_real_escape_string($conn,$group_name); ?>" form = "submitForm" hidden>
       
        <button type="submit" name="submit"><i class="fab fa-telegram-plane"></i> </button>
      </form>
      
    </section>
  </div>
  
  <script src="g_chat.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js"></script>
  <script>
   
    $('#textarea').emojioneArea({
      pickerPosition: 'top',
      toneStyle: "bullet"
    });
    $(document).on('click', '.if', function(){
      var element = $('#textarea').emojioneArea();
    element[0].emojioneArea.setText('');
    });
    $(document).on('keypress', '.if', function () {
    // Initialize the emojioneArea instance for the #textarea element
    var element = $('#textarea').emojioneArea();
    element[0].emojioneArea.setText('');
});
$('#uploadFile').on('change', function(){
  
  $('#uploadImage').ajaxSubmit({
    
   target: ".emojionearea-editor",
   resetForm: true
  });
 });


    
  </script>
</body>
</html>
