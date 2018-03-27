<?php
 include 'proses/koneksi.php';
 $tm=$_GET['c'];
 $qrTM = mysqli_query($conn, "select * from TRANSMISI150 where tr_id='$tm'");
 $row = mysqli_fetch_array($qrTM); 
?>
<div class="col-lg-12" style='padding:0px;margin:0px;'>
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DETAIL DATA TRANSMISI 150 KV</h2>
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
                            <th style='width:200px;'>Nama Bay</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_NAMA_BAY'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>NO Tower</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_NO_TOWER'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Type Tower</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_TYPE_TOWER'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tegangan Operasi</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_TEGANGAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Region</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_REGION'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Status Milik</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_STATUS_MILIK'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Provinsi</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_PROVINSI'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Kota/Kabupaten</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_KOTA_KAB'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Kecamatan</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_KECAMATAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Kelurahan</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_KELURAHAN'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Koordinat X</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_KOORX'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Koordinat Y</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_KOORY'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Unit</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_UNIT'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Tragi</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['TR_TRAGI'];?> </th>
                        </tr>                       
                    </thead>

                    <tfoot>
                        <tr>
                             <button type='submit' class='btn btn-primary pull-right' id='kembali' name='kembali' onclick='kembali();'>KEMBALI</button>    
                             <br/><br/>      
                        </tr>
                    </tfoot>
                    <br/>

                    <tbody>
                         
                    </tbody>
                     
                </table>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="map" style="height:264px"></div>
                </div>
        </div>
    </div>
</section></div>
 </div>


<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
 <script type="text/javascript">

 function initMap() {
        var url = new URL(window.location.href);
        var idTM = url.searchParams.get("c");
        var dataString = {
                  "access": "ambilXYTransmisi",
                  "id": idTM
        }
        $.ajax({
                type: "POST",
                url: "proses/getLocService.php",
                dataType: 'json',
                data: dataString,
                cache: false,
                success: function(result){
                    if (result.status == 'Success'){
                        var uluru = {lat: parseFloat(result.xVal), lng: parseFloat(result.yVal)};
                            var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: uluru
                            });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            label: result.namaVal,
                            map: map
                        });
                    }   
                }
        });
    }

 
  function kembali()
        {
            window.location.href="index.php?p=transmisi150";
        }

    </script>

   
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnYMYY8GtuxqOPL_1-KjEUQU91L-0J0-s&callback=initMap">
</script>