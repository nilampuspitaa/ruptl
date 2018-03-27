<?php
 include 'proses/koneksi.php';
 $id=$_GET['c'];
 $qrcodgi = mysqli_query($conn, "select * from COD_GI where CODGI_ID='$id'");
 $row = mysqli_fetch_array($qrcodgi); 
 $qrnmpro= mysqli_query($conn, " select PROGRESS.NAMA_PROGRESS FROM PROGRESS INNER JOIN workflow ON PROGRESS.PROGRESS_ID=WORKFLOW.PROGRESS_ID INNER JOIN cod_gi on WORKFLOW.CODGI_ID=COD_GI.CODGI_ID WHERE cod_gi.CODGI_ID='$id'");

?>
<div class="col-lg-12" style='padding:0px;margin:0px;'>
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DETAIL DATA COD GARDU INDUK</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">


                <table id="" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                    <thead>
                        <tr> 
                            <th style='width:200px;'>Nama COD Gardu Induk</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_NAMA'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tegangan</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_TEGANGAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Keterangan Status</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_KETSTATUS'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tahun</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_TAHUN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Wilayah</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_WILAYAH'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>KOORDINAT X</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_KOORX'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>KOORDINAT Y</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_KOORY'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Lokasi</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_LOKASI'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tujuan</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_TUJUAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Sumber Dana</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['CODGI_SUMBERDANA'];?> </th>
                        </tr>
                        

                    </thead>
                    <tfoot>
                        <tr>
                             <button type='submit' class='btn btn-primary pull-right' id='kembali' name='kembali' onclick='kembali();'>KEMBALI</button>    
                             <br/><br/>      
                        </tr>
                    </tfoot>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">
                </br>
                <p> <b>Nama Progres Yang Sudah Dilalui :</p>
            </div>

            <div class="col-md-5 col-sm-12 col-xs-12" style="padding:0px; margin:0px;">
                </br>
                <table> 
                    <?php
                        while ($rowpro = mysqli_fetch_array($qrnmpro))
                        {
                    ?>
                        <tr> 
                            <td style='width:200px;'>
                            <b>- <?php echo $rowpro['NAMA_PROGRESS'];?></td>
                        </tr>
                    <?php
                        }
                    ?> 
                </table>
            </div>

        </div>
    </div>
</section></div>
                </div>
<script type="text/javascript">
 
  function kembali()
        {
            window.location.href="index.php?p=cod_gi";
        }

</script>