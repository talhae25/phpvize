<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<table  border="5" width="500" cellspacing="0" class="tablo">
			<tr>
				<td align="center">
					
						<h1 class="anabaslik">Talha Eren ERDOĞAN</h1>
					
					</td>
			</tr>
			<tr>
				<td>
					<form action="index.php" method="post">
				<label class="baslik">Yemek Adı:</label>	
				<input type="textbox" name="yemekadi" size="28" style="margin-left: 37px;" placeholder="Yemek Adını Giriniz" autofocus="" class="txtarea">

		
				</td>
			</tr>
			<tr>

				<td>
					<label style="float: left;" class="baslik">Yemek Tarifi:</label>
					<div></div>
					<textarea name="yemektarif" rows="10" cols="29" placeholder="Yemek Tarifin Yazın" style="margin-left: 22px;" class="txtarea"></textarea>
				</td>
			</tr>
			<tr>
				<td align="center"> 
					<input type="submit" value="Yemek Ekle " class="buton" >
					
				</td>
			</tr>
			<tr>
				<td>
					<a href='yemektarifleri.txt' class="link">Yemek Listesini Görmek İçin Tılayınız</a>
				</td>
			</tr>
		</table>
		</form>

		<?php 
error_reporting(0);
$kayit = "yemektarifleri.txt";

$deger = $_POST["yemekadi"];
$deger2 = $_POST["yemektarif"];

$yazilacak_deger = "\nYemek Adi: $deger\n Yemek Tarifi\n $deger2\n";

if ($deger) { 

if (!file_exists($kayit)){ 
  
touch($kayit);
chmod($kayit,0666);
  
}


$kayitbaglan = fopen($kayit,"a+");

if (!fwrite($kayitbaglan,$yazilacak_deger)){
echo "Eklenemedi.";
exit;

} 

echo "<p class=\"msj\">Yemek Tarifiniz Eklendi.</p> ";
} else {

echo "<p class=\"msj\">Yemek Tarifi Eklenmedi !!</p> ";

}

?>

</body>
</html>