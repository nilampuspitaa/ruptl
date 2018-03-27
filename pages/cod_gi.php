
<?php
include 'proses/koneksi.php';
$qrcodgi = mysqli_query($conn, "select * from COD_GI");
?>


<div class'col-lg-12' >
    <div class='page-title'>
        <button type='submmit' class='btn btn-primary pull-right' id='tambahcodgi' name='tambahcodgi' onclick='tambahcodgi();'>Tambah Proyek COD GI</button>
        <button type='submmit' class='btn btn-purple pull-right' id='progress' name='progress' onclick='tambahprogress();'>Tambah Progress COD GI</button>
    </div>

</div>

<div class="col-lg-12" style='padding:0px;margin:0px;'>
<div id="message"></div>
    <section class="box ">
        <header class="panel_header">
            <h2 class="title pull-left">DATA PROYEK COD GARDU INDUK</h2>
        </header>
        <div class="content-body">    <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th> 
                                <th>NAMA PROYEK GI </th>
                                <th>KAPASITAS</th>
                                <th>TAHUN COD</th>
                                <th>STATUS</th>                               
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                            <th>NO</th>    
                            <th>NAMA PROYEK GI</th>
                            <th>KAPASITAS</th>
                            <th>TAHUN COD</th>
                            <th>STATUS</th>                               
                            <th>ACTION</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            
                            <?PHP
                            $a=1;
                            while ($row=mysqli_fetch_array($qrcodgi))
                            {
                                echo "
                                <tr>
                                    <td>".$a."</td>
                                    <td>".$row['CODGI_NAMA']."</td>
                                    <td>".$row['CODGI_KAPASITAS']."</td>
                                    <td>".$row['CODGI_TAHUN']."</td>
                                    <td>".$row['CODGI_KETSTATUS']."</td>
                                    <td>
                                    <button type='submit' class='btn btn-success pull-left' id='setdetail' name='setdetail' onclick='detail_codgi(\"".$row['CODGI_ID']."\");'=>Detail</button>
                                    <button type='submit' class='btn btn-danger pull-left' id='setdel' name='setdel' onclick='hapus_codgi(\"".$row['CODGI_ID']."\")'>Hapus</button>
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

        function tambahcodgi()
        {
            window.location.href="index.php?p=tambahcodgi";
        }

        function tambahprogress()
        {
            window.location.href="index.php?p=tambahprogresscodgi";
        }

        function detail_codgi(kode)
        {
            window.location.href="index.php?p=detail_codgi&c="+kode+"";
        }

        function hapus_codgi(vkode)
        {
            if(confirm("Anda Yakin Menghapus data ?"))
            {
                console.log(vkode);
                $.ajax({
                    url:"proses/proseshapus.php",
                    method:"post",
                    data:'kode=' + vkode + '&page=codgi',
                    dataType:"Text",
                    success: function(strMessage){
                        $('#message').html(strMessage)

                    }
                })
            }
        }

    </script>