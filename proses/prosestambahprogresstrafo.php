<?php
include "koneksi.php";
    // print_r ($_POST);
$namaprogress=$_POST['namaprogress'];
$inputuser=$_POST['inputuser'];
$inputtgl=$_POST['inputtgl'];
$nama=$_POST['nama'];



if ($queryinsert=mysqli_query($conn, "insert into WORKFLOW_TRAFO (WT_PROGRESS, CREATED_ON, CREATED_BY, TRAFO_ID) values ('$namaprogress','$inputtgl','$inputuser','$nama')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=ext_trafo'</script>";
}
else
{
    die(mysqli_error($conn));
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>
