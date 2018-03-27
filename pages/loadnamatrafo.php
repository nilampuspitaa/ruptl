<!-- <?php
    include '../proses/koneksi.php';
    if(!empty($_POST['kode']))
    {
        $id = $_POST['kode'];
        $qrload = mysqli_query($conn, "select * from gi_ib where GI_ID = '$id'");
    }
?> -->
<label class="form-label" for="isinamagi">Pilih Trafo</label>                                        
<div class="controls">
    <select name="namatrafo" id="namatrafo" class="form-control">
        <option></option>
        <?php
            while($row=mysqli_fetch_array($qrload))
            {
        ?>
                <option name="namtr" id="namtr" value="<?php echo $row['IB_ID'];?>"><?php echo $row['IB_NAMA'];?></option>
        <?php
            }
        ?>
    </select>
</div>
