<?php

// Version
define('VERSION', '3.0.3.8-ce.1.4');

// Configuration
if (is_file('config-local.php')) {
    require_once('config-local.php');
} else if (is_file('config.php')) {
    require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
    header('Location: install/index.php');
    exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');