<?php
require_once '../includes/session.php';

session_destroy();
header('Location: ../views/login.php');
exit;
