<?php
 include 'proses/koneksi.php';
 $id=$_GET['c'];
 $qrGH = mysqli_query($conn, "select GH_ID, GH_KODE_ASET, GH_NAMA, GH_ALAMAT, GH_OPERATOR, GH_STATUS_RC, GH_KOORX, GH_KOORY, GH_AREA from GARDU_HUBUNG where GH_ID='$id'");
 $row = mysqli_fetch_array($qrGH); 
?>
<div class="col-lg-12" style='padding:0px;margin:0px;'>
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DETAIL DATA GARDU HUBUNG</h2>
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
                            <th style='width:200px;'>Kode Aset</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_KODE_ASET'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Nama Gardu Hubung</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_NAMA'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Alamat</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_ALAMAT'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Operator</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_OPERATOR'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Status RC</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_STATUS_RC'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Koordinat X</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_KOORX'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Koordinat Y</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_KOORY'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Area</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GH_AREA'];?> </th>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="map" style="height:264px"></div>
                </div>
                <br>
        </div>
    </div>
</section></div>
                </div>


<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript">

function initMap() {
        var url = new URL(window.location.href);
        var idGH = url.searchParams.get("c");
        var dataString = {
                  "access": "ambilXYGarduhubung",
                  "id": idGH
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
            window.location.href="index.php?p=gardu_hubung";
        }

</script>

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnYMYY8GtuxqOPL_1-KjEUQU91L-0J0-s&callback=initMap">
</script>