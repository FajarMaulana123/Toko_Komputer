<?php
session_start();

if (empty($_SESSION['namauser']) and
	empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses halaman ini, anda harus loginterlebih dahulu <br>";
	echo "<a href=index.php><b>LOGIN</b></a></center>";
}

else {
	?>

	<!doctype html>
	<html class="no-js h-100" lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Admin</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
	    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
	    <script async defer src="https://buttons.github.io/buttons.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
	  </head>
	  <body class="h-100">
	    <div class="container-fluid">
	      <div class="row">
	        <!-- Main Sidebar -->
	        <?php include "menu.php"; ?>
	         <!-- End Main Sidebar -->
	        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
	          <div class="main-navbar sticky-top bg-white">
	            <!-- Main Navbar -->
	            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
	              <div class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
	              </div>
	              <ul class="navbar-nav border-left flex-row ">
	                <li class="nav-item dropdown">
	                  <a class="nav-link dropdown-toggle text-nowrap px-5 mr-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
	                    
	                   <!--  <img class="user-avatar rounded-circle mr-2" src="images/avatars/0.jpg" alt="User Avatar"> -->
	                    <span><?php echo $_SESSION['namauser']; ?></span>
	                  </a>
	                  <div class="dropdown-menu dropdown-menu-small">
	                    <div class="dropdown-divider"></div>
	                    <a class="dropdown-item" data-toggle="modal" href="#ganti">
                      	  <i class="material-icons">&#xE7FD;</i> Ganti Password </a>
	                    <a class="dropdown-item text-danger" href="logout.php">
	                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
	                  </div>
	                </li>
	              </ul>
	              <nav class="nav">
	                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
	                  <i class="material-icons">&#xE5D2;</i>
	                </a>
	              </nav>
	            </nav>
	          </div>
	          <!-- / .main-navbar -->
	          <?php include "konten.php"; ?>
	          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
	            <span class="copyright ml-auto my-auto mr-2">Tubes Pemograman WEB
	              <a href="#" rel="nofollow">Fajar Maulana</a>
	            </span>
	          </footer>
	        </main>
	      </div>
	    </div>
	    <div id="ganti" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <div class="modal-body">
		      	<form class="add-new-post" action="aksi.php?module=admin&act=gantipwd" method="post">
		      	<input type=hidden name=nama value="<?php echo $_SESSION['namauser'];  ?>">
		      	<input type=hidden name=pass value="<?php echo $_SESSION['passuser'];  ?>">
		        <input class="form-control form-control-lg mb-3" type="password" placeholder="Your Password" name="passlama" >
		        <input class="form-control form-control-lg mb-3" type="password" placeholder="New Password" name="passbaru" >
		        <input class="form-control form-control-lg mb-3" type="password" placeholder="Repeat New Password" name="passbaru1">
                <input type="submit" class="btn btn-primary" style="float: right;margin-right: 5px;" name="simpan" value="Simpan">
		    	</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
	    <script src="scripts/extras.1.1.0.min.js"></script>
	    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
	    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
	   
	    <script type="text/javascript" src="../tinymce/tinymce.js"></script>
	    <script type="text/javascript">
	        tinymce.init({
	            selector: '.mytextarea'
	        });
	    </script>   
	  </body>
	</html>

	<?php
		}
	?>