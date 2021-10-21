<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MathAnalysis</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
		<section onclick="fun()" id="popup_section" class="popup_section">
			<div class="popup_window">
				<button onclick="fun()" id="popup_button"  class="popup_button" >x</button>
				<p class="popup_text">Задонатьте за труды разработчика<br>(В разделе донат реквизиты)</p>
			</div>
			<script>
				function fun(){
      			document.getElementById('popup_section').style.display = "none";
      			};
			</script>
		</section>
	<section class="header">
		<div class="header_li">
			<a class="a_3" target="_top"  href="index.php">Главная страница</a>
			<a class="a_1" target="_top" href="php/courses.php">Курсы</a>
			<a class="a_4" target="_top" href="php/donut.php">Донат</a>
			<a class="a_2" target="_top" href="php/author.php">Об авторе</a>
			
		</div>
	</section>
	<section class="content">
		<h1 style="margin-top:00px;">Я скоро выложу сюда все видосы из курса ВышМат. Проект сделан на безвозмездной основе. 
		Буду благодарен если скинетесь разработчику на лечение или на 4 банки redbull'a</h1>
	</section>
	<section class="feedback">
			<form class="form" action="php/mail.php" method="POST">
				<h2>Feedback Form</h2>
				<input class="input_from" name="user_name" required type="text" placeholder="Введите имя"><br>
				<input class="input_from" name="user_phone" required  type="tel" placeholder="Введите номер"><br>
				<input class="input_from" name="user_email" required  type="email" placeholder="Введите email"><br>
				<textarea class="textarea" name="question" required id="" cols="30" rows="10" placeholder="Вопрос"></textarea>
				<input type="submit" class="submit">
			</form>
	</section>

</body>
</html>