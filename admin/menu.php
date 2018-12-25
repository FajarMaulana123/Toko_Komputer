<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
          <?php  
            include '../include/koneksi.php';
            $sql = "SELECT * from profile";
            $hasil = mysqli_query($koneksi, $sql);
            $row = mysqli_fetch_array($hasil);
          ?>
          <span class="d-none d-md-inline ml-1">Admin <?php echo $row['nama_toko']; ?></span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <div class="nav-wrapper">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link " href="server.php?module=dashboard">
          <i class="material-icons">edit</i>
          <span> Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="server.php?module=product&act">
          <i class="material-icons">vertical_split</i>
          <span>Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="server.php?module=profile&act">
          <i class="material-icons">person</i>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </div>
</aside>