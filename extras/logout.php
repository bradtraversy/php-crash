<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-crash/13_sessions.php');
