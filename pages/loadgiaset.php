<!-- <?php
    include '../proses/koneksi.php';
    $qrload = mysqli_query($conn, "select * from gardu_induk");
?> -->
<label class="form-label" for="isinamagi">Pilih Gardu Induk</label>                                        
<div class="controls">
    <select name="namagi" id="namagi" class="form-control" onchange="bukatrafo();">
        <option></option>
        <?php
            while($row=mysqli_fetch_array($qrload))
            {
        ?>
                <option name="namgi" id="namgi" value="<?php echo $row['GI_ID'];?>"><?php echo $row['GI_NAMA'];?></option>
        <?php
            }
        ?>
    </select>
</div>
