<?php

include './../config/const.php';
include './../config/init.php';

include ENGINE_DIR . 'auth_user.php';
include ENGINE_DIR . 'login.php';
include ENGINE_DIR . 'logout.php';

include PUBLIC_DIR . 'header.php'; ?>

<h1> <a href="/index.php"> на главную</a></h1>
<?php

if ($_SESSION['isAuth']) : ?>
	<h5 class="m-3 alert alert-success" style="height: 300px">
		<?= $_SESSION['user_name'] ?>, добро пожаловать!
	</h5>
    <h3> это ваш личный кабинет</h3>
    <h3> мы рады вас видеть</h3>
    <h3> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, quis!</h3>
<? else : ?>

	<h5 class="m-3 alert alert-danger">
		Доступ к контенту ограничен!
		<a href="/templates/login.php">Войдите</a>, чтобы продолжить
	</h5>
	<?php die() ?>
<?php endif; ?>

<?php include PUBLIC_DIR . 'footer.php';