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
      <h3 class="page-title">Data Product</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Default Light Table -->
  <div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          <!-- <form method=post action='?module=product&act=tambahproduct'>
            <input class='btn btn-primary' type=submit value='Tambah Product'>
          </form> -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Product</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category">Category</button>
        </div>
        <div class="modal fade" id="tambah" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="col-lg-12 col-md-12">
                    <div class="card card-small mb-3">
                      <div class="card-body">
                          <form class="add-new-post" action="aksi.php?module=product&act=input" method="post" enctype="multipart/form-data">

                          <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="name_product" >
                          <div class=" mb-3">
                            <textarea class="mytextarea" name="text" ></textarea>
                          </div>

                           <select name="category" class="form-control form-control-lg mb-3">
                            <option value="">pilih category</option>
                            <?php 
                              
                              $sql = "SELECT * from category ";
                              $hasil = mysqli_query($koneksi, $sql);
                              while ($row = mysqli_fetch_array($hasil)) {
                              $id = $row[0];

                            ?>
                            <option value="<?php echo $row[1] ?>"> <?php echo $row[1] ?> </option>

                            <?php } ?>
                          </select>
                          
                          <input type="file" name="image" class="form-control form-control-lg mb-3" >
                          <input type="submit" class="btn btn-primary" style="float: right;margin-right: 5px;" name="simpan" value="Simpan">

                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
        <div class="modal fade" id="category" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="col-lg-12 col-md-12">
                
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Categories</h6>
                  </div>
                  <div class='card-body p-0'>
                     <form id="category" method="post" action="aksi.php?module=product&act=category">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="New category" aria-label="Add new category" aria-describedby="basic-addon2" name="category">
                        <div class="input-group-append">
                          <button class="btn btn-white px-2" type="submit" name="simpan">
                            <i class="material-icons">add</i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>        
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body p-0 pb-3 text-center">
          <table class="table mb-0">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">No</th>
                <th scope="col" class="border-0">Nama Product</th>
                <th scope="col" class="border-0">Deskripsi Product</th>
                <th scope="col" class="border-0">Category</th>
                <th scope="col" class="border-0">Image Product</th>
                <th scope="col" class="border-0">Aksi</th>
              </tr>
            </thead>
           
<?php
$tampil=mysqli_query($koneksi, "select * from menu_post order by id_product desc");
$no=1;
while 
	($r=mysqli_fetch_array($tampil)){
?>
   <tbody>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $r["nama_product"]; ?></td>
      <td><?php echo substr($r['deskripsi_product'],0,30); ?></td>
      <td><?php echo $r["nama_category"]; ?></td>
      <td><img src="<?php echo '../image/'.$r["img_product"]; ?>" width="30" height="30"></td>
      <td><button class='btn btn-primary' data-toggle="modal" data-target="#edit<?php echo $r['id_product'];?>">Edit</button><a class="btn btn-danger" href="../admin/aksi.php?module=product&act=hapus&id=<?php echo $r["id_product"]; ?>">Hapus</a></td>
    </tr>

  </tbody>
  <div class="modal fade" id="edit<?php echo $r['id_product'];?>" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="col-lg-12 col-md-12">
                    <div class="card card-small mb-3">
                      <div class="card-body">
                        <?php 
                          $id = $r['id_product'];
                          
                          $sql = "SELECT * from menu_post where id_product = '$id'";
                          $hasil = mysqli_query($koneksi, $sql);
                          $baris = mysqli_fetch_array($hasil);
                        ?>
                          <form class="add-new-post" action="aksi.php?module=product&act=edit" method="post" enctype="multipart/form-data">

                          <input type="hidden" name="id" value="<?php echo $baris['id_product'] ?>">
                          <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="name_product" value="<?php echo $baris['nama_product']; ?>">
                          <div class="mb-3">
                            <textarea class="mytextarea" name="text" ><?php echo $baris['deskripsi_product']; ?></textarea>
                          </div>

                           <select name="category" class="form-control form-control-lg mb-3">
                           <!--  <option value="<?php echo $baris['nama_category']; ?>"><?php echo $baris['nama_category']; ?></option> -->
                            <?php 
                              
                              $sql = "SELECT * from category ";
                              $hasil = mysqli_query($koneksi, $sql);
                              while ($row = mysqli_fetch_array($hasil)) {
                              $id = $row[0];

                            ?>
                            <option value="<?php echo $row[1] ?>" <?php if ($row[1] == $baris['nama_category']) echo "selected='selected'"; ?>> <?php echo $row[1] ?> </option>

                            <?php } ?>
                          </select>
                          <img src="<?php echo '../image/'.$baris['img_product']; ?>" width='50'><br>
                          <input type="file" name="image" class="form-control form-control-lg mb-3" >
                          <input type="submit" class="btn btn-primary" style="float: right;margin-right: 5px;" name="simpan" value="Simpan">

                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
   <?php
  }
?>
      </table>
        </div>
      </div>
    </div>
  </div>
</div>



       
<?php
break;}
?>

