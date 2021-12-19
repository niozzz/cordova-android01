<?php

require "config.php";
$key = '';
if (isset($_GET['key']))
{

    $key = $_GET['key'];
}
$data = query("SELECT * FROM postingan WHERE judul LIKE '%$key%' OR kategori LIKE '%$key%' OR deskripsi LIKE '%$key%'");
// var_dump($data);
// die;
print json_encode($data);