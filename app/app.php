<?php
	require_once '../vendor/autoload.php';
	$loader = new Twig_Loader_Filesystem('../views/');
	$twig = new Twig_Environment($loader);

	$vars = [
		'title' => "Twig Demo",
		'h1' => "Heading 1",
		'h2' => "Heading 2",
		'h3' => "Heading 3",
		'p' => "Paragraph",
		'b' => "Bold",
		'i' => "Italic",
		'small' => "Small",
	];
	echo $twig->render('basic_html.html', $vars);
?>