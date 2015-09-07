<?php
	checkRecaptcha();

	function checkRecaptcha()
	{
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => 'value1',
			'response' => $POST['g-recaptcha-response']
		);

		// use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data),
			),
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		echo print_r($result);
	}
