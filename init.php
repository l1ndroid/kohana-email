<?php defined('SYSPATH') or die('No direct script access.');

$vendor     = __DIR__.'/vendor';
$autoloader = "$vendor/swiftmailer/lib/swift_required.php";

if (file_exists($autoloader))
{
	require $autoloader;
}
