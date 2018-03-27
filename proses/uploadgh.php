
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
                $up = mysqli_query($conn, "INSERT into GARDU_HUBUNG (GH_KODE_ASET, GH_NAMA, GH_ALAMAT, GH_OPERATOR, GH_STATUS_RC, GH_KOORX, GH_KOORY, GH_AREA) VALUES 
                    ( 
                        '".addslashes($data[0])."', 
                        '".addslashes($data[1])."', 
                        '".addslashes($data[2])."', 
                        '".addslashes($data[3])."',
                        '".addslashes($data[4])."',
                        '".addslashes($data[5])."', 
                        '".addslashes($data[6])."',
                        '".addslashes($data[7])."'
                       
                    ) 
                ") or die(mysqli_error($conn)) ; 

            } 
        } while ($data = fgetcsv($handle,1000,",","'")); 
        // 

    
    } 
    
    header('Location: ../index.php?p=gardu_hubung'); die; 
    
?>