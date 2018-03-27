<!-- <?php
    include '../proses/koneksi.php';
    // print_r ($_POST);
    $exttrafo=$_POST['trafo'];
    $qrprogres= mysqli_query($conn, "select MAX(WT_PROGRESS) as progress, TRAFO_ID FROM WORKFLOW_TRAFO WHERE TRAFO_ID='$exttrafo'");
    $rows = mysqli_fetch_array ($qrprogres);
    if(!empty($rows['progress']))
    {
        $start = $rows['progress'];
        $qrbasis = mysqli_query($conn, "select * FROM BASIS_PROGRESSTR inner join PROGRESS_TRAFO on PROGRESS_TRAFO.WT_PROGRESS = BASIS_PROGRESSTR.BASIS_START WHERE BASIS_START='$start'");
        $row = mysqli_fetch_array($qrbasis);
        $progress = $row['BASIS_END'];
        $qrbasis2 = mysqli_query($conn, "select WT_PROGRESS, NAMA_PROGRESS FROM PROGRESS_TRAFO WHERE WT_PROGRESS='$progress'");
        $row2 = mysqli_fetch_array($qrbasis2);
        $nama=$row2['NAMA_PROGRESS'];
        
    }
    else
    {
        $qrbasis = mysqli_query($conn, "select WT_PROGRESS, NAMA_PROGRESS FROM PROGRESS_TRAFO WHERE WT_PROGRESS='1'");
        $row = mysqli_fetch_array($qrbasis);
        $progress = $row['WT_PROGRESS'];
        $nama=$row['NAMA_PROGRESS'];
    }
?> -->

<label class="form-label" for="progress">Progress</label>                                       
<div class="controls">
    
<select name="namaprogress" id="namaprogress" class="form-control" onchange="loadprogress();">
    <option value="<?php echo $progress;?>"><?php echo $nama;?></option>
</select>   
</div>
