<?php

require "config.php";

$data = query("SELECT * FROM postingan");
$dataKategori = query("SELECT kategori FROM postingan");


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
    <style>
        .text {
  display: block;
  width: 100%;

  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mt-2 mt-lg-0">
      
      <li class="nav-item">
        <a class="btn mx-2 btn-warning" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<h1>Recent Post</h1>
<div class="row">
    <div class="col-md-9">
        <?php foreach ($data as $d): ?>
    <div class="card mb-3" style="width: 100%; ">
                    <img class="card-img-top" style="margin: 0 auto;
                    overflow: hidden;
                    position: relative;
                    height: 200px; object-fit: cover; " src="http://localhost/web-simpel11/images/<?= $d['gambar'] ?>"  alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-capitalize"><?= $d['judul'] ?></h5>
                      <p class="card-text text"><?= $d['deskripsi'] ?></p>
                      <a href="javascript:void(0)" onclick="tampil(`; text+= element.id + `)" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
                  </div>
                  <?php endforeach; ?>
    </div>
    <div class="col-md-3">
        <h2>Categories</h2>
        <div class="list-group">
  <?php foreach($dataKategori as $d) : ?>
  <a href="#" class="list-group-item list-group-item-action"><?= $d['kategori'] ?></a>
  <?php endforeach; ?>
</div>
    </div>
    
    
</div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>