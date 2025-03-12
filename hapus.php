<?php
include 'koneksi.php';
$_GET['id'];
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM daily_schedule WHERE id='$id'");


if ($result) {
    header("Location: index.php");
}