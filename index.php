<?php
date_default_timezone_set('Asia/Jakarta');
$a = date('l');
$p = date('H');
function salam($p, $nama)
{
	date_default_timezone_set('Asia/Jakarta');
	$p = date('H');
	if ($p >= "00" && $p <= "12") {
		return "<img src='../Fungsi PHP/asset/Gambar/Matahari.png' width='50px' height='50px'>" . "<br>" .
			"Selamat Pagi " . "$nama";
	} else if ($p >= "12" && $p <= "13") {
		return "<img src='../Fungsi PHP/asset/Gambar/Matahari.png' width='50px' height='50px'>" . "<br>" .
			"Selamat Siang " . "$nama";
	} else if ($p >= "14" && $p <= "18") {
		return "<img src='../Fungsi PHP/asset/Gambar/Matahari.png' width='50px' height='50px'>" . "<br>" .
			"Selamat Sore " . "$nama";
	} else {
		return "<img src='../Fungsi PHP/asset/Gambar/Matahari.png' width='50px' height='50px'>" . "<br>" .
			"Selamat Malam " . "$nama";
	}
}
function user($usr)
{
	return "$usr";
}


function hariInd($hari)
{
	$hariInd = "";
	switch ($hari) {
		case 'Monday':
			$hariInd = "Senin";
			break;
		case 'Tuesday':
			$hariInd = "Selasa";
			break;
		case 'Wednesday':
			$hariInd = "Rabu";
			break;
		case 'Thursday':
			$hariInd = "Kamis";
			break;
		case 'Friday':
			$hariInd = "Jum'at";
			break;
		case 'Saturday':
			$hariInd = "Sabtu";
			break;
		case 'Sunday':
			$hariInd = "Minggu";
			break;
	}
	return $hariInd;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="asset/style.css" />
    <link rel="stylesheet" href="fontawesome-free-6.4.2/css/all.css" /> -->
</head>
<style>
	* {
		max-width: 1200px;
	}

	.waktu {
		padding: 10px;
	}

	.main {
		padding: 5px;
	}

	.jumbotron {
		width: 100%;
		background-color: #e0e381;
		border-radius: 20px;
	}
</style>

<body>
	<section class="main">
		<section class="jumbotron">
			<section class="waktu">
				<h4><?= salam($p, "Galuh Saputri"); ?></h4>
			</section>

			<p><?= hariInd($a) ?></p>
		</section>

	</section>

</body>

</html>