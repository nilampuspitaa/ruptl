<?php
include "koneksi.php";
    // print_r ($_POST);

$nama=$_POST['inputnama'];
$tegangan=$_POST['tegangan'];
$status=$_POST['status'];
$kapasitas=$_POST['kapasitas'];
$tahun=$_POST['tahun'];
$wilayah=$_POST['wilayah'];
$koordinatx=$_POST['koordinatx'];
$koordinaty=$_POST['koordinaty'];
$deskripsi=$_POST['deskripsi'];
$lokasi=$_POST['lokasi'];
$tujuan=$_POST['tujuan'];
$dana=$_POST['dana'];


if ($queryinsert=mysqli_query($conn, "insert into COD_GI (CODGI_NAMA, CODGI_TEGANGAN, CODGI_KETSTATUS, CODGI_KAPASITAS, CODGI_TAHUN, CODGI_WILAYAH, CODGI_KOORX, CODGI_KOORY, CODGI_DESKRIPSI, CODGI_LOKASI, CODGI_TUJUAN, CODGI_SUMBERDANA ) values ('$nama','$tegangan','$status','$kapasitas','$tahun','$wilayah','$koordinatx','$koordinaty','$deskripsi','$lokasi','$tujuan','$dana')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=cod_gi'</script>";
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>
