<?php
include 'proses/koneksi.php';
$qrexttrafo = mysqli_query($conn, "select * from EXT_TRAFO");
?>

<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahexttrafo' name='tambahexttrafo' onclick='tambahexttrafo();'>Tambah Proyek Extention Trafo</button>
        <button type='submmit' class='btn btn-purple pull-right' id='progress' name='progress' onclick='tambahprogresstrafo();'>Tambah Progress Extention Trafo</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<div id="message"></div>
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">DATA PROYEK Extention Trafo</h2>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th> 
                                <th>NAMA PROYEK TRAFO </th>
                                <th>KAPASITAS</th>
                                <th>TAHUN COD</th>                      
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                            <th>NO</th>    
                            <th>NAMA PROYEK GI</th>
                            <th>KAPASITAS</th>
                            <th>TAHUN COD</th>                              
                            <th>ACTION</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            
                            <?PHP
                            $a=1;
                            while ($row=mysqli_fetch_array($qrexttrafo))
                            {
                                echo "
                                <tr>
                                    <td>".$a."</td>
                                    <td>".$row['TRAFO_NAMAPROJECT']."</td>
                                    <td>".$row['TRAFO_KAPASITAS']."</td>
                                    <td>".$row['TRAFO_TAHUNCOD']."</td>
                                    <td>
                                    <button type='submit' class='btn btn-success pull-left' id='setdetail' name='setdetail' onclick='detail_trafo(\"".$row['TRAFO_ID']."\");'=>Detail</button>
                                    <button type='submit' class='btn btn-danger pull-left' id='setdel' name='setdel' onclick='hapus_trafo(\"".$row['TRAFO_ID']."\")'>Hapus</button>
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

        function tambahexttrafo()
        {
            window.location.href="index.php?p=tambahexttrafo";
        }

        function tambahprogresstrafo()
        {
            window.location.href="index.php?p=tambahprogresstrafo";
        }

        function detail_trafo(kode)
        {
            window.location.href="index.php?p=detail_trafo&c="+kode+"";
        }

        function hapus_trafo(vkode)
        {
            if(confirm("Anda Yakin Menghapus data ?"))
            {
                console.log(vkode);
                $.ajax({
                    url:"proses/proseshapus.php",
                    method:"post",
                    data:'kode=' + vkode + '&page=exttrafo',
                    dataType:"Text",
                    success: function(strMessage){
                        $('#message').html(strMessage)

                    }
                })
            }
        }

    </script>