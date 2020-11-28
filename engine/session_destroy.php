<?php

session_start();
session_destroy();
header('location:'.$_SERVER['REQUEST_URI']);
die;