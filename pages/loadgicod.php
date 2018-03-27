<!-- <?php
    include '../proses/koneksi.php';
    $qrload = mysqli_query($conn, "select * from cod_gi");
?> -->
<label class="form-label" for="isinamagi">Pilih Gardu Induk</label>                                        
<div class="controls">
    <select name="namagi" id="namagi" class="form-control" onchange="gicodtrafo();">
        <?php
            while($row=mysqli_fetch_array($qrload))
            {
        ?>
                <option name="namgi" id="namgi" value="<?php echo $row['CODGI_ID'];?>"><?php echo $row['CODGI_NAMA'];?></option>
        <?php
            }
        ?>
    </select>
</div>
