<?php
 include 'proses/koneksi.php';
 $id=$_GET['c'];
 $qrexttrafo = mysqli_query($conn, "select * from EXT_TRAFO where TRAFO_ID='$id'");
 $row = mysqli_fetch_array($qrexttrafo); 
 $qrnmprotr= mysqli_query($conn, " select progress_trafo.NAMA_PROGRESS FROM progress_trafo INNER JOIN workflow_trafo ON progress_trafo.WT_PROGRESS=workflow_trafo.WT_PROGRESS INNER JOIN ext_trafo on workflow_trafo.TRAFO_ID=ext_trafo.TRAFO_ID WHERE ext_trafo.TRAFO_ID='$id'");

?>
<div class="col-lg-12" style='padding:0px;margin:0px;'>
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DETAIL DATA EXTENTION TRAFO</h2>
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
                            <th style='width:200px;'>Nama Extention Trafo</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TRAFO_NAMAPROJECT'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Kapasitas</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TRAFO_KAPASITAS'];?> </th>
                        </tr>
                        
                        <tr> 
                            <th style='width:200px;'>Tahun</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TRAFO_TAHUNCOD'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tujuan</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TRAFO_TUJUAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Sumber Dana</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TRAFO_DANA'];?> </th>
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
                        while ($rowpro = mysqli_fetch_array($qrnmprotr))
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
            window.location.href="index.php?p=ext_trafo";
        }

</script>