<?php
if (empty($_POST['username']) || empty($_POST['password']))
{
    echo "<script type='text/javascript'>alert('Data Masing Kosong !!')</script>";
    echo "<script type='text/javascript'> window.location.href='../login.html'</script>";
}
else 
{
    include 'koneksi.php';
    $username = $_POST['username'];
    $password=$_POST['password'];
    $qrlogin= mysqli_query($conn, "SELECT * FROM USER WHERE username='$username' AND password='$password' ");
    $cek = mysqli_num_rows($qrlogin);
    if($cek>0)
    {
        session_start();
        $row = mysqli_fetch_array($qrlogin);
        $_SESSION['username']=$username;
        $_SESSION['nama']=$row['nama'];
         header('Location: ../index.php');

    }
    else
    {
        echo "<script type='text/javascript'>alert('Username Tidak Tersedia !!')</script>";
        echo "<script type='text/javascript'> window.location.href='../login.html'</script>";
    }
}

?>
