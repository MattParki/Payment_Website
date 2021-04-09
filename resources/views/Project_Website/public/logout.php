<?php
require_once '../src/setup.php';

session_destroy();
header('Location: Project_Website.php');
die;