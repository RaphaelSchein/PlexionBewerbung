<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 12.03.2017
 * Time: 18:42
 */
session_start();
//$functions = new functions();
//$sel = new select();
$_SESSION['step'] = 1;
print_r($_GET);
print_r($_POST);
print_r($_SESSION);