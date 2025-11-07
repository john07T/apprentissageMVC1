<?php
require_once '../app/controllers/jouetController.php';
require_once '../app/Models/jouets.php';
use app\controllers\jouetController;
$controller=new jouetController();
$controller->index();

?>