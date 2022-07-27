<?php
	if(isset($_POST["submit"])){
		$font = "misteryday.ttf";
		$link1 = 'certificate/';
		$ext = '.png';
		$image = imagecreatefrompng("sertifikat.png");
		$img_w = 2000;
		$img_h = 1414;
		$color = imagecolorallocate($image, 19, 21, 22);
		$name = $_POST["nama"];
		imagefttext($image, 70, 0, $img_w/2-2000, $img_h/2+43, $color, $font, $name);
		imagepng($image, "certificate/".$name.".png");
		imagedestroy($image);
		$gamb = $link1.$name.$ext;
		echo "Sertifikat dicetak";
		echo '<img src="'.$gamb.'" '.'width="320px" '.'height="240px" />';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Sertifikat</title>
</head>
<body>

	<form method="POST">
		<input type="text" name="nama" placeholder="Masukkan Nama" autocomplete="off" autofocus>
		<button type="submit" name="submit">Cetak Sertifikat</button>
	</form>

	
</body>
</html>