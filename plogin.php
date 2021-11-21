<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $tipe_user=$_POST['tipe_user'];

        if($data['username'] == "admin")
		{
			header('location:localhost/toko/admin/index.php');
		}
		else
		{
			header('location:../../index.php');
		}

		}
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='registrasi_pelanggan.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='registrasi_pelanggan.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from pelanggan where username = '".$username."' and password = '".$password."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pelanggan']=$dt_login['id_pelanggan'];
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['status_login']=true;
                header("location: homepage.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>