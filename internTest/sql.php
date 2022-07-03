<?php 

$conn = mysqli_connect("localhost", "root", "", "ngablu");

//sql soal
// nomor 6  $sql = mysqli_query($conn, "SELECT * FROM lowongan_kerja WHERE jobs_title LIKE 'f%'");
// nomor 7  $sql = mysqli_query($conn, "SELECT * FROM lowongan_kerja WHERE jobs_title LIKE '%n'");
// nomor 8  $sql = mysqli_query($conn, "SELECT * FROM lowongan_kerja WHERE jobs_title LIKE '%p%'");
$result = mysqli_fetch_assoc($sql);
var_dump($result);




?>