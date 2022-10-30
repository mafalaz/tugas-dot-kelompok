<!DOCTYPE html>
<html>

<head>
	<title>Tugas DOT</title>
</head>

<body>
	<center>
		<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rs_utama";
		$conn = mysqli_connect("localhost", "root", "", "rs_utama");
		
		$servernameS = "localhost";
        $usernameS = "root";
        $passwordS = "";
        $dbnameS = "rs_cabang";
		$connS = mysqli_connect("localhost", "root", "", "rs_cabang");

		if($conn === false){
			die("ERROR: Tidak bisa konek. "
				. mysqli_connect_error());
		}
		if($connS === false){
			die("ERROR: Tidak bisa konek. "
				. mysqli_connect_error());
		}

		
		//Lanjut dari sini, OK!!!
		$kode_pasien = $_REQUEST['kode'];
		$nama_pasien = $_REQUEST['nama'];
		$jenis_kelamin = $_REQUEST['jenis-kelamin'];
        $golongan_darah = $_REQUEST['gol-dar'];
		$umur = $_REQUEST['umur'];
		$tempat_lahir = $_REQUEST['tempat-lahir'];
        $tanggal_lahir = $_REQUEST['tanggal-lahir'];
		$alamat = $_REQUEST['alamat'];
		$status_perkawinan = $_REQUEST['status-perkawinan'];
		$telepon = $_REQUEST['telepon'];
		$pekerjaan = $_REQUEST['pekerjaan'];
		$agama = $_REQUEST['agama'];

		$sql = "INSERT INTO desc_pasien VALUES ('$kode_pasien',
			'$nama_pasien','$jenis_kelamin','$golongan_darah','$umur','$tempat_lahir',
			'$tanggal_lahir','$alamat','$status_perkawinan','$telepon','$pekerjaan','$agama')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data pasien telah berhasil disimpan di database rumah sakit utama."
				. " Silahkan buka database"
				. " untuk melihat update data pasien terbaru</h3>";

			echo nl2br("\nKode Pasien: $kode_pasien\n Nama Pasien: $nama_pasien\n "
				. "Jenis Kelamin: $jenis_kelamin\n Golongan Darah: $golongan_darah\n Umur: $umur\n Tempat Lahir: $tempat_lahir\n Tanggal Lahir: $tanggal_lahir"
				. "Alamat: $alamat\n Status Perkawinan: $status_perkawinan\n Telepon: $telepon\n Pekerjaan: $pekerjaan\n Agama: $agama");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		if(mysqli_query($connS, $sql)){
			echo "<h3>Data pasien telah berhasil disimpan di database rumah sakit cabang."
				. " Silahkan buka database"
				. " untuk melihat update data pasien terbaru</h3>";

			echo nl2br("\nKode Pasien: $kode_pasien\n Nama Pasien: $nama_pasien\n "
				. "Jenis Kelamin: $jenis_kelamin\n Golongan Darah: $golongan_darah\n Umur: $umur\n Tempat Lahir: $tempat_lahir\n Tanggal Lahir: $tanggal_lahir"
				. "Alamat: $alamat\n Status Perkawinan: $status_perkawinan\n Telepon: $telepon\n Pekerjaan: $pekerjaan\n Agama: $agama");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($connS);
		}
		
		// Close connection
		mysqli_close($conn);
		mysqli_close($connS);
		?>
	</center>
</body>

</html>
