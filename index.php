<?php

require_once('vendor/autoload.php');

use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('APP_ENV');
echo getenv('DATABASE_USER');
