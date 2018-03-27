
<?php
    include 'koneksi.php';
    $data = '';
    if ($_FILES['csv']['size'] > 0) { 

        //get the csv file 
        $file = $_FILES['csv']['tmp_name']; 
        $handle = fopen($file,"r"); 
         
        //loop through the csv file and insert into database 
        do { 
            if ($data[0]) { 
                $up = mysqli_query($conn, "INSERT into TRANSMISI150 (TR_NAMA_BAY, TR_NO_TOWER, TR_TYPE_TOWER, TR_TEGANGAN, TR_REGION, TR_STATUS_MILIK, TR_PROVINSI, TR_KOTA_KAB, TR_KECAMATAN, TR_KELURAHAN, TR_KOORX, TR_KOORY, TR_UNIT, TR_TRAGI) VALUES 
                    ( 
                        '".addslashes($data[0])."', 
                        '".addslashes($data[1])."', 
                        '".addslashes($data[2])."', 
                        '".addslashes($data[3])."',
                        '".addslashes($data[4])."',
                        '".addslashes($data[5])."', 
                        '".addslashes($data[6])."',
                        '".addslashes($data[7])."',
                        '".addslashes($data[8])."',
                        '".addslashes($data[9])."',
                        '".addslashes($data[10])."', 
                        '".addslashes($data[11])."',
                        '".addslashes($data[12])."',
                        '".addslashes($data[13])."'

                    ) 
                ") or die(mysqli_error($conn)) ; 

            } 
        } while ($data = fgetcsv($handle,1000,",","'")); 
        // 

    
    } 
    
    header('Location: ../index.php?p=transmisi150'); die; 
    
?>