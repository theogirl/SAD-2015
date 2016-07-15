<?php
	header("Content-Type: text/html; charset=utf-8");

	if (!$_POST) exit;

	require dirname(__FILE__)."/validation.php";
	require dirname(__FILE__)."/csrf.php";

/************************************************/
/* Your data */
/************************************************/
	/* Your email goes here */
	$your_email = "theogirl@gmail.com";

	/* Your name or your company name goes here */
	$your_name = "The Cup Store";

	/* Message subject */
	$your_subject = "New Quote Request";

/************************************************/
/* Settings */
/************************************************/
	/* Select validation for fields */
	/* If you want to validate field - true, if you don't - false */
	$validate_first_name = false;
	$validate_last_name	 = false;
	$validate_email		 = true;
	$validate_phone		 = false;
	$validate_message	 = false;
	$validate_type       = true;
	$validate_size  	 = false;
	$validate_printing   = true;
	$validate_quantity 	 = false;
	$validate_lids 	     = false;
	$validate_color 	 = false;
	$validate_pms	     = false;
	$validate_comment    = false;

	/* Select the action */
	/* If you want to do the action - true, if you don't - false */
	$send_letter = true;

/************************************************/
/* Variables */
/************************************************/
	/* Error variables */
	$error_exist = false;
	$error_mail  = array();
	$error_text	 = array();

	/* Success variables */
	$success_text = array("Thanks! Your quote request has been submitted - we'll be in touch soon!");

	/* POST data */
	$first_name	= (isset($_POST["first-name"]))		? strip_tags(trim($_POST["first-name"]))	: false;
	$last_name	= (isset($_POST["last-name"]))		? strip_tags(trim($_POST["last-name"]))		: false;
	$email		= (isset($_POST["email"]))			? strip_tags(trim($_POST["email"]))			: false;
	$phone		= (isset($_POST["phone"]))			? strip_tags(trim($_POST["phone"]))			: false;
	$message	= (isset($_POST["message"]))		? strip_tags(trim($_POST["message"]))		: false;
	$type   	= (isset($_POST["type"]))	        ? strip_tags(trim($_POST["type"]))          : 0;
	$message	= (isset($_POST["message"]))		? strip_tags(trim($_POST["message"]))		: false;
	$size	    = (isset($_POST["size"]))		    ? strip_tags(trim($_POST["size"]))	    	: false;
	$printing   = (isset($_POST["printing"]))	    ? strip_tags(trim($_POST["printing"]))      : 0;
	$quantity   = (isset($_POST["quantity"]))	    ? strip_tags(trim($_POST["quantity"]))	    : false;
	$lids       = (isset($_POST["lids"]))	        ? strip_tags(trim($_POST["lids"]))	        : 0;
	$color      = (isset($_POST["color"]))	        ? strip_tags(trim($_POST["color"]))	        : false;
	$pms        = (isset($_POST["pms"]))	        ? strip_tags(trim($_POST["pms"]))	        : false;
	$comment    = (isset($_POST["comment"]))	    ? strip_tags(trim($_POST["comment"]))	    : false;
	$token		= (isset($_POST["token_review"]))	? strip_tags(trim($_POST["token_review"]))	: false;

	$first_name	= htmlspecialchars($first_name, ENT_QUOTES, 'UTF-8');
	$last_name	= htmlspecialchars($last_name, ENT_QUOTES, 'UTF-8');
	$email		= htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
	$phone		= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
	$message	= htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
	$type    	= htmlspecialchars($type, ENT_QUOTES, 'UTF-8');
	$size   	= htmlspecialchars($size, ENT_QUOTES, 'UTF-8');
	$printing  	= htmlspecialchars($printing, ENT_QUOTES, 'UTF-8');
	$quantity  	= htmlspecialchars($quantity, ENT_QUOTES, 'UTF-8');
	$lids    	= htmlspecialchars($lids, ENT_QUOTES, 'UTF-8');
	$color    	= htmlspecialchars($color, ENT_QUOTES, 'UTF-8');
	$pms    	= htmlspecialchars($pms, ENT_QUOTES, 'UTF-8');
	$comment    = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');


	$first_name	= substr($first_name, 0, 50);
	$last_name	= substr($last_name, 0, 50);
	$email		= substr($email, 0, 40);
	$phone		= substr($phone, 0, 25);
	$message	= substr($message, 0, 500);
	$type       = substr($type, 0, 20);
	$size		= substr($size, 0, 25);
	$printing   = substr($printing, 0, 20);
	$quantity	= substr($quantity, 0, 25);
	$lids	    = substr($lids, 0, 20);
	$color	    = substr($color, 0, 25);
	$pms	    = substr($pms, 0, 25);
	$comment    = substr($comment, 0, 500);
	

