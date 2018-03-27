<?php
include 'koneksi.php';
// print_r ($_POST);
$namabay=$_POST['inputnama'];
$notower=$_POST['notr'];
$typetower=$_POST['type'];
$teganganoperasi=$_POST['tegangan'];
$region=$_POST['region'];
$statusmilik=$_POST['status'];
$provinsi=$_POST['provinsi'];
$kotakab=$_POST['kokab'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$koorx=$_POST['koorx'];
$koory=$_POST['koory'];
$unit=$_POST['unit'];
$tragi=$_POST['tragi'];

if ($queryinsert=mysqli_query($conn, "insert into TRANSMISI150 (TR_NAMA_BAY, TR_NO_TOWER, TR_TYPE_TOWER, TR_TEGANGAN, TR_REGION, TR_STATUS_MILIK, TR_PROVINSI, TR_KOTA_KAB, TR_KECAMATAN, TR_KELURAHAN, TR_KOORX, TR_KOORY, TR_UNIT, TR_TRAGI) values('$namabay','$notower','$typetower','$teganganoperasi','$region','$statusmilik','$provinsi','$kotakab','$kecamatan','$kelurahan','$koorx','$koory','$unit','$tragi')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=transmisi150'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>