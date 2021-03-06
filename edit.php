<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Gallery</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

	</head>
	<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}

    .wrap .header 
    {
      font-family: perpetua;
      background-color: #ba895a;
      font-color: #000000;
      text-align: center;
      height: auto;
      padding: 20px
    }
    .gambar
    {
      opacity: 0.4;
      float: right;
      height: 60px;
      width: 80px;
    }

    div.navigasi {
  background: #FFE4c4;
}
li.navigasi{
  float: middle;
  padding: 0;
  margin: 0;
  border-right:  1px solid black;
}
li.navigasi a.navigasi {
  display: block;
  color: black;
  padding: 14px 16px;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
}
ul.navigasi {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background: #FFE4c4;
  border:  0,5px solid black;
}

li.navigasi a.navigasi:hover:not(.active) {
  background-color: #D2691E;
}
#active {
  background-color: #D2691E;
}

    .body{
      background-color: #D2691E;
      padding: 50px;
      font-color: black;
    }

    .isi{
      border-radius: 10px;
      background-color: #FFE4c4;
      height: auto;
      padding: 23px;
      line-height: 40px;
      font-size: 17pt;
      font-family: didot;
      text-align: left;
    }
    .footer{
      background-color:white;
      color: #858179;
      text-align: center;;
    }

.form-popup2 {
  display: none;
  position: fixed;
  bottom: 232px;
  right: 509px;
  border: 3px solid #f1f1f1;
  z-index: 9; */
}

.form-container2 {
  max-width: 400px;
  padding: 10px;
  background-color: white;

}
.form-container2 input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

.form-container2 input[type=text] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container2 .btn2 {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}




.form-container {
  border-radius: 10px;
  max-width: 80%;
  padding: 10px;
  background-color: #b3cde0;

}

.form-container input[type=text] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>
	 <div class="wrap">
  <div class="header"><img class="gambar" src="initiket.png">
    <h1>Gallery Tugas</h1>  
  </div>

<div class="navigasi">
      <ul class="navigasi">
        <li id="active" class="navigasi"><a class="navigasi" href="index.php">Home</a></li>
        <li class="navigasi"><a class="navigasi" href="pesan.php">Pesan</a></li>
        <li class="navigasi"><a class="navigasi" href="promo.html">Promo</a></li>
        <li class="navigasi"><a class="navigasi" href="kontak.html">Contact</a></li>
      </ul>
    </div>  
  <div class="body"> <div class="isi">

	<?php include("includes/navbar.php"); ?>
	
	<div class="container body">
		<h1>Silahkan pilih gambar yang akan diedit :</h1>
		<div class="gal">
			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';
				}
			}
			?>
		</div>
		 <div class="footer"> Developed by : Gilang Mukharom </div>
	</div>
</div>
	 </div>
</div>
  
<div class="form-popup2" id="myForm2" >
   
<div class="container">
 
</div>

</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>