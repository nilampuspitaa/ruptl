<?php
include 'koneksi.php';

$nama=$_POST['inputnama'];
$telepon=$_POST['telepon'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];
$wilayah=$_POST['wilayah'];
$koordinatx=$_POST['koordinatx'];
$koordinaty=$_POST['koordinaty'];
$area=$_POST['area'];


if  ($queryinsert=mysqli_query($conn, "insert into GARDU_INDUK ( GI_NAMA, GI_TLP, ID_MS, GI_ALAMAT, GI_WILAYAH, GI_KOORX, GI_KOORY, GI_AREA) values('$nama','$telepon','$status','$alamat','$wilayah','$koordinatx','$koordinaty','$area')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";

    if ($ambildata=mysqli_query($conn, "select GI_ID, GI_NAMA, GI_WILAYAH from GARDU_INDUK where GI_NAMA='$nama' AND GI_WILAYAH='$wilayah'"))
    {
        $row=mysqli_fetch_array($ambildata);
        $id=$row['GI_ID'];

        echo "<script type='text/javascript'>window.location.href='index.php?p=detail_gi&c=".$id."'</script>";
    }
   
   
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>

<!-- <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">

      
        function redirect(id)
        {
            window.location.href="index.php?p=detail_gi&c="+id+"";
        }


    </script> -->