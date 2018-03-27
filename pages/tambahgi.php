<?php
include 'proses/koneksi.php';
$qrmstr= mysqli_query($conn, "select ID_MS,NAMA from MASTER_STATUS") ;
// or die(mysqli_error($conn))
?>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">Tambah Data Gardu Induk</h2>
                            
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="message"></div>
                                <form id='form' method='post'>

                                    <div class="form-group">
                                        <label class="form-label" for="inputnama">Nama Gardu Induk</label>                                        
                                        <div class="controls">
                                            <input type="text" class="form-control" id="inputnama" name="inputnama">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="telepon">Telphone</label>                                       
                                        <div class="controls">
                                            <input type="text" class="form-control" id="telepon" name="telepon">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="status">Status</label>
                                        <div class="controls">
                                        <select name="status" id="status">
                                                <option></option>
                                                <?php 
                                                    $i=1;
                                                    while ($row=mysqli_fetch_array($qrmstr))
                                                    {
                                                        ?>
                                                        <option value="<?php echo $row['ID_MS'];?>"><?php echo $row['NAMA'];?></option>
                                                        <?php
                                                        $i++;
                                                    }
                                                ?> 
                                        </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="form-control" cols="5" id="alamat" name="alamat"></textarea>
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
                                        <label class="form-label" for="area">Area</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="area"name="area">
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
            <h2 class="title pull-left"><i class="fa fa-plus-circle icon-sm"></i> Upload Data Gardu Induk </h2>
            <div class="actions panel_actions pull-right">
                <i class="box_toggle fa fa-chevron-down"></i>
            </div>
        </header>
        <div class="content-body">    <div class="row">
        <div id="message"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <form action="proses/uploadgi.php" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
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
        $('#telepon').val() == '' ||
        $('#status').val() == '' ||
        $('#alamat').val() == '' ||
        $('#wilayah').val() == '' ||
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
                url:"proses/tambahgi.php",
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