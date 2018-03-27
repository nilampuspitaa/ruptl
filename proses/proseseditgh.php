<?php
include 'koneksi.php';
$id=$_POST['inputid'];
$kd=$_POST['kodeaset'];
$nama=$_POST['inputnama'];
$alamat=$_POST['alamat'];
$operator=$_POST['operator'];
$status=$_POST['statusrc'];
$koorx=$_POST['koordinatx'];
$koory=$_POST['koordinaty'];
$area=$_POST['area'];

if ($queryinsert=mysqli_query($conn, "update GARDU_HUBUNG set GH_KODE_ASET='$kd', GH_NAMA='$nama', GH_ALAMAT='$alamat', GH_STATUS_RC ='$status', GH_KOORX='$koorx', GH_KOORY='$koory', GH_AREA='$area' where GH_ID='$id'"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Diupdate')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_hubung'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Diupdate')</script>";
}
?>