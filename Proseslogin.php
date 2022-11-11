<?php
include('koneksi.php');
if ($_SERVER{"REQUEST_METHOD"}=="POST"){
    $Username=mysqli_real_escape_string($koneksi,$_POST{'Username'});
    $Password=mysqli_real_escape_string($koneksi,md5($_POST{'Password'}));
    $quary="SELECT*FROM user WHERE Username='$Username' AND Password='$Password'";
    $quarydb=mysqli_query($koneksi,$quary);
    $cek=mysqli_num_rows($quarydb);
    if ($cek>0) {
        $getdata=mysqli_fetch_array($quarrydb);
        header("location: welcome.php");
    }else {
        echo "Username dan Password Salah";
    }
}