<?php
	session_start();
	$result = checkData();

	if($result === TRUE) {
		sendEmail();
		header('Location: ../contact2.php');
	} else {
		header('Location: ../contact.php');
	}

	function checkData()
	{
		$success = TRUE;

		if (!isset($_POST['name']) || strlen($_POST['name']) < 5) {
			$success = FALSE;
			$_SESSION['error_name'] = 'Please enter your full name.';
		}

		if (!isset($_POST['email']) || strlen($_POST['email']) < 5)) {
			$success = FALSE;
			$_SESSION['error_email'] ='Please enter a your e-mail address.';
		} else {
			if(!validEmail($_POST['email'])) {
				$success = FALSE;
				$_SESSION['error_email'] = 'Please enter a valid e-mail address.';
			}
		}

		if (!isset($_POST['phone']) || strlen($_POST['phone']) < 5)) {
			$success = FALSE;
			$_SESSION['error_phone'] ='Please enter a your phone number.';
		} else {
			if(!validPhone($_POST['phone'])) {
				$success = FALSE;
				$_SESSION['error_phone'] = 'Please enter a valid phone number.';
			}
		}

		if (!isset($_POST['message']) || strlen($_POST['message']) < 5)) {
			$success = FALSE;
			$_SESSION['error_message'] = 'Please enter your message.';
		}

		if (!checkRecaptcha()) {
			$success = FALSE;
			$_SESSION['error_recaptcha'] = "Your security token didn't match please try again.";
		}

		return $success;
	}

	function checkRecaptcha()
	{
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => '6Ld2eQwTAAAAAKImz5TZKJcBaqrm0fq77M3VjcLT',
			'response' => $_POST['g-recaptcha-response']
		);

		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data),
			),
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, FALSE, $context);

		return $result['success'];
	}

	function validEmail($email)
	{
		return true;
	}

	function validPhone($phone)
	{
		return true;
	}

	function sendEmail()
	{
		return true;
	}
