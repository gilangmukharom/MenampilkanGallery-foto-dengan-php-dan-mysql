<?php

include("includes/config.php");
$target_dir = "gallery/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {

	//Mengecek foto yang sudah ada
	if (file_exists($target_file)) {
		echo "Maaf foto yang anda upload sudah ada";
		$uploadOk = 0;
	}
	// cek ukuran foto
	if ($_FILES["foto"]["size"] > 2097152) {
		echo "Maaf resolusi foto yang anda upload terlalu besar.";
		$uploadOk = 0;
	}
	// Jenis format foto yang diperbolehkan
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Maaf hanya foto bertipe JPG, PNG, GIF, dan JPEG saja yang dapat diupload";
		$uploadOk = 0;
	}
	//Cek status UploadOk
	if ($uploadOk == 0) {
		echo "Maaf foto tidak dapat diupload, silahkan ulang kembali!";
	//Cek jika benar akan masuk ke fungsi
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$nama = basename( $_FILES["foto"]["name"]);
			$tgl = date("Y-m-d");
			$query = $koneksi->query("INSERT INTO galeri(tgl_upload, nama) VALUES('$tgl','$nama')") or die($koneksi->error);
			if($query){
				$i = $koneksi->insert_id;
				header("Location: foto.php?id=".$i);
			}else{
				echo '<script>alert
				("Gagal Upload, Silahkan ulangi kembali!"); document.location="upload.php?menu=upload";
				</script>';
			}
		} else {
			echo "Maaf, file yang anda upload error!.";
		}
	}
}
?>