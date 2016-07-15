<?php

/******************************************************/
/* Validation methods */
/******************************************************/
	/* First name */
	function validateFirstName($first_name, $min_length) {
		$error_text = "Enter your first name<br>";
		$len = mb_strlen($first_name, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

	/* Last name */
	function validateLastName($last_name, $min_length) {
		$error_text = "Enter your last name<br>";
		$len = mb_strlen($last_name, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

	/* Email */
	function validateEmail($email){
		$error_text = "Incorrect email format<br>";
		$email_template = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";
		return (preg_match($email_template, $email) !== 1) ? $error_text : "valid";
	}

	/* Phone */
	function validatePhone($phone) {
		$error_text = "Only digits. Format: (XXX)-XXX-XXXXXX<br>";
		$phone_template = "/^\([0-9]{3}\)-[0-9]{3}-[0-9]{6}$/";
		return (preg_match($phone_template, $phone) !== 1) ? $error_text : "valid";
	}

	/* Message */
	function validateMessage($message, $min_length) {
		$error_text = "The message is too short - min 10 characters<br>";
		$len = mb_strlen($message, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

	/* Product type */
	function validateType($type) {
		$error_text = "Please choose an item type<br>";
		return ($type == "none") ? $error_text : "valid";
	}

	/* Size */
	function validateSize($size, $min_length) {
		$error_text = "Indicate item size<br>";
		$len = mb_strlen($size, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

	/* Printing */
	function validatePrinting($printing) {
		$error_text = "Please choose a printing option<br>";
		return ($printing == "none") ? $error_text : "valid";
	}

	/* Quantity */
	function validateQuantity($quantity, $min_length) {
		$error_text = "Indicate item quantity<br>";
		$len = mb_strlen($quantity, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

		/* Lid Type */
	function validateLids($lids) {
		$error_text = "Please choose a lid type<br>";
		return ($lids == "none") ? $error_text : "valid";
	}

		/* Color */
	function validateColor($color, $min_length) {
		$error_text = "Indicate # of colors for printing<br>";
		$len = mb_strlen($color, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

		/* PMS */
	function validatePms($pms, $min_length) {
		$error_text = "Indicate any PMS colors to match<br>";
		$len = mb_strlen($pms, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

		/* Comments */
	function validateComment($comment, $min_length) {
		$error_text = "The comment is too short - min 10 characters please<br>";
		$len = mb_strlen($comment, 'UTF-8');
		return ($len < $min_length) ? $error_text : "valid";
	}

?>