<?php
include "koneksi.php";
    // print_r ($_POST);
$namaprogress=$_POST['namaprogress'];
$inputuser=$_POST['inputuser'];
$inputtgl=$_POST['inputtgl'];
$nama=$_POST['nama'];



if ($queryinsert=mysqli_query($conn, "insert into WORKFLOW (PROGRESS_ID, CREATED_ON, CREATED_BY, CODGI_ID) values ('$namaprogress','$inputtgl','$inputuser','$nama')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=cod_gi'</script>";
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>
