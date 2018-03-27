<?php
    include 'koneksi.php';
    // print_r($_POST);
    $nama = $_POST['namagi'];
    $kategori = $_POST['katgi'];
    $namatrafo = $_POST['namatrafo'];
    if($kategori=='1')
    {
        $qrnama = mysqli_query($conn, "select * from gardu_induk where GI_ID = '$nama'");
        $countnama = mysqli_num_rows($qrnama);
        if($countnama > 0)
        {
            $rownama = mysqli_fetch_array($qrnama);
            $namagi = $rownama['GI_NAMA'];
        }
        $qrtrafo = mysqli_query($conn, "select * from GI_IB where IB_ID='$namatrafo'");
        $counttr = mysqli_num_rows($qrtrafo);
        if($counttr > 0)
        {
            $rowtr = mysqli_fetch_array($qrtrafo);
            $trafoke = $rowtr['IB_ID'];
        }
    }
    else if($kategori=='2')
    {
        $qrnama = mysqli_query($conn, "select * from COD_GI where CODGI_ID = '$nama'");
        $countnama = mysqli_num_rows($qrnama);
        if($countnama > 0)
        {
            $rownama = mysqli_fetch_array($qrnama);
            $namagi = $rownama['CODGI_NAMA'];
        }
        $trafoke = $namatrafo;
    }
    else if($kategori=='3')
    {
        $namagi = $nama;
        $trafoke = $namatrafo;
    }

    // echo $namatr;
 
    $kapasitas=$_POST['kapasitas'];
    $tahun=$_POST['tahun'];
    $tujuan=$_POST['tujuan'];
    $dana=$_POST['dana'];
    $trafo=$_POST['namatrafo'];


if ($queryinsert=mysqli_query($conn, "insert into EXT_TRAFO (TRAFO_NAMAPROJECT, TRAFO_KAPASITAS, TRAFO_TAHUNCOD, TRAFO_TUJUAN, TRAFO_DANA, TRAFO_KE ) values ('$namagi','$kapasitas','$tahun','$tujuan','$dana','$trafoke')"))
{
    echo "<script type='text/javascript'>showSuccess('Data Berhasil Disimpan')</script>";
    echo "<script type='text/javascript'>window.location.href='index.php?p=ext_trafo'</script>";
}
else
{
    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Disimpan')</script>";
}
?>
