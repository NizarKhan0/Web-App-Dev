<header class="header">

   <div class="flex">

      <a href="index.html" class="logo">Alice Bakery House</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `tblcart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>


      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>