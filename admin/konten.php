<?php
include "../include/koneksi.php";
if ($_GET['module']=='dashboard') {
	?>
	<!-- / .main-navbar -->
      <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">All Data</h3>
          </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
          <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
              <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                  <div class="stats-small__data text-center">
                    <?php
                    include '../include/koneksi.php'; 
                    $sql = "SELECT COUNT(*) from menu_post";
                    $hasil = mysqli_query($koneksi,$sql);
                    $row = mysqli_fetch_array($hasil)[0];
                    ?>
                    <span class="stats-small__label text-uppercase">Product</span>
                    <h6 class="stats-small__value count my-3"><?php echo $row; ?></h6>
                  </div>
                </div>
                <canvas height="120" class="blog-overview-stats-small-1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
              <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                  <div class="stats-small__data text-center">
                    <?php
                    include '../include/koneksi.php'; 
                    $sql = "SELECT COUNT(*) from category";
                    $hasil = mysqli_query($koneksi,$sql);
                    $r = mysqli_fetch_array($hasil)[0];
                    ?>
                    <span class="stats-small__label text-uppercase">Category</span>
                    <h6 class="stats-small__value count my-3"><?php echo $r; ?></h6>
                  </div>
                  
                </div>
                <canvas height="120" class="blog-overview-stats-small-2"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

	<?php 
		}

		elseif ($_GET['module']=='product') {
			include "modul/product.php";
		}

		elseif ($_GET['module']=='profile') {
			include "modul/profile.php";
		}

		else{
			echo "<p><b>MODUL BELUM ADA</b></p>";
		}
?>