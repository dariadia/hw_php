<?php
session_start();
if ($_SESSION['isAuth']) : ?>
	<h5 class="m-3 alert alert-success">
		<?= $_SESSION['user_name'] ?>, добро пожаловать!
	</h5>
<? elseif ($_SESSION['user_name']) : //если гостю уже дали врменный рандомный логин
	?>
	<h5 class="m-3 alert alert-success">
		Все же советуем зарегистрироваться, но как хотите
	</h5>
<? else : ?>
	<?php
	// если пользователь проходит дальше как гость, ему присвоим некий логин из букв для нашей базы
	function getRandomString($length = 5)
	{
		$characters = 'abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$_SESSION['user_name'] = $randomString;
	}
	if (isset($_GET['is_guest'])) {
		getRandomString();
		header("Refresh:0");
	}
	?>
	<h5 class="m-3 alert alert-success">
		<a href="index.php?is_guest=true">Продолжить как гость</a>
	</h5>
	<?php die; ?>
<?php endif; ?>
<?php session_write_close(); ?>