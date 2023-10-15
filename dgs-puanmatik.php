
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background:aqua;
			text-align:center;
			margin-top:50px;
			font-family:arial;
		}
	</style>
</head>
<body>
	
</body>
</html>

<?php

$sayisal_dogru=$_POST['say-dogru'];
$sayisal_yanlis=$_POST['say-yanlis'];
$sozel_dogru=$_POST['soz-dogru'];
$sozel_yanlis=$_POST['soz-yanlis'];
$obs_puan=$_POST['obs-puan'];
$alan=$_POST['alan'];
$gecmis=$_POST['gecmis'];

if($obs_puan==""){
	echo "Öbs kutusunu boş bıraktığınız için puanınızı gösterilmemektedir.";
}
else{
	$sayisalnet=$sayisal_dogru-($sayisal_yanlis/4);
	$sozelnet=$sozel_dogru-($sozel_yanlis/4);
	if($gecmis==1)
		$obs_puan=$obs_puan*0.45;
	elseif($gecmis==2)
		$obs_puan=$obs_puan*0.6;
	
	
	switch($alan){
		case 1:
			$net=($sayisalnet*3)+($sozelnet*0.6)+$obs_puan+250;
			break;

		case 2:
			$net=($sayisalnet*0.6)+($sozelnet*3)+$obs_puan+120;
			break;
		case 3:
			$net=($sayisalnet*1.8)+($sozelnet*1.8)+$obs_puan+222;
			break;
	}

	echo "Sayısal netiniz: $sayisalnet <br> Sözel netiniz: $sozelnet <br> DGS puanınız: $net";

}

?>