<?php
if(isset($_POST['submit'])){
	$admin = 'support@trimitra-perkasa.com'; //ganti email dg email admin (email penerima pesan)
	
	$name	= htmlentities($_POST['name']);
	$nik	= htmlentities($_POST['nik']);
	$phone	= htmlentities($_POST['phone']);
	$email	= htmlentities($_POST['email']);
	$subject	= 'Hubungi Kami Website';
	$message	= "Nama: ". $name ."\nNIK: ". $nik . "\nNomor Telp: ".$phone. "\nEmail: ".$email. "\nPesan: ".htmlentities($_POST['message']);" " ;
	// $message	= $name."\r\n";
	// $message	.= $nik."\r\n";
	// $message	.= $phone."\r\n";
	// $message	.= $email."\r\n\n";
	// $message	.= htmlentities($_POST['message']);

	// $pengirim =  'MIME-Version: 1.0' . "\r\n"; 
	$pengirim .= 'From: <'.$email.'>' . "\r\n";
	// $pengirim .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	
	if(mail($admin, $subject, $message, $pengirim)){
		header("Location: /");
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	echo "Error";
	// header("Location: index.php");
}
?>