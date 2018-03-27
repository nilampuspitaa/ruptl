<?php
include 'proses/koneksi.php';

$id=$_GET['c1'];
$nama=$_GET['c2'];
$telepon=$_GET['c3'];
$status=$_GET['c4'];
$alamat=$_GET['c5'];
$wilayah=$_GET['c6'];
$koordinatx=$_GET['c7'];
$koordinaty=$_GET['c8'];
$area=$_GET['c9'];

$qrmstr= mysqli_query($conn, "select ID_MS,NAMA from MASTER_STATUS") ;

?>
<div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">
                    <section class="box info">
                        <header class="panel_header">
                            <h2 class="title pull-left">Edit Data Gardu Induk</h2>
                            
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="message"></div>
                                <form id='form' method='post'>

                                    <div class="form-group">
                                        <label class="form-label" for="inputnama">Nama Gardu Induk</label>
                                        <div class="controls">
                                            <input type="hidden" class="form-control" id="inputid" name="inputid" value='<?php echo $id; ?>'>
                                            <input type="text" class="form-control" id="inputnama" name="inputnama" value='<?php echo $nama; ?>'>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="telepon">Telphone</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="telepon" name="telepon" value='<?php echo $telepon; ?>'>
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
                                                        <option value="<?php echo $row['ID_MS'];?>" <?php if ($row['NAMA']==$status) echo 'selected="selected"' ?>><?php echo $row['NAMA'];?></option>
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
                                            <input class="form-control" type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="wilayah">Wilayah</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="wilayah"name="wilayah" value='<?php echo $wilayah; ?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koordinatX">KOORDINAT X</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koordinatx"name="koordinatx" value='<?php echo $koordinatx; ?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="koordinaty">KOORDINAT Y</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="koordinaty"name="koordinaty" value='<?php echo $koordinaty; ?>'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="area">Area</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="area"name="area" value='<?php echo $area; ?>'>
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
        if($('#inputid').val() == '' ||
        $('#inputnama').val() == '' ||
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
                url:"proses/proseseditgi.php",
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