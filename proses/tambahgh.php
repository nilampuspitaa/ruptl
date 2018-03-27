<?php
include 'koneksi.php';

$kodeaset=$_POST['kodeaset'];
$inputnama=$_POST['inputnama'];
$alamat=$_POST['alamat'];
$operator=$_POST['operator'];
$statusrc=$_POST['statusrc'];
$koordinatx=$_POST['koordinatx'];
$koordinaty=$_POST['koordinaty'];
$area=$_POST['area'];

if ($queryinsert=mysqli_query($conn, "insert into GARDU_HUBUNG (GH_KODE_ASET, GH_NAMA, GH_ALAMAT, GH_OPERATOR, GH_STATUS_RC, GH_KOORX, GH_KOORY, GH_AREA) values('$kodeaset','$inputnama','$alamat','$operator','$statusrc','$koordinatx','$koordinaty','$area')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_hubung'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>