/************************************************/
/* CSRF protection */
/************************************************/
	$new_token = new CSRF('review');
	if (!$new_token->check_token($token)) {
		$error_message = json_encode(array("errorToken" => "Incorrect token. Please reload this webpage"));
		echo $error_message;
		exit();
	}

/************************************************/
/* Validation */
/************************************************/
	/* First name */
	if ($validate_first_name){
		$error_text[] = validateFirstName($first_name, 1);
	} else {
		$error_text[] = "valid";
	}

	/* Last name */
	if ($validate_last_name){
		$error_text[] = validateLastName($last_name, 1);
	} else {
		$error_text[] = "valid";
	}

	/* Email */
	if ($validate_email){
		$error_text[] = validateEmail($email);
	} else {
		$error_text[] = "valid";
	}

	/* Phone */
	if ($validate_phone){
		$error_text[] = validatePhone($phone);
	} else {
		$error_text[] = "valid";
	}

	/* Message */
	if ($validate_message){
		$error_text[] = validateMessage($message, 10);
	} else {
		$error_text[] = "valid";
	}

    /* Product Type */
	if ($validate_type){
		$error_text[] = validateType($type);
	} else {
		$error_text[] = "valid";
	}

	/* Size */
	if ($validate_size){
		$error_text[] = validateSize($size);
	} else {
		$error_text[] = "valid";
	}

    /* Printing */
	if ($validate_printing){
		$error_text[] = validatePrinting($printing);
	} else {
		$error_text[] = "valid";
	}

	/* Quantity */
	if ($validate_quantity){
		$error_text[] = validateQuantity($quantity);
	} else {
		$error_text[] = "valid";
	}

    /* Lids */
	if ($validate_lids){
		$error_text[] = validateLids($lids);
	} else {
		$error_text[] = "valid";
	}

	/* Quantity */
	if ($validate_color){
		$error_text[] = validateColor($color);
	} else {
		$error_text[] = "valid";
	}

	/* PMS */
	if ($validate_pms){
		$error_text[] = validatePms($pms);
	} else {
		$error_text[] = "valid";
	}

	/* Comments */
	if ($validate_comment){
		$error_text[] = validateComment($comment);
	} else {
		$error_text[] = "valid";
	}

	foreach ($error_text as $value) {
		if ($value !== "valid"){
			$error_exist = true;
		}
	}

	/* If validation error occurs */
	if ($error_exist) {
		$error_message = json_encode(array("errorMessage" => $error_text));
		echo $error_message;
		exit();
	}

/************************************************/
/* Processing */
/************************************************/
	/* Send a letter */
	if ($send_letter) {
		require dirname(__FILE__)."/phpmailer/PHPMailerAutoload.php";
		require dirname(__FILE__)."/message.php";
		$mail = new PHPMailer;
		$mail->isSendmail();
		$mail->IsHTML(true);
		$mail->From = $email;
		$mail->CharSet = "UTF-8";
		$mail->FromName = "TCS website";
		$mail->Encoding = "base64";
		$mail->ContentType = "text/html";
		$mail->addAddress($your_email, $your_name);
		$mail->Subject = $your_subject;
		$mail->Body = $letter;
		$mail->AltBody = "Use an HTML compatible email client";

		/* Multiple email recepients */
		/* If you want to add multiple email recepients - true, if you don't - false */
		/* Enter email and name of the recipients */
		$recipients = false;
		if ($recipients) {
			$recipients = array("email@domain.com" => "name of recipient",
								"email@domain.com" => "name of recipient",
								"email@domain.com" => "name of recipient"
								);
			foreach ($recipients as $email => $name) {
				$mail->AddBCC($email, $name);
			}
		}

		// if error occurs
		if(!$mail->send()) {
			$error_mail[] = "Mailer Error: " . $mail->ErrorInfo;
			$error_message = json_encode(array("errorMail" => $error_mail));
			echo $error_message;
			exit();
		}
	} // end $send_letter

	/* Success message */
	$success_message = json_encode(array("successMessage" => $success_text));
	echo $success_message;
?>