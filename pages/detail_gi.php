<?php
 include 'proses/koneksi.php';
 $id=$_GET['c'];
 $qrGI = mysqli_query($conn, "select GARDU_INDUK.GI_ID, GARDU_INDUK.GI_WILAYAH, GARDU_INDUK.GI_KOORX, GARDU_INDUK.GI_KOORY, GARDU_INDUK.GI_AREA, GARDU_INDUK.GI_NAMA, GARDU_INDUK.GI_TLP, MASTER_STATUS.NAMA, GARDU_INDUK.GI_ALAMAT FROM GARDU_INDUK INNER JOIN MASTER_STATUS ON GARDU_INDUK.ID_MS=MASTER_STATUS.ID_MS LEFT JOIN GI_IB ON gardu_induk.GI_ID=gi_ib.GI_ID WHERE gardu_induk.GI_ID='$id'");
 $row = mysqli_fetch_array($qrGI);
 $lat = $row['GI_KOORX'];
 $lng = $row['GI_KOORY'];
 
 $qrGtr= mysqli_query($conn, "select GI_ID,IB_ID,IB_NAMA,IB_BEBAN from GI_IB where GI_ID='$id'");
 $qrtrafo= mysqli_query($conn, "select GI_ID,IB_ID,IB_NAMA,IB_BEBAN from GI_IB where GI_ID='$id'");
?>

<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahtrafo' name='tambahtrafo' onclick='bukatambahtrafo();'>Tambah Trafo</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">DETAIL DATA GARDU INDUK</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
    <div class="row"
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <table id="" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                    <thead>
                        <tr> 
                        <input type="hidden" class="form-control" id="inputid" name="inputid" value='<?php echo $id; ?>'>
                            <th style='width:200px;'>Nama Gardu Induk</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GI_NAMA'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Alamat</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GI_ALAMAT'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Telphone</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GI_TLP'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Status</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['NAMA'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Wilayah</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GI_WILAYAH'];?> </th>
                        </tr>
                        <tr> 
                            <th style='width:200px;'>Area</th> 
                            <th style='width:20px;'>:</th>
                            <th><?php echo $row['GI_AREA'];?> </th>
                        </tr>

                    </thead>

                    <tbody>
                        
                    </tbody>

                </table>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="map" style="height:264px"></div>
                </div>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin:0px;padding:10px;">
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-left" style="margin:0px;padding:0px;">
                    
                        <div class="controls">
                            <select name="optrafo" id="optrafo" class="form-control">
                                    <option></option>
                                    <?php 
                                        $i=1;
                                        while ($row=mysqli_fetch_array($qrtrafo))
                                        {
                                            ?>
                                            <option value="<?php echo $row['IB_ID'];?>"><?php echo $row['IB_NAMA'];?></option>
                                            <?php
                                            $i++;
                                        }
                                    ?> 
                            </select>
                        </div>
                            
                       
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-left" >
                         <div class="controls">
                            <button type='submmit' class='btn btn-primary' id='edittrafo' name='edittrafo' onclick='bukaedittrafo();'>Edit Trafo</button>
                            <button type='button' class='btn btn-danger' id='hapustraffo' name='hapustraffo' onclick='hapustrafo();'>Hapus Trafo</button>
                        </div>
                    </div>
                </div>  
                <div class="col-md-6 col-sm-12 col-xs-12" id="datatrafo" style="margin:0px;padding:0px;">
                <h4><b>Informasi Beban :</b></h4>
                    <table id="" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th> 
                                <th>TRAFO</th>
                                <th>BEBAN</th>   
                            </tr>
                        </thead>

                        <tbody>
                            
                            <?PHP
                            $b=1;
                            while ($rowtr=mysqli_fetch_array($qrGtr))
                            {
                                echo "
                                <tr>
                                    <td>".$b."</td>
                                    <td>".$rowtr['IB_NAMA']."</td>
                                    <td>".$rowtr['IB_BEBAN']."</td>
                                 
                                </tr>
                                ";
                                $b++;
                            }
                            ?>

                            
                        </tbody>
                    </table>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12" id="trafo">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12" id="map" style="height: 400px; width:100%;">
                </div>
            </div>
        </div>
       
    </div>
</section></div>

                </div>

    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function initMap() {
        var url = new URL(window.location.href);
        var idGI = url.searchParams.get("c");
        var dataString = {
                  "access": "ambilXYGarduInduk",
                  "id": idGI
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

    function bukatambahtrafo()
    {
        $.ajax({
            url: "pages/tambah_trafo.php",
            dataType: "text",
            success: function(strMessage){
                $('#trafo').html(strMessage)
            }
        })
        $('html, body').animate({
            scrollTop:$("#trafo").offset().top
        }, 700);
    }

    function batal()
    {
        $('#trafo').empty();
    }

    function simpan()
    {
        if($('#inputid').val() == '' || $('#inputnama').val() == '' || $('#beban').val() == '')
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();
            var vid = $('#inputid').val();
            var vnama = $('#inputnama').val();
            var vbeban = $('#beban').val()
            $.ajax({
                url:"proses/prosestambahtrafo.php",
                method:"post",
                data: "id=" + vid + "&nama=" + vnama + "&beban=" + vbeban,
                dataType:"text",
                success: function(strMessage){
                    $('#message').html(strMessage)

                }
            })
            window.location.href="index.php?p=detail_gi&c="+vid+"";
        }
    }

    function bukaedittrafo()
    {
        if ($('#optrafo').val()=='')
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            var vid = $('#optrafo').val();
            $.ajax({
                url: "pages/edit_trafo.php",
                method: "post",
                data: "kode=" + vid,
                dataType: "text",
                success: function(strMessage){
                    $('#trafo').html(strMessage)
                }
            })
            $('html, body').animate({
                scrollTop:$("#trafo").offset().top
            }, 700);
        }
       
    }

    function simpanedit()
    {
        if($('#inputid2').val() == '' || $('#inputnama').val() == '' || $('#beban').val() == '')
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            event.preventDefault();
            var idGI = $('#inputid').val();
            var vid = $('#inputid2').val();
            var vnama = $('#inputnama').val();
            var vbeban = $('#beban').val()
            $.ajax({
                url:"proses/prosesedittrafo.php",
                method:"post",
                data: "id=" + vid + "&nama=" + vnama + "&beban=" + vbeban,
                dataType:"text",
                success: function(strMessage){
                    $('#message').html(strMessage)

                }
            })
            window.location.href="index.php?p=detail_gi&c="+idGI+"";
        }
    }

    function hapustrafo()
    {
        if ($('#optrafo').val()=='')
        {
            showErrorMessage('Data Masih Kosong');
        }
        else
        {
            if(confirm('Apakah Anda Yakin Menghapus Data ?') )
            {
                var idGI = $('#inputid').val();
                var vid = $('#optrafo').val();
                $.ajax({
                    url: "proses/proseshapus.php",
                    method: "post",
                    data: "kode=" + vid + "&page=tr",
                    dataType: "text",
                    success: function(strMessage){
                        $('#trafo').html(strMessage)
                    }
                })
                window.location.href="index.php?p=detail_gi&c="+idGI+"";    
            }
            
        }
        
    }

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnYMYY8GtuxqOPL_1-KjEUQU91L-0J0-s&callback=initMap">
</script>