<?php

include 'proses/koneksi.php';
$qrprogresstrafo= mysqli_query($conn, "select TRAFO_ID, TRAFO_NAMAPROJECT from EXT_TRAFO ");
date_default_timezone_set('Asia/Jakarta');
$tgl=date("Y-m-d");


?>

<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">TAMBAH PROGESS EXTENTION TRAFO</h2>
                            
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="message"></div>
                                <form id='form' method='post'>

                                    <div class="form-group">
                                        <label class="form-label" for="nama">Nama Ektention Trafo</label>
                                        <div class="controls">
                                        <input type="hidden" class="form-control" id="inputuser" name="inputuser" value='<?php echo $user; ?>'>    
                                        <input type="hidden" class="form-control" id="inputtgl" name="inputtgl" value='<?php echo $tgl; ?>'>
                                        <select name="nama" id="nama" class="form-control" onchange="loadprogress();">
                                                <option></option>
                                                <?php 
                                                    $i=1;
                                                    while ($row=mysqli_fetch_array($qrprogresstrafo))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['TRAFO_ID'];?>"><?php echo $row['TRAFO_NAMAPROJECT'];?></option>
                                                        <?php
                                                        $i++;
                                                    }
                                                ?> 
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="isi_progress">
                                        
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
        if($('#inputuser').val() == '' ||
        $('#inputtgl').val() == '' ||
        $('#namaprogress').val() == '' ||
        $('#nama').val() == '' )
 
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();

            $.ajax({
                url:"proses/prosestambahprogresstrafo.php",
                method:"post",
                data:$('form').serialize(),
                dataType:"text",
                success: function(strMessage){
                    $('#message').html(strMessage)

                }
            })
        }
    }

    function loadprogress()
    {
        var vcod = $('#nama').val();
        console.log(vcod);
        $.ajax({
                url:"pages/isiprogresstrafo.php",
                method:"post",
                data: "trafo=" + vcod,
                dataType:"text",
                success: function(strMessage){
                    $('#isi_progress').html(strMessage)

                }
            })
    }

    </script>                 