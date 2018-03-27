<?php
include 'proses/koneksi.php';
// $id=$_GET['c'];
// $qrexttrafo = mysqli_query($conn, "select GI_NAMA from GARDU_INDUK WHERE GI_ID='$id'") ;
// $row = mysqli_fetch_array($qrexttrafo); 
// or die(mysqli_error($conn))
?>

<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">TAMBAH DATA PROYEK EXTENTION TRAFO</h2>
                            
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="message"></div>
                                <form id='form' method='post'>

                                    <div class="form-group">
                                        <label class="form-label" for="kategori">Kategori Gardu Induk</label>
                                        <div class="controls">
                                        <select name="katgi" id="katgi" class="form-control" onchange="bukanamagi();">
                                            <option></option>
                                            <option value="1">GI Eksisting</option>
                                            <option value="2">GI COD</option>
                                            <option value="3">Baru</option>                                                                                      
                                        </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group" id="isinamagi" name="isinamagi">
                                    
                                    </div>

                                    <div class="form-group" id="isinamatr">
                                    
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="kapasitas">Kapasitas</label>                                       
                                        <div class="controls">
                                            <input type="text" class="form-control" id="kapasitas" name="kapasitas">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="form-label" for="tahun">Tahun</label>
                                        <div class="controls">
                                            <input class="form-control" cols="5" id="tahun" name="tahun">
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
                                    <button type='button' class='btn btn-primary pull-right' id='setsimpan' name='setsimpan' onclick='simpan();'>SIMPAN</button>
                                    
                                    </div>
                                </div>
                                </form>
                            </div>


                        </div>
                    </section>
                </div>



   <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
   <script type="text/javascript">
    function gicodtrafo()
    {
        $.ajax({
                url:"pages/loadnew.php",
                method:"post",
                dataType:"text",
                success: function(strMessage){
                    $('#isinamatr').html(strMessage)

                }
            })
    }
    function bukatrafo()
    {
        var gi = $('#namagi').val();
        $.ajax({
                url:"pages/loadnamatrafo.php",
                method:"post",
                data: "kode=" + gi,
                dataType:"text",
                success: function(strMessage){
                    $('#isinamatr').html(strMessage)

                }
            })
    }
    function bukanamagi()
    {
        $('#isinamagi').empty();
        $('#isinamatr').empty();
        var ktg = $('#katgi').val();
        if(ktg=='1')
        {
            $.ajax({
                url:"pages/loadgiaset.php",
                method:"post",
                dataType:"text",
                success: function(strMessage){
                    $('#isinamagi').html(strMessage)

                }
            })
        }
        else if(ktg=='2')
        {
            $.ajax({
                url:"pages/loadgicod.php",
                method:"post",
                dataType:"text",
                success: function(strMessage){
                    $('#isinamagi').html(strMessage)

                }
            })
        }
        else if(ktg=='3')
        {
            $.ajax({
                url:"pages/loadnew2.php",
                method:"post",
                dataType:"text",
                success: function(strMessage){
                    $('#isinamagi').html(strMessage)
                    $.ajax({
                        url:"pages/loadnew.php",
                        method:"post",
                        dataType:"text",
                        success: function(strMessage){
                            $('#isinamatr').html(strMessage)

                        }
                    })
                }
            })
        }
    }

    function simpan()
    {
        if($('#kategori').val() == '' ||
        $('#namagi').val() == '' ||
        $('#kapasitas').val() == '' ||
        $('#tahun').val() == '' ||
        $('#tujuan').val() == ''||
        $('#dana').val() == '')

        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();

            $.ajax({
                url:"proses/prosestambahexttrafo.php",
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