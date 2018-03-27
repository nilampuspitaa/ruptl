
<?php
include 'proses/koneksi.php';
$qrGI = mysqli_query($conn, "select GARDU_INDUK.GI_ID, GARDU_INDUK.GI_WILAYAH, GARDU_INDUK.GI_KOORX, GARDU_INDUK.GI_KOORY, GARDU_INDUK.GI_AREA, GARDU_INDUK.GI_NAMA, GARDU_INDUK.GI_TLP, MASTER_STATUS.NAMA, GARDU_INDUK.GI_ALAMAT FROM GARDU_INDUK INNER JOIN MASTER_STATUS ON GARDU_INDUK.ID_MS=MASTER_STATUS.ID_MS");
?>


<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahgi' name='tambahgi' onclick='tambahgi();'>Tambah Data GI</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<div id="message"></div>
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">DATA GARDU INDUK</h2>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th> 
                                <th>NAMA GI</th>
                                <th>TELPHONE</th>
                                <th>STATUS</th>
                                <th>ALAMAT</th>                               
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                            <th>NO</th>    
                            <th>NAMA GI</th>
                            <th>TELPHONE</th>
                            <th>STATUS</th>
                            <th>ALAMAT</th>                               
                            <th>ACTION</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            
                            <?PHP
                            $a=1;
                            while ($row=mysqli_fetch_array($qrGI))
                            {
                                echo "
                                <tr>
                                    <td>".$a."</td>
                                    <td>".$row['GI_NAMA']."</td>
                                    <td>".$row['GI_TLP']."</td>
                                    <td>".$row['NAMA']."</td>
                                    <td>".$row['GI_ALAMAT']."</td>
                                    <td>
                                    <button type='submit' class='btn btn-success pull-left' id='setdetail' name='setdetail' onclick='detail_gi(\"".$row['GI_ID']."\");'=>Detail</button>
                                    <button type='submit' class='btn btn-danger pull-left' id='setdel' name='setdel' onclick='hapus_gi(\"".$row['GI_ID']."\")'>Hapus</button>
                                    <button type='submit' class='btn btn-primary pull-left' id='setedit' name='setedit' onclick='edit_gi(\"".$row['GI_ID']."\",\"".$row['GI_NAMA']."\",\"".$row['GI_TLP']."\",\"".$row['NAMA']."\",\"".$row['GI_ALAMAT']."\",\"".$row['GI_WILAYAH']."\",\"".$row['GI_KOORX']."\",\"".$row['GI_KOORY']."\",\"".$row['GI_AREA']."\");'>Edit</button>           
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
    <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        function tambahgi()
        {
            window.location.href="index.php?p=tambahgi";
        }

        function detail_gi(kode)
        {
            window.location.href="index.php?p=detail_gi&c="+kode+"";
        }

        function edit_gi(id,nama,tlp,status,alamat,wilayah,koorx,koory,area)
        {
            window.location.href="index.php?p=editgi&c1="+id+"&c2="+nama+"&c3="+tlp+"&c4="+status+"&c5="+alamat+"&c6="+wilayah+"&c7="+koorx+"&c8="+koory+"&c9="+area+"";
        }

        function hapus_gi(vkode)
        {
            if(confirm("Anda Yakin Menghapus data ?"))
            {
                console.log(vkode);
                $.ajax({
                    url:"proses/proseshapus.php",
                    method:"post",
                    data:'kode=' + vkode + '&page=gi',
                    dataType:"text",
                    success: function(strMessage){
                        $('#message').html(strMessage)

                    }
                })
            }
        }

    </script>