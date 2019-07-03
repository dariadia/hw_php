<?php
include 'config/const.php';
include ROOT_DIR . 'config/init.php';
include 'engine/autoload.php';
autoload('config');

include ENGINE_DIR . 'lesson5.php';
include ENGINE_DIR . 'lesson6.php';
include ENGINE_DIR . 'lesson7.php';
include ENGINE_DIR . 'logout.php';



include PUBLIC_DIR . 'header.php';
include ENGINE_DIR . 'auth_check.php';
//include TEMPLATES_DIR . 'lesson6.php';
include TEMPLATES_DIR . 'lesson5.php';
include TEMPLATES_DIR . 'modal.php';

include ENGINE_DIR . 'save_session.php';


include PUBLIC_DIR . 'footer.php';
