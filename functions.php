<?php

# Imgur url is a seven characters long alphanumeric string
# For example: http://i.imgur.com/g62eVFA.jpg

function rand_imgur() {
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$chars_length = strlen($chars) - 1;
	$imgur = '';

	for($i=0; $i < 5; $i++) {
		$n = mt_rand(0, $chars_length);
		$imgur .= $chars[$n];
	}

	return $imgur;
}

function check_imgur($url) {
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_NOBODY, 1);
	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

	# If the image gets redirected then the image doesn't exist
	if(curl_exec($ch) !== FALSE && curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 302) {
		return true;
	}
	else {
		return false;
	}
}