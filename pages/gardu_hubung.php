
<?php
include 'proses/koneksi.php';
$qrGH = mysqli_query($conn, "select * from GARDU_HUBUNG")
?>


<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahgh' name='tambahgh' onclick='tambahgh();'>Tambah Data GH</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<div id="message"></div>
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">DATA GARDU HUBUNG</h2>
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
                                <th>KODE ASET</th>
                                <th>NAMA</th>
                                <th>AREA</th>
                                <th>ALAMAT</th>                               
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>NO</th> 
                                <th>KODE ASET</th>
                                <th>NAMA</th>
                                <th>AREA</th>
                                <th>ALAMAT</th>                               
                                <th>ACTION</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            
                            <?PHP
                            $a=1;
                            while ($row=mysqli_fetch_array($qrGH))
                            {
                                echo "
                                <tr>
                                    <td>".$a."</td>
                                    <td>".$row['GH_KODE_ASET']."</td>
                                    <td>".$row['GH_NAMA']."</td>
                                    <td>".$row['GH_AREA']."</td>
                                    <td>".$row['GH_ALAMAT']."</td>
                                    <td>
                                    <button type='submit' class='btn btn-success pull-left' id='setdetail' name='setdetail' onclick='detail_gh(\"".$row['GH_ID']."\");'=>Detail</button>
                                    <button type='submit' class='btn btn-danger pull-left' id='setdel' name='setdel' onclick='hapus_gh(\"".$row['GH_ID']."\")'>Hapus</button>
                                    <button type='submit' class='btn btn-primary pull-left' id='setedit' name='setedit' onclick='edit_gh(\"".$row['GH_ID']."\",\"".$row['GH_KODE_ASET']."\",\"".$row['GH_NAMA']."\",\"".$row['GH_ALAMAT']."\",\"".$row['GH_OPERATOR']."\",\"".$row['GH_STATUS_RC']."\",\"".$row['GH_KOORX']."\",\"".$row['GH_KOORY']."\",\"".$row['GH_AREA']."\");'>Edit</button>           
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
        function tambahgh()
        {
            window.location.href="index.php?p=tambahgh";
        }

        function detail_gh(kode)
        {
            window.location.href="index.php?p=detail_gh&c="+kode+"";
        }

        function edit_gh(id, kd, nama, alamat, operator, status, koorx, koory, area)
        {
            window.location.href="index.php?p=editgh&c1="+id+"&c2="+kd+"&c3="+nama+"&c4="+alamat+"&c5="+operator+"&c6="+status+"&c7="+koorx+"&c8="+koory+"&c9="+area+"";
        }

        function hapus_gh(vkode)
        {
            if(confirm("Anda Yakin Menghapus data ?"))
            {
                console.log(vkode);
                $.ajax({
                    url:"proses/proseshapus.php",
                    method:"post",
                    data:'kode=' + vkode + '&page=gh',
                    dataType:"Text",
                    success: function(strMessage){
                        $('#message').html(strMessage)

                    }
                })
            }
        }
    </script>