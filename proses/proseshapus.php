<?php
    include 'koneksi.php';
    if (!empty($_POST['page']))
    {
        if($_POST['page']=='gi')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from GI_IB where GI_ID ='$kode'"))
                {
                    if($del=mysqli_query($conn, "delete from GARDU_INDUK where GI_ID ='$kode'"))
                    {
                        
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_induk'</script>";

                    }
                    else
                    {
                        echo"<script type='text/javascript'>showErrorMessage('Data Gardu Induk Gagal Dihapus')</script>";
                    }
                }

                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Beban Trafo Gagal Dihapus')</script>";
                }
                    
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }
        elseif($_POST['page']=='gh')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from GARDU_HUBUNG where GH_ID='$kode'"))
                {
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=gardu_hubung'</script>";
                }
                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Dihapus')</script>";
                }
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }
        elseif($_POST['page']=='tm')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from TRANSMISI150 where TR_ID='$kode'"))
                {
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=transmisi150'</script>";
                }
                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Dihapus')</script>";
                }
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }

        elseif($_POST['page']=='tr')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from GI_IB where IB_ID='$kode'"))
                {
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=detail_gi'</script>";
                }
                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Gagal Dihapus')</script>";
                }
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }
        elseif($_POST['page']=='codgi')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from WORKFLOW where CODGI_ID ='$kode'"))
                {
                    if($del=mysqli_query($conn, "delete from COD_GI where CODGI_ID ='$kode'"))
                    {
                        
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=cod_gi'</script>";

                    }
                    else
                    {
                        echo"<script type='text/javascript'>showErrorMessage('Data COD Gardu Induk Gagal Dihapus')</script>";
                    }
                }
                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Progress Gagal Dihapus')</script>";
                }       
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }
        elseif($_POST['page']=='exttrafo')
        {
            if(!empty($_POST['kode']))
            {
                $kode=$_POST['kode'];
                if($del=mysqli_query($conn, "delete from WORKFLOW_TRAFO where TRAFO_ID ='$kode'"))
                {
                    if($del=mysqli_query($conn, "delete from EXT_TRAFO where TRAFO_ID ='$kode'"))
                    {
                        
                    echo "<script type='text/javascript'>showSuccess('Data Berhasil Dihapus')</script>";
                    echo "<script type='text/javascript'>window.location.href='index.php?p=ext_trafo'</script>";

                    }
                    else
                    {
                        echo"<script type='text/javascript'>showErrorMessage('Data Extention Trafo Gagal Dihapus')</script>";
                    }
                }
                else
                {
                    echo"<script type='text/javascript'>showErrorMessage('Data Progress Gagal Dihapus')</script>";
                }       
            } 
            else
            {
                echo"<script type='text/javascript'>showErrorMessage('ID Masih Kosong')</script>";
            }
        }
    }
    else
    {
        echo"<script type='text/javascript'>showErrorMessage('page masih kosong')</script>";
    }
?>