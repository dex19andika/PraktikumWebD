<?php
include_once("koneksi.php");

$nim = $_GET['nim'];
$result = mysqli_query($mysqli, "DELETE FROM tb_biodata WHERE nim=$nim");

header("Location:index.php");
?>