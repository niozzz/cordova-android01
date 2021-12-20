<?php 
		require "config.php";
		if (isset($_POST['tombolUpload'])){

            $judul = htmlspecialchars($_POST['judul']);
            $kategori = htmlspecialchars($_POST['kategori']);
            $deskripsi = htmlspecialchars($_POST['deskripsi']);

			$ekstensi_diperbolehkan	= array('png','jpg');
            // var_dump($_FILES);
            // die;
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['gambar']['size'];
			$file_tmp = $_FILES['gambar']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'images/'.$nama);
					$query = mysqli_query($conn, "INSERT INTO postingan VALUES(NULL, '$judul','$nama','$deskripsi','$kategori')");
					if($query){
						echo "<script>
                            alert('berhasil');
                            document.location.href='dashboard.php';
                            </script>";
					}else{
						echo "<script>
                            alert('tidak berhasil');
                            document.location.href='dashboard.php';
                            </script>";
					}
				}else{
					echo "<script>
                            alert('ukuran file terlalu besar');
                            document.location.href='dashboard.php';
                            </script>";
				}
			}else{
				echo "<script>
                            alert('tipe file invalid');
                            document.location.href='dashboard.php';
                            </script>";
			}
		}
		?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
            <h1>Upload Postingan</h1>

            <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Judul</label>
                <input type="text" name="judul" class="form-control" id="email" >
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" >
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" >
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" name="tombolUpload">Submit</button>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>