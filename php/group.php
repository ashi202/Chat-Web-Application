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
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="g_insert.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Group name</label>
          <input type="text" name="group" placeholder="Enter group name">
        </div>
        <div class="wrapper">
    <section class="users">
    
      <div id="output">

      </div>
    </section>
  </div>
  <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
  <div class="field button">
          <input type="submit" name="submit" value="Create Group">
        </div>
</form>
    </section>
</div>
      </form>
</section>
</div>
  
  <script>
$(document).ready(function() {
  // Use AJAX to fetch PHP output
  $.ajax({
      url: 'user1.php', // Replace with your PHP file
      type: 'GET',
      success: function(response) {
          // Display PHP output in the 'output' div
          $('#output').html(response);
      },
      error: function(xhr, status, error) {
          // Handle error if the AJAX request fails
          console.error(error);
          $('#output').html('Error fetching data');
      }
  });
});

  </script>
</body>
</html>
