<?php
include "../include/koneksi.php";
$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='admin' && $act=='gantipwd') {
	$set = true;

		$nama=$_POST['nama'];
		$pass=$_POST['pass'];
		$passlama=$_POST['passlama'];
		$baru=$_POST['passbaru'];
		$baru2=$_POST['passbaru1'];
		$baru3=$baru; 
		if ( $passlama == $pass)
		{
			if ($baru == $baru2)
			{
				if($set)
			{
				mysqli_query($koneksi, "UPDATE admin SET password='$baru3' WHERE user='$nama'");
			// $msg= $msg.'Ganti Password Sukses..'; print "<meta http-equiv=\"refresh\"
			// 	content=\"1;URL=javascript:history.go(-1)\">";
				session_destroy();
				exit("<script>window.alert('Ganti Password Sukses harap Login ulang');
				window.location='index.php';</script>");
			}
			}
		else
		{
			$set=false;
			echo "<script>window.alert('Password baru tidak sama');window.location='javascript:history.go(-1)';</script>";
			
		}
		}
		else
{
$set=false;
echo "<script>window.alert('Password Lama salah');window.location='javascript:history.go(-1)';</script>";
}
}

if ($module=='product' && $act=='category') {
	if (isset($_POST['simpan'])) {
		$category = $_POST['category'];

		$sql = "INSERT into category (nama_category) values ('$category')";
		$hasil = mysqli_query($koneksi, $sql);
		if ($hasil) {
			echo"<script>window.open('server.php?module=product&act','_self')</script>";
			// print "<meta http-equiv=\"refresh\" content=\"1;URL=server.php?module=product\">";
		}else{
			echo "error".$sql;
		}
		# code...
	}
}

if ($module == 'product' and $act == 'input') {
	$set = true;
    if (isset($_FILES['image'])) {
        $tipe_file  = $_FILES['image']['type'];
        $lokasi_file = $_FILES['image']['tmp_name'];
        $nama_file  = $_FILES['image']['name'];
        $save_file =move_uploaded_file($lokasi_file,"../image/$nama_file");
    }
    

    if(empty($lokasi_file)){
        $set=false;
        echo "<script>alert('Anda belum memasukan image')</script>";
        echo"<script>window.open('server.php?module=product&act','_self')</script>";
    }
    else{
	    //tentukan tipe file harus image 
	    if ($tipe_file != "image/gif" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/jpg" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/png")
	    {
	        $set=false;
	        echo "<script>alert('Upload gagal, tipe file harus image')</script>";
	    }else{
	        isset($save_file);
	    }
	    //replace di server 
	    if($save_file){
	        chmod("../image/$nama_file", 0777);
	    }else{
	        echo "<script>alert('Upload image gagal !')</script>";
	        $set =  false;
	    }
	}

	if (isset($_POST['simpan']) && $set) {
		$name_product = $_POST['name_product'];
		$deskripsi = $_POST['text'];
		$category = $_POST['category'];



		if ($name_product == '') {
			echo "<script>alert('Masukkan Nama Product ')</script>";
			echo"<script>window.open('server.php?module=product&act','_self')</script>";
			exit();
		}
		if ($deskripsi == '') {
			echo "<script>alert('Masukkan deskripsi Product ')</script>";
			echo"<script>window.open('server.php?module=product&act','_self')</script>";
			exit();
		}
		if ($category == '') {
			echo "<script>alert('Pilih Category')</script>";
			echo"<script>window.open('server.php?module=product&act','_self')</script>";
			exit();
		}

		
		$sql = "INSERT into menu_post (nama_product,deskripsi_product,nama_category,img_product,waktu) values ('$name_product','$deskripsi','$category','$nama_file',CURRENT_TIMESTAMP)";
		$hasil = mysqli_query($koneksi,$sql);
		if ($hasil) {
			echo"<script>window.open('server.php?module=product&act','_self')</script>";
		}else{
			echo "error ".$sql;
		}
	}
}

if ($module == 'product' && $act == 'hapus') {
	$sql = "DELETE from menu_post where id_product = '$_GET[id]'";
	$hasil = mysqli_query($koneksi, $sql);
	if ($hasil) {
		echo"<script>window.open('server.php?module=product&act','_self')</script>";
	}else{
		echo "error ".$sql;
	}
}

if ($module == 'product' && $act == 'edit') {
	$id = $_POST['id'];
	$set = true;
    if (isset($_FILES['image'])) {
        $tipe_file  = $_FILES['image']['type'];
        $lokasi_file = $_FILES['image']['tmp_name'];
        $nama_file  = $_FILES['image']['name'];
        $save_file =move_uploaded_file($lokasi_file,"../image/$nama_file");
    }
    

    if(empty($lokasi_file)){
        isset($set);
    }
    else{
	    //tentukan tipe file harus image 
	    if ($tipe_file != "image/gif" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/jpg" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/png")
	    {
	        $set=false;
	        echo "<script>alert('Upload gagal, tipe file harus image')</script>";
	    }else{
	        $unlink=mysqli_query($koneksi,"select * from menu_post where id_product='$id'");
			$CekLink=mysqli_fetch_array($unlink);
			if(!empty($CekLink[4]))
			{
				unlink("../image/$CekLink[4]");
			}
			isset($save_file);
	    }
 
	    if($save_file){
	        chmod("../image/$nama_file", 0777);
	    }else{
	        echo "<script>alert('Upload image gagal !')</script>";
	        $set =  false;
	    }
	}
	if (isset($_POST['simpan']) && $set) {
		$id = $_POST['id'];
		$name_product = $_POST['name_product'];
		$deskripsi = $_POST['text'];
		$category = $_POST['category'];
		
		if (empty($lokasi_file)) {
            mysqli_query($koneksi, "UPDATE menu_post SET nama_product = '$name_product',deskripsi_product = '$deskripsi',nama_category = '$category',waktu = CURRENT_TIMESTAMP WHERE id_product = '$id'");
        }else{
            mysqli_query($koneksi, "UPDATE menu_post SET nama_product = '$name_product',deskripsi_product = '$deskripsi',nama_category = '$category',img_product = '$nama_file',waktu = CURRENT_TIMESTAMP WHERE id_product = '$id'");
        }
        echo"<script>window.open('server.php?module=product&act','_self')</script>";

	}
}

if ($module == 'profile' && $act == 'edit') {
	$id = $_POST['id_profile'];
	$set = true;
    if (isset($_FILES['image'])) {
        $tipe_file  = $_FILES['image']['type'];
        $lokasi_file = $_FILES['image']['tmp_name'];
        $nama_file  = $_FILES['image']['name'];
        $save_file =move_uploaded_file($lokasi_file,"../image/image_profile/$nama_file");
    }
    

    if(empty($lokasi_file)){
        isset($set);
    }
    else{
	    //tentukan tipe file harus image 
	    if ($tipe_file != "image/gif" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/jpg" and
	        $tipe_file != "image/jpeg" and
	        $tipe_file != "image/png")
	    {
	        $set=false;
	        echo "<script>alert('Upload gagal, tipe file harus image')</script>";
	    }else{
	        $unlink=mysqli_query($koneksi,"select * from profile where id_profile='$id'");
			$CekLink=mysqli_fetch_array($unlink);
			if(!empty($CekLink[6]))
			{
				unlink("../image/image_profile/$CekLink[6]");
			}
			isset($save_file);
	    }
 
	    if($save_file){
	        chmod("../image/image_profile/$nama_file", 0777);
	    }else{
	        echo "<script>alert('Upload image gagal !')</script>";
	        $set =  false;
	    }
	}
	if (isset($_POST['simpan']) && $set) {
		$id = $_POST['id_profile'];
		$namatoko = $_POST['nama'];
		$email = $_POST['email'];
		$kontak = $_POST['ntelp'];
		$alamat = $_POST['alamat'];
		$deskripsi = $_POST['deskripsi'];

		if (empty($lokasi_file)) {
			$sql = "UPDATE profile SET nama_toko = '$namatoko',email = '$email',kontak = '$kontak',alamat = '$alamat',deskripsi = '$deskripsi' WHERE id_profile = '$id'";
            $hasil = mysqli_query($koneksi, $sql);
            if ($hasil) {
            	echo"<script>window.open('server.php?module=profile&act','_self')</script>";
            }else{
            	echo "error ".$sql;
            }
        }else{
            $sql = "UPDATE profile SET nama_toko = '$namatoko',email = '$email',kontak = '$kontak',alamat = '$alamat',deskripsi = '$deskripsi',image = '$nama_file' WHERE id_profile = '$id'";
            $hasil = mysqli_query($koneksi, $sql);
            if ($hasil) {
            	echo"<script>window.open('server.php?module=profile&act','_self')</script>";
            }else{
            	echo "error ".$sql;
            }
            
        }
       

		# code...
	}

}