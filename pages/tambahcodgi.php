<?php
include 'proses/koneksi.php';
// or die(mysqli_error($conn))
?>

<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">TAMBAH DATA PROYEK COD GARDU INDUK</h2>
                            
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="message"></div>
                                <form id='form' method='post'>

                                    <div class="form-group">
                                        <label class="form-label" for="inputnama">Nama COD Gardu Induk</label>                                        
                                        <div class="controls">
                                            <input type="text" class="form-control" id="inputnama" name="inputnama">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="tegangan">Tegangan</label>                                       
                                        <div class="controls">
                                            <input type="text" class="form-control" id="tegangan" name="tegangan">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="ketstatus">Keterangan Status</label>
                                        <div class="controls">
                                        <select name="status" class="form-control">
                                            <option value="AKTIF">AKTIF</option>
                                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                            <option value="DIHAPUS">DIHAPUS</option>                                        
                                        </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="kapasitas">Kapasitas</label>
                                        <div class="controls">
                                            <input class="form-control" cols="5" id="kapasitas" name="kapasitas">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="tahun">Tahun</label>
                                        <div class="controls">
                                            <input class="form-control" cols="5" id="tahun" name="tahun">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="wilayah">Wilayah</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="wilayah"name="wilayah">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koordinatX">KOORDINAT X</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koordinatx"name="koordinatx">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koordinaty">KOORDINAT Y</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koordinaty"name="koordinaty">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="deskripsi">Deskripsi</label>
                                        <div class="controls">
                                            <textarea type="text" class="form-control" id="deskripsi"name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="lokasi">Lokasi</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="lokasi"name="lokasi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="tujuan">Tujuan</label>
                                        <div class="controls">
                                            <textarea type="text" class="form-control" id="tujuan"name="tujuan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="dana">Sumber Dana</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="dana"name="dana">
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
        if($('#inputnama').val() == '' ||
        $('#tegangan').val() == '' ||
        $('#status').val() == '' ||
        $('#kapasitas').val() == '' ||
        $('#tahun').val() == '' ||
        $('#wilayah').val() == '' ||
        $('#koordinatx').val() == '' ||
        $('#koordinaty').val() == '' ||
        $('#deskripsi').val() == ''||
        $('#lokasi').val() == ''||
        $('#tujuan').val() == ''||
        $('#dana').val() == '')

        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();

            $.ajax({
                url:"proses/prosestambahcodgi.php",
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