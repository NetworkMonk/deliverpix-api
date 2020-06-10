<?php
require 'vendor/autoload.php';

// Load .env variables
use Dotenv\Dotenv;
$dotenv = new DotEnv(__DIR__);
$dotenv->load();

// Set service timezone, this is normally UTC
date_default_timezone_set("UTC");
