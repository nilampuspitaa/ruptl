<?php
include 'proses/koneksi.php';

$id=$_GET['c1'];
$nama=$_GET['c2'];
$nomertower=$_GET['c3'];
$type=$_GET['c4'];
$tegangan=$_GET['c5'];
$region=$_GET['c6'];
$status=$_GET['c7'];
$provinsi=$_GET['c8'];
$kokab=$_GET['c9'];
$kecamatan=$_GET['c10'];
$kelurahan=$_GET['c11'];
$koorx=$_GET['c12'];
$koory=$_GET['c13'];
$unit=$_GET['c14'];
$tragi=$_GET['c15'];

?>
        <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
        <section class="box info">
            <header class="panel_header">
                <h2 class="title pull-left">Edit Data Transmisi 150 KV</h2>
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
                            <label class="form-label" for="inputnama">Nama Bay</label>
                            <div class="controls">
                                <input type="hidden" class="form-control" id="inputid" name="inputid" value='<?php echo $id; ?>'>
                                <input type="text" class="form-control" id="inputnama" name="inputnama" value='<?php echo $nama; ?>'>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="notr">Nomer Tower</label>
                        <div class="controls">
                                <input type="text" class="form-control" id="notr" name="notr" value='<?php echo $nomertower; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="type">Type Tower</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="type"name="type" value='<?php echo $type; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tegangan">Tegangan Operasi</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="tegangan"name="tegangan" value='<?php echo $tegangan; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="region">Region</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="region"name="region" value='<?php echo $region; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="status">Status Milik</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="status"name="status" value='<?php echo $status; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="provinsi">Provinsi</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="provinsi"name="provinsi" value='<?php echo $provinsi; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kokab">Kota/Kabupaten</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="kokab"name="kokab" value='<?php echo $kokab; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kecamatan">Kecamatan</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="kecamatan"name="kecamatan" value='<?php echo $kecamatan; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kelurahan">Kelurahan</label>
                            <div class="controls">
                            <input type="text" class="form-control" id="kelurahan"name="kelurahan" value='<?php echo $kelurahan; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="koorx">KOORDINAT X</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="koorx"name="koorx" value='<?php echo $koorx; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="koory">KOORDINAT Y</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="koory"name="koory" value='<?php echo $koory; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="unit">Unit</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="unit"name="unit" value='<?php echo $unit; ?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tragi">Tragi</label>
                            <div class="controls">
                                <input type="text" class="form-control" id="tragi"name="tragi" value='<?php echo $tragi; ?>'>
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
     $('#inputnama').val() == '' ||
     $('#notr').val() == '' ||
     $('#type').val() == '' ||
     $('#tegangan').val() == '' ||
     $('#region').val() == '' ||
     $('#status').val() == '' ||
     $('#provinsi').val() == '' ||
     $('#kokab').val() == '' ||
     $('#kecamatan').val() == '' ||
     $('#kelurahan').val() == '' ||
     $('#koorx').val() == '' ||
     $('#koory').val() == '' ||
     $('#unit').val() == '' ||
     $('#tragi').val() == '')
     {
         showErrorMessage('Data Masih Kosong');
     }
     else
     {
         event.preventDefault();

         $.ajax({
             url:"proses/prosesedittm.php",
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