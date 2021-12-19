<?php

$conn = mysqli_connect("localhost", "root", "", "web-simpel");

if (!$conn)
{
    echo "tidak terkoneksi". mysqli_connect_error();
}

function query($query)
{
    global $conn;
    $data = [];
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    return $data;
}