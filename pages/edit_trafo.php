<?php
include '../proses/koneksi.php';

$id = $_POST['kode'];

$qtrafoedit= mysqli_query ($conn, "select * from GI_IB where IB_ID ='$id'");
$row = mysqli_fetch_array($qtrafoedit);
?>

<br>
<section class="box">
    <header class="panel_header">
        <h2 class="title pull-left">Edit Data Trafo</h2>
        
    </header>
    <div class="content-body">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="message"></div>
            <form id='form' method='post'>
                <div class="form-group">
                    <label class="form-label" for="inputnama">Nama Trafo</label>
                    <div class="controls">
                        <input type="hidden" class="form-control" id="inputid2" name="inputid2"  value='<?php echo $id; ?>'>
                        <input type="text" class="form-control" id="inputnama" name="inputnama"  value='<?php echo $row['IB_NAMA']; ?>'>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="Beban">Beban</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="beban" name="beban" value='<?php echo $row['IB_BEBAN']; ?>'>
                    </div>
                </div>
                <div class="form-group">
                     <button type='submit' class='btn btn-danger pull-right' id='batal' name='batal' onclick='batal();'>Batal</button>
                    <button type='button' class='btn btn-success pull-right' id='btnsimpan' name='btnsimpan' onclick='simpanedit();'>SIMPAN</button>
                    
                </div>
            </form>
        </div>


    </div>
</section>

