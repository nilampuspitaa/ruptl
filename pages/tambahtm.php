
<?php


?>

<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">Tambah Data Transmisi 150 KV</h2>
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
                                            <input type="text" class="form-control" id="inputnama" name="inputnama">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="notr">Nomer Tower</label>
                                      <div class="controls">
                                            <input type="text" class="form-control" id="notr" name="notr">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="type">Type Tower</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="type"name="type">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tegangan">Tegangan Operasi</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="tegangan"name="tegangan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="region">Region</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="region"name="region">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="status">Status Milik</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="status"name="status">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="provinsi">Provinsi</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="provinsi"name="provinsi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="kokab">Kota/Kabupaten</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="kokab"name="kokab">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="kecamatan">Kecamatan</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="kecamatan"name="kecamatan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="kelurahan">Kelurahan</label>
                                        <div class="controls">
                                        <input type="text" class="form-control" id="kelurahan"name="kelurahan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koorx">KOORDINAT X</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koorx"name="koorx">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koory">KOORDINAT Y</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koory"name="koory">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="unit">Unit</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="unit"name="unit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tragi">Tragi</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="tragi"name="tragi">
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

<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12" id="">
    <section class="box info">
        <header class="panel_header">
            <h2 class="title pull-left"><i class="fa fa-plus-circle icon-sm"></i> Upload Data Transmisi 150 KV </h2>
            <div class="actions panel_actions pull-right">
                <i class="box_toggle fa fa-chevron-down"></i>
            </div>
        </header>
        <div class="content-body">    <div class="row">
        <div id="message"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <form action="proses/uploadtm.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
                    Choose your file: <br /> 
                    <input name="csv" type="file" id="csv" /> 
                    <input type="submit" class="btn btn-primary pull-right" name="Submit" value="Submit" /> 
                    </form> 
                </div>
            </div>
        </div>
        <br>
    </section>
</div>

   <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
   <script type="text/javascript">
    function simpan()
    {
        if($('#inputnama').val() == '' ||
        $('#notr').val() == '' ||
        $('#type').val() == '' ||
        $('#tegangan').val() == '' ||
        $('#region').val() == '' ||
        $('#status').val() == '' ||
        $('#provinsi').val() == '' ||
        $('#kokab').val() == '' ||
        $('#kecamatan').val() == '' ||
        $('#kelurahan').val() == '' ||
        $('#koorX').val() == '' ||
        $('#koory').val() == '' ||
        $('#unit').val() == '' ||
        $('#tragi').val() == '')
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();

            $.ajax({                                        // GO PROSES TAMBAH TM
                url:"proses/tambahtm.php",
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