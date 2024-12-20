<!DOCTYPE html>
<html>
<head>
	<title></title>
	</head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
	<div class="col-12" style="background-color: #171A21;">
		<div class="col-8 mx-auto">
			<div class="row d-flex">
				<div class="col-3 p-3">
					<a href="">
						<img src="logo.png">
					</div>
				<div class="col-8 pt-2">
					<a href="" class="text-uppercase text-light">Магазин</a>
					<a href="" class="text-uppercase text-light">Сообщество</a>
					<a href="" class="text-uppercase text-light">О steam</a>
					<a href="" class="text-uppercase text-light">Поддержка</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 bg-dark row" style="height: 860px;">
			<div class="col-8 mx-auto" style="background: #222431;">
				<div class="col-12 mx-auto row" style="height: 100px; background: #222431;">
					<div class="col-2" style="background: #222431;">
						<img src="profile.jfif" class="ms-3 pt-4">
					</div>
					<div class="col-2" style="background: #222431;">
						<h1 class="fw-light text-light pt-3 text-uppercase"> <?php echo $_GET['name']; ?> </h1>
						<p class="fw-light text-light"> Электроная почта: <?php echo $_GET['email']; ?> </p>
						<p class="fw-light text-light pt-3">Возраст: <?php echo $_GET['age']; ?> 
							<p class="text-success">
								<?php 
									if($_GET['age'] >=18){
										echo "Ограничений нет";
									}else{
										echo "<ch4 class='text-danger'>ограничения есть</h4>";
									}
								?>
							</p>
						</p>
					</div>
					<div class="col-2" style="background: #222431;">
					</div>
					<div class="col-2" style="background: #222431;">	
					</div>
					<div class="col-4" style="background: #222431;">
						<h2 class="fw-light text-light pt-4">Уровень 1</h2>
						<p class="text-light pt-1 m-0">Вы можете отобразить один из ваших значков здесь.</p>
						<p class="text-light">Выберете его странице редактирования профиля</p>
					<button class="btn bg-primary text-light mt-3 bg-dark">
						<a href="edit.php" class="text-light">Редактирировать профиль</a>
					</button>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>