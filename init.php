<?php defined('SYSPATH') or die('No direct script access.');

$vendor     = __DIR__.'/vendor';
$autoloader = "$vendor/swiftmailer/swiftmailer/lib/swift_required";

if (file_exists($autoloader))
{
	require $autoloader;
}