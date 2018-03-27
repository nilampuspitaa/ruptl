<?php
include 'koneksi.php';
print_r($_POST);
$id=$_POST['id'];
$nama=$_POST['nama'];
$beban=$_POST['beban'];


if($queryinsert=mysqli_query($conn, "update GI_IB set IB_NAMA='$nama', IB_BEBAN ='$beban' where IB_ID='$id'"))
//   or die(mysqli_error($conn))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Diupdate')</script>";
   
    // echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_induk'</script>";
    
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Diupdate')</script>";
}
?>