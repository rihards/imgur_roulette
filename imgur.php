<?php

require 'functions.php';

$content = array();
$valid_urls = 0;
$imgur_domain = 'http://i.imgur.com/';
$imgur_extension = '.jpg';

$ajax_counter = 0;
if(isset($_POST['counter'])) {
	$ajax_counter = intval($_POST['counter']);
}

while ($valid_urls < 10) {

	$imgur = rand_imgur();
	$url = $imgur_domain . $imgur . '.jpg';

	if(check_imgur($url)) {

		echo '<div class="item item-imgur item-counter-' . $ajax_counter . '">';
		echo '<a href="'. $imgur_domain . $imgur . $imgur_extension .'"><img src="'. $imgur_domain . $imgur . $imgur_extension .'"></a>';
		echo '</div>';

		$valid_urls++;
	}
}