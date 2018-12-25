<?php 
include '../include/koneksi.php';
switch(@$_GET['act']){
default:
?>
	<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <?php 
          		$sql = "SELECT * from profile where id_profile = '1'";
          		$hasil = mysqli_query($koneksi, $sql);
          		$row = mysqli_fetch_array($hasil);
          	?>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img src=" <?php echo '../image/image_profile/'.$row[6]; ?> " alt="Foto Toko" width="200"> </div>
                    <h4 class="mb-0"><?php echo $row['nama_toko']; ?></h4>
                    <!-- <span class="text-muted d-block mb-2">Project Manager</span> -->

                  </div>
                  
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Profile Toko</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="post" enctype="multipart/form-data" action="aksi.php?module=profile&act=edit">
                            <div class="form-row">
                            	<input type="hidden" name="id_profile" value="<?php echo $row['id_profile'] ?>">
                              <div class="form-group col-md-6">
                                <label>Nama Toko</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Toko" value="<?php echo $row['nama_toko'] ?>"> </div>

                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'] ?>"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>No Telp</label>
                                <input type="text" class="form-control" name="ntelp" placeholder="No Telp" value="<?php echo $row['kontak'] ?>"> </div>
                            </div>
                            <div class="form-group">
                              <label>Alamat Toko</label>
                                <textarea class="form-control" name="alamat" rows="5"><?php echo $row['alamat']; ?></textarea> </div>
                    
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label>Deskripsi Toko</label>
                                <textarea class="form-control" name="deskripsi" rows="5"><?php echo $row['deskripsi']; ?></textarea>
                              </div>
                            </div>
                            <div class="form-row">
                            	<div class="form-group col-md-12">
                            		<label>Foto Toko</label>
                            		<input class="form-control" type="file" name="image">
                            	</div>
                            </div>
                            <button type="submit" class="btn btn-accent" name="simpan">Simpan</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>



<?php
break;}
?>
