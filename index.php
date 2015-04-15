<?php

require_once 'vendor/twig/twig/lib/Twig/autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('/');
$twig = new Twig_Environment($loader, [
	'cache' => '/path/to/compilation_cache',
]);

echo $template->render('basic_html.html', $vars);
?>