<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$paths = require __DIR__.'/bootstrap/paths.php';

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' and file_exists($paths['public'].$uri)){
	return false;
}

require_once $paths['public'].'/index.php';
