<?php
include 'koneksi.php';

$id=$_POST['inputid'];
$nama=$_POST['inputnama'];
$telepon=$_POST['telepon'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];
$wilayah=$_POST['wilayah'];
$koordinatx=$_POST['koordinatx'];
$koordinaty=$_POST['koordinaty'];
$area=$_POST['area'];


if($queryinsert=mysqli_query($conn, "update GARDU_INDUK set GI_NAMA='$nama', GI_TLP='$telepon', ID_MS='$status', GI_ALAMAT='$alamat', GI_WILAYAH='$wilayah', GI_KOORX ='$koordinatx', GI_KOORY='$koordinaty', GI_AREA='$area' where GI_ID='$id'"))
//   or die(mysqli_error($conn))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Diupdate')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_induk'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Diupdate')</script>";
}
?>