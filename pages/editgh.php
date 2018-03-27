<?php
include 'proses/koneksi.php';

$id=$_GET['c1'];
$kd=$_GET['c2'];
$nama=$_GET['c3'];
$alamat=$_GET['c4'];
$operator=$_GET['c5'];
$status=$_GET['c6'];
$koorx=$_GET['c7'];
$koory=$_GET['c8'];
$area=$_GET['c9'];

?>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
<section class="box info">
    <header class="panel_header">
        <h2 class="title pull-left">Edit Data Gardu Hubung</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="message"></div>
            <form id='form' method='post'>
                <div class="form-group">
                    <label class="form-label" for="kodeaset">Kode Aset Gardu Hubung </label>
                    <div class="controls">
                        <input type="hidden" class="form-control" id="inputid" name="inputid" value='<?php echo $id; ?>'>
                        <input type="text" class="form-control" id="kodeaset" name="kodeaset" value='<?php echo $kd; ?>'>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="inputnama">Nama Gardu Hubung</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="inputnama" name="inputnama" value='<?php echo $nama; ?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="alamat">Alamat</label>
                    <div class="controls">
                    <input type="text" class="form-control" cols="5" id="alamat" name="alamat" value='<?php echo $alamat; ?>'></input>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="operator">Operator</label>
                    <div class="controls">
                    <input type="text" class="form-control" id="operator"name="operator" value='<?php echo $operator; ?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="statusrc">Status RC</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="statusrc"name="statusrc" value='<?php echo $status;?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="koordinatX">KOORDINAT X</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="koordinatx"name="koordinatx" value='<?php echo $koorx;?>' >
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="koordinaty">KOORDINAT Y</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="koordinaty"name="koordinaty" value='<?php echo $koory;?>'>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="area">Area</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="area"name="area" value='<?php echo $area;?>'>
                    </div>
                </div>
                <div class="form-group">
                <button type='submit' class='btn btn-orange pull-right' id='setreset' name='setreset'>RESET</button>
                <button type='submit' class='btn btn-primary pull-right' id='setsimpan' name='setsimpan' onclick='simpan();'>SIMPAN</button>
                
                </div>
            </div>
            </form>
        </div>


    </div>
</section>
</div>

<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
 function simpan()
 {
     if ($('#inputid').val() == '' ||
     $('#kodeaset').val() == '' ||
     $('#inputnama').val() == '' ||
     $('#alamat').val() == '' ||
     $('#operator').val() == '' ||
     $('#statusrc').val() == '' ||
     $('#koordinatx').val() == '' ||
     $('#koordinaty').val() == '' ||
     $('#area').val() == '')
     {
         showErrorMessage('Data Masih Kosong');
     }
     else
     {
         event.preventDefault();

         $.ajax({
             url:"proses/proseseditgh.php",
             method:"post",
             data:$('form').serialize(),
             dataType:"text",
             success: function(strMessage){
                 $('#message').html(strMessage)

             }
         })
     }
 }

 </script>   