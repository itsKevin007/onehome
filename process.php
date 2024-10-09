<?php
include 'global-library/database.php';
include 'global-library/config.php';

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];
$recaptcha_response = $_POST['recaptcha_response'];

// Validate form data (you can add more validation here)
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($message) && !empty($type)) {

    // Verify the reCAPTCHA response
    $recaptcha_secret = '6LfaaVkqAAAAAGK1t3Txr8M9HnMOBoBRytwSWQ-V'; // Replace with your actual reCAPTCHA secret key
    $recaptcha_verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    
    // Prepare the verification request
    $response = file_get_contents($recaptcha_verify_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA verified, proceed to insert the data into the database
        $today_date = date("Y-m-d");

        $subs = ($type == 2) ? "Service Provider" : "Subscriber"; // Determine subscription type

        // Insert into database using prepared statement
        $sql = $conn->prepare("INSERT INTO bs_client (c_fname, c_lname, email, message, sub_type, date_added) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->execute([$fname, $lname, $email, $message, $type, $today_date]);

        $id1 = $conn->lastInsertId();
		$uid1 = md5($id1);

        // Update the unique id in the database
        $sql1 = $conn->prepare("UPDATE bs_client SET uid = ? WHERE c_id = ?");
        $sql1->execute([$uid1, $id1]);

        // Send auto-reply email to the client
        $to = $email;
        $subject = "Thank you for contacting One Home";
        $txt = "
        Dear <b>$lname</b>,<br /><br />
        Thank you for Subscribing to One Home as a $subs. This is to confirm that we have received your email.
        Our team is currently reviewing your message, and we will respond to your inquiry at the earliest opportunity.<br /><br />
        For urgent matters, please contact us directly at <b>subscribe@onehomeph.com</b>.<br /><br />
        Best regards,<br /><br />
        <b>One Home Team</b><br />
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: subscribe@onehomeph.com" . "\r\n";

        mail($to, $subject, $txt, $headers);


		$date=date_create($today_date1);
		date_add($date,date_interval_create_from_date_string("1 days"));
		$d_format = date_format($date,"d-m-Y");
	
	
		// ADMIN
		$to1 = "subscribe@onehomeph.com";
		$subject1 = "Notification - Subscriber";
		$txt1 = "
		".$today_date1." <br />
		<br />
		Subject: New Subscriber<br /> <br />
	
		Client Name: <b>" . $lname . " " . $fname . ".</b><br />
		<b>Contact Information: <b>" . $email . ".</b><br />
		<b>Client's Message:<b> " . $message . ". </b><br /> <br />
		<b>Subscription Type:<b> " . $subs . ". </b><br />
	
		Please review the inquiry and respond accordingly. If you require additional details, let me know.<br /> <br />
	
		Tridentechnology <br />
		";
		
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type: text/html; charset=UTF-8" . "\r\n";
		$headers1 .= "From:". $email . "\r\n" . "CC:  subscribe@onehomeph.com";
	
		mail($to1,$subject1,$txt1,$headers1);

        // Redirect on success
        header('Location: index.php?mail=success');
    } else {
        // reCAPTCHA failed, redirect to an error page
        header('Location: index.php?mail=failed');
    }
} else {
    // Validation failed, redirect to an error page
    header('Location: index.php?mail=failed');
}
?>
