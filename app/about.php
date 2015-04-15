<?php
	require_once '../vendor/autoload.php';
	$loader = new Twig_Loader_Filesystem('../views/');
	$twig = new Twig_Environment($loader);

	$list = [
		'Alpha',
		'Beta',
		'Gamma',
		'Delta',
		'Epsilon',
		'Zeta',
		'Eta',
		'Theta'
	];

	$vars = [
		'title' => "Demo With List",
		'h1' => "This is a heading",
		'h2' => "This also is a heading",
		'h3' => "This is the smallest heading",
		'p' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat, libero a lacinia viverra, diam odio elementum justo, non egestas quam sem sit amet orci. Nullam rhoncus porta metus sit amet pulvinar. Vestibulum lobortis mauris nec tellus tempor sagittis. Phasellus finibus tempor gravida. Morbi laoreet ligula id nulla vestibulum eleifend. Donec vitae tellus a ipsum congue euismod vel vel lacus. Aliquam pellentesque elementum pharetra. Quisque id neque vel turpis finibus rutrum. Duis volutpat massa at metus faucibus sagittis. Etiam luctus, sem a tincidunt lobortis, nulla mi suscipit ex, vel ultrices eros orci et velit.',
		'b' => "This is bold text.",
		'i' => "This is italic text.",
		'small' => "This is small text.",
		'list' => $list
	];
	echo $twig->render('basic_html.html', $vars);
?>