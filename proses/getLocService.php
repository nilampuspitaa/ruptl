<?php
$access = $_POST['access'];
if($access == "ambilXYGarduInduk"){
    ambilXYGarduInduk($_POST["id"]); 
}
elseif($access == "ambilXYGarduhubung"){
    ambilXYGarduhubung($_POST["id"]); 
}
elseif($access == "ambilXYTransmisi"){
    ambilXYTransmisi($_POST["id"]); 
}

function ambilXYGarduInduk($id){
    include 'koneksi.php';
    $qrGI = mysqli_query($conn, "select GARDU_INDUK.GI_KOORX as GI_KOORX, GARDU_INDUK.GI_KOORY as GI_KOORY,GARDU_INDUK.GI_NAMA as GI_NAMA FROM GARDU_INDUK INNER JOIN MASTER_STATUS ON GARDU_INDUK.ID_MS=MASTER_STATUS.ID_MS LEFT JOIN GI_IB ON GARDU_INDUK.GI_ID=GI_IB.GI_ID WHERE GARDU_INDUK.GI_ID=$id");
    $row = mysqli_fetch_array($qrGI); 
    echo json_encode(array("status"=>"Success","xVal"=>$row['GI_KOORX'],"yVal"=>$row['GI_KOORY'],"namaVal"=>$row['GI_NAMA']));
}

function ambilXYGarduhubung($id){
    include 'koneksi.php';
    $qrGH = mysqli_query($conn, "select GH_ID, GH_KODE_ASET, GH_NAMA, GH_ALAMAT, GH_OPERATOR, GH_STATUS_RC, GH_KOORX, GH_KOORY, GH_AREA from GARDU_HUBUNG where GH_ID='$id'");
    $row = mysqli_fetch_array($qrGH); 
    echo json_encode(array("status"=>"Success","xVal"=>$row['GH_KOORX'],"yVal"=>$row['GH_KOORY'],"namaVal"=>$row['GH_NAMA']));
}

function ambilXYTransmisi($id){
    include 'koneksi.php';
    $qrTM = mysqli_query($conn, "select * from TRANSMISI150 where TR_ID='$tm'");
    $row = mysqli_fetch_array($qrTM); 
    echo json_encode(array("status"=>"Success","xVal"=>$row['TR_KOORX'],"yVal"=>$row['TR_KOORY'],"namaVal"=>$row['TR_NAMA_BAY']));
}


?>