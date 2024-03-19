<?php
require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';

$model = new UserModel();
$view = new UserView();
$controller = new UserController($model, $view);

$controller->updateUser();