<?php  session_start();
include "koneksi.php";



if (isset($_POST['Login'])){
	//koneksi terpusat

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
		$query=mysqli_query($konek,"SELECT * FROM member WHERE username='$username' and password='$password'") or die(mysqli_error($konek));
		// $cek=mysql_num_rows($query);
		// $row=mysql_fetch_array($query);
        $cek=mysqli_fetch_assoc($query);
        var_dump($cek);
		
		if($cek){
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			
			
			?><script language="javascript">document.location.href="index.php";</script><?php
			
		}else{
			?><script language="javascript">document.location.href="formlogin.php?status=Gagal Login";</script><?php
		}		
		

}else{
	unset($_POST['Login']);
}
?>