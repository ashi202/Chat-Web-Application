
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          include_once "php/config.php";
          $sql = mysqli_query($conn, "SELECT * FROM rooms WHERE roomname = 'ewrtwe'");
          $sql1 = mysqli_query($conn, "SELECT * FROM g_users WHERE group_name = 'ewrtwe'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $row1 = mysqli_fetch_assoc($sql1);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        
        <div class="details">
          <span><?php echo $row['roomname'] ?></span>
          
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="php/upload.php" method="post" id="uploadImage">
      <label for="uploadFile" id="rr"><img src="upload.png" /></label>
     <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" hidden/>
     </form>
      <form action="g_insert-chat.php" class="typing-area" >
      <textarea id="textarea" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off"></textarea>
        
        <input type="text" class="incoming_id" name="1365922330" hidden>
       
    
   
        <button class="if"><i class="fab fa-telegram-plane"></i></button>
      </form>
      
    </section>
  </div>
  
  <script src="chat.js"></script>
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
