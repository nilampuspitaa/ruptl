<?php
include 'koneksi.php';
$id=$_POST['inputid'];
$nama=$_POST['inputnama'];
$nomertower=$_POST['notr'];
$type=$_POST['type'];
$tegangan=$_POST['tegangan'];
$region=$_POST['region'];
$status=$_POST['status'];
$provinsi=$_POST['provinsi'];
$kokab=$_POST['kokab'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$koorx=$_POST['koorx'];
$koory=$_POST['koory'];
$unit=$_POST['unit'];
$tragi=$_POST['tragi'];

if ($queryinsert=mysqli_query($conn, "update TRANSMISI150 set TR_NAMA_BAY='$nama', TR_NO_TOWER='$nomertower', TR_TYPE_TOWER='$type',TR_TEGANGAN ='$tegangan', TR_REGION='$region', TR_STATUS_MILIK='$status', TR_PROVINSI='$provinsi', TR_KOTA_KAB='$kokab', TR_KECAMATAN='$kecamatan', TR_KELURAHAN ='$kelurahan', TR_KOORX='$koorx', TR_KOORY='$koory', TR_UNIT='$unit', TR_TRAGI='$tragi' where TR_ID='$id'"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Diupdate')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=transmisi150'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Diupdate')</script>";
}
?>