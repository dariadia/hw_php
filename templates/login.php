<?php

include './../config/const.php';
include './../config/init.php';

include ENGINE_DIR . 'auth_user.php';
include ENGINE_DIR . 'login.php';

include PUBLIC_DIR . 'header.php';

?>


	<div class="container  ">
		<div class="row d-flex justify-content-center">

			<div class="col-md-6 ">
				<form class="form-horizontal" method="post">
					<span class="heading">АВТОРИЗАЦИЯ</span>
					<div  class="form-group">
						<input  name ="login" type="" class="form-control" id="inputEmail" placeholder="Login">
						<i class="fa fa-user"></i>
					</div>
					<div  class="form-group help">
						<input name = "password" type="password" class="form-control" id="inputPassword"
									 placeholder="Password">
						<i class="fa fa-lock"></i>
						<a href="#" class="fa fa-question-circle"></a>
					</div>
					<div class="form-group">
						<div class="main-checkbox">
							<input  type="checkbox" value="none" id="checkbox1" name="check"/>
							<label for="checkbox1"></label>
						</div>
						<span class="text">Запомнить</span>
						<button type="submit" class="btn btn-default">ВХОД</button>
					</div>

				</form>
                <?if ($status != ''):?>
                <div class="alert alert-danger"><?=$status?></div>
			</div>
<?endif;?>
		</div>


<?php include PUBLIC_DIR . 'footer.php';
