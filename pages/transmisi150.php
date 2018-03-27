<?php
include 'proses/koneksi.php';
$qrTM = mysqli_query($conn, "select * from TRANSMISI150")
?>


<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahtm' name='tambahtm' onclick='tambahtm();'>Tambah Data Transmisi 150 KV</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<div id="message"></div>
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">DATA TRANSMISI 150 KV</h2>
            <div class="actions panel_actions pull-right">
                <i class="box_toggle fa fa-chevron-down"></i>
                <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                <i class="box_close fa fa-times"></i>
            </div>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Bay</th> 
                                <th>Nomer tower</th>
                                <th>Type Tower</th>
                                <th>Provinsi</th>                               
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama Bay</th> 
                                <th>Nomer tower</th>
                                <th>Type Tower</th>
                                <th>Provinsi</th>                               
                                <th>ACTION</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            
                            <?PHP
                            $a=1;
                            while ($row=mysqli_fetch_array($qrTM))
                            {
                                echo "
                                <tr>
                                    <td>".$a."</td>
                                    <td>".$row['TR_NAMA_BAY']."</td>
                                    <td>".$row['TR_NO_TOWER']."</td>
                                    <td>".$row['TR_TYPE_TOWER']."</td>
                                    <td>".$row['TR_PROVINSI']."</td>
                                    <td>
                                    <button type='submit' class='btn btn-success pull-left' id='setdetail' name='setdetail' onclick='detail_tm(\"".$row['TR_ID']."\");'=>Detail</button>
                                    <button type='submit' class='btn btn-danger pull-left' id='setdel'name='setdel' onclick='hapus_tm(\"".$row['TR_ID']."\")'>Hapus</button>
                                    <button type='submit' class='btn btn-primary pull-left' id='setedit'name='setedit' onclick='edit_tm(\"".$row['TR_ID']."\",\"".$row['TR_NAMA_BAY']."\",\"".$row['TR_NO_TOWER']."\",\"".$row['TR_TYPE_TOWER']."\",\"".$row['TR_TEGANGAN']."\",\"".$row['TR_REGION']."\",\"".$row['TR_STATUS_MILIK']."\",\"".$row['TR_PROVINSI']."\",\"".$row['TR_KOTA_KAB']."\",\"".$row['TR_KECAMATAN']."\",\"".$row['TR_KELURAHAN']."\",\"".$row['TR_KOORX']."\",\"".$row['TR_KOORY']."\",\"".$row['TR_UNIT']."\",\"".$row['TR_TRAGI']."\");'>Edit</button>           
                                    </td>
                                </tr>
                                ";
                                $a++;
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section></div>
   
    <script type="text/javascript">

    //FUNCTION BUAT NEXT PAGES 
        function tambahtm()
        {
            window.location.href="index.php?p=tambahtm";
        }
        function detail_tm(kode)
        {
            window.location.href="index.php?p=detail_tm&c="+kode+"";
        }
        
        function edit_tm(id, nama, nomertower, type, tegangan, region, status, provinsi, kokab, kecamatan, kelurahan, koorx, koory, unit, tragi )
        {
            window.location.href="index.php?p=edittm&c1="+id+"&c2="+nama+"&c3="+nomertower+"&c4="+type+"&c5="+tegangan+"&c6="+region+"&c7="+status+"&c8="+provinsi+"&c9="+kokab+"&c10="+kecamatan+"&c11="+kelurahan+"&c12="+koorx+"&c13="+koory+"&c14="+unit+"&c15="+tragi+"";
        }
        function hapus_tm(vkode)
        {
            if(confirm("Anda Yakin Menghapus data ?"))
            {
                console.log(vkode);
                $.ajax({
                    url:"proses/proseshapus.php",
                    method:"post",
                    data:'kode=' + vkode + '&page=tm',
                    dataType:"Text",
                    success: function(strMessage){
                        $('#message').html(strMessage)

                    }
                })
            }
        }
    </script>