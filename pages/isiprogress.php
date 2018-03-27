<!-- <?php
    include '../proses/koneksi.php';
    print_r ($_POST);
    $codgi=$_POST['codgi'];
    $qrprogress= mysqli_query($conn, "select MAX(PROGRESS_ID) as progress, CODGI_ID FROM WORKFLOW WHERE CODGI_ID='$codgi'");
    $rows = mysqli_fetch_array ($qrprogress);
    if(!empty($rows['progress']))
    {
        $start = $rows['progress'];
        $qrbasis = mysqli_query($conn, "select * FROM BASIS_PROGRESS inner join PROGRESS on PROGRESS.PROGRESS_ID = BASIS_PROGRESS.START WHERE START='$start'");
        $row = mysqli_fetch_array($qrbasis);
        $progress = $row['END'];
        $qrbasis2 = mysqli_query($conn, "select PROGRESS_ID, NAMA_PROGRESS FROM PROGRESS WHERE PROGRESS_ID='$progress'");
        $row2 = mysqli_fetch_array($qrbasis2);
        $nama=$row2['NAMA_PROGRESS'];
        
    }
    else
    {
        $qrbasis = mysqli_query($conn, "select PROGRESS_ID, NAMA_PROGRESS FROM PROGRESS WHERE PROGRESS_ID='1'");
        $row = mysqli_fetch_array($qrbasis);
        $progress = $row['PROGRESS_ID'];
        $nama=$row['NAMA_PROGRESS'];
    }
?> -->

<label class="form-label" for="progress">Progress</label>                                       
<div class="controls">
    
<select name="namaprogress" id="namaprogress" class="form-control" onchange="loadprogress();">
    <option value="<?php echo $progress;?>"><?php echo $nama;?></option>
</select>   
</div>
