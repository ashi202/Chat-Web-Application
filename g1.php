
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
    <div class="content">
        <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Group name</label>
          <input type="text" name="group" placeholder="Enter group name">
        </div>
</form>
</div>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="users.js"></script>

</body>
</html>
