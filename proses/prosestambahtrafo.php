<?php
include "koneksi.php";
    // print_r ($_POST);
$id=$_POST['id'];
$nama=$_POST['nama'];
$beban=$_POST['beban'];

if ($queryinsert=mysqli_query($conn, "insert into GI_IB (GI_ID, IB_NAMA, IB_BEBAN ) values('$id','$nama','$beban')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    // echo "<script type='text/javascript'>redirect($id)</script>";
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>
