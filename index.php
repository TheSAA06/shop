<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<!-- header -->
	<div class="col-12 bg-success mx-auto p-0" style="height: 70px;">
		<div class="col-10 mx-auto" style="height: 70px;">
			<div class="row">
				<!-- logotype -->
				<div class="col-1" style="height: 70px;">
					<img src="logo.png" class="w-100">
				</div>
				<!-- header text -->
				<div class="col-7 font-weight-bold" style="height: 70px;">
					<div class="row">
						<p class="mt-4 ml-5">Хорошие отзывы</p>
						<p class="mt-4 ml-5">Отзывов нет</p>
						<p class="mt-4 ml-5">Бесплатная доставка</p>
						<p class="mt-4 ml-5">Доставка 5 тысяч</p>
					</div>
				</div>
				<!-- button -->
				<div class="col-4" style="height: 70px;">
					<div class="col-3 bg-warning mt-3" style="height: 30px">
						<a href="admin.php">Admin panel</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- container -->
	<div class="col-12 mt-3 mx-auto p-0" style="height: 600px;">
		<div class="col-10 bg-success mx-auto" style="height: 600px;">
			<div class="row">
				<div class="col-8 bg-primary" style="height: 600px; background-image: url(containerleftphoto.jpg); background-size: 100% 100%"></div>
				<div class="col-4 bg-primary" style="height: 600px; background-image: url(containerrightphoto.jpg); background-size: 100% 100%"></div>
			</div>
		</div>
	</div>
	<!-- items -->
	<div class="col-10 mt-3 mx-auto p-0 mt-5">
		<div class="col-12 mx-auto">
			<?php 
				$connect = mysqli_connect('127.0.0.1', 'root', '', 'shop');
				$zapros = mysqli_query($connect, "SELECT * FROM items");
				$stroka1 = $zapros->fetch_assoc();
            	$stroka2 = $zapros->fetch_assoc();
            	$stroka3 = $zapros->fetch_assoc();
            	$stroka4 = $zapros->fetch_assoc();
            	$stroka5 = $zapros->fetch_assoc();
            	$stroka6 = $zapros->fetch_assoc();
			?>
			<div class="row">
				<?php
					echo "<div class='col-4 mt-5'><img src=" . $stroka1['img'] ." class='w-100'><h5 class='text-center'>" . $stroka1['title'] ."</h5><p class='text-center'>" . $stroka1['desk'] ."</p><p class='text-center'>" . $stroka1['price'] ." руб.</p></div>";
					echo "<div class='col-4 mt-5'><img src=" . $stroka2['img'] ." class='w-100'><h5 class='text-center'>" . $stroka2['title'] ."</h5><p class='text-center'>" . $stroka2['desk'] ."</p><p class='text-center'>" . $stroka2['price'] ." руб.</p></div>";
					echo "<div class='col-4 mt-5'><img src=" . $stroka3['img'] ." class='w-100'><h5 class='text-center'>" . $stroka3['title'] ."</h5><p class='text-center'>" . $stroka3['desk'] ."</p><p class='text-center'>" . $stroka3['price'] ." руб.</p></div>";
				 ?>
			</div>
		</div>
		<div class="col-12 mt-3 mx-auto" style="height: 350px;">
			<div class="row">
				<?php
					echo "<div class='col-4 mt-5'><img src=" . $stroka4['img'] ." class='w-100'><h5 class='text-center'>" . $stroka4['title'] ."</h5><p class='text-center'>" . $stroka4['desk'] ."</p><p class='text-center'>" . $stroka4['price'] ." руб.</p></div>";
					echo "<div class='col-4 mt-5'><img src=" . $stroka5['img'] ." class='w-100'><h5 class='text-center'>" . $stroka5['title'] ."</h5><p class='text-center'>" . $stroka5['desk'] ."</p><p class='text-center'>" . $stroka5['price'] ." руб.</p></div>";
					echo "<div class='col-4 mt-5'><img src=" . $stroka6['img'] ." class='w-100'><h5 class='text-center'>" . $stroka6['title'] ."</h5><p class='text-center'>" . $stroka6['desk'] ."</p><p class='text-center'>" . $stroka6['price'] ." руб.</p></div>";
				 ?>
			</div>
		</div>
	</div>
</body>
</html>