<?php
require_once "config/autoload.php";
use src\controller\RolesController;
$rolesdao = new RolesController();
$rolesdao->add();
$rolesdao->getAll();
?> 