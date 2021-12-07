<!DOCTYPE html>
<html>
<head>
	<title>Soal 3</title>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$pembagian = $bil1 / $bil2;		
	}
	?>
	<div class="kalkulator">
		<h3 class="judul">Pembagian Bilangan Bulat</h3>
		<form method="post" action="soal_3.php">			
			<input type="text" name="bil1" placeholder="Bilangan Pertama">
			<label> / </label>
			<input type="text" name="bil2" placeholder="Bilangan Kedua">
			
			<input type="submit" name="hitung" value="Hitung">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo (floor($pembagian)); ?>">
		<?php }else{ ?>
			<input type="text" value="0">
		<?php } ?>			
	</div>
</body>
</html>



