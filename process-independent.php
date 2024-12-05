<?php

include 'global-library/database.php';
include 'global-library/config.php';


$fname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$mname = isset($_POST['middlename']) ? $_POST['middlename'] : '';
$lname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$suffix = isset($_POST['suffix']) ? $_POST['suffix'] : '';

// Contact Information
$emailadd = isset($_POST['emailadd']) ? $_POST['emailadd'] : '';
$connum = isset($_POST['connum']) ? $_POST['connum'] : '';
$tin = isset($_POST['tin']) ? $_POST['tin'] : '';

// Address Information ---------------------->
$region = isset($_POST['region_text']) ? $_POST['region_text'] : '';
$province = isset($_POST['province_text']) ? $_POST['province_text'] : '';
$city = isset($_POST['city_text']) ? $_POST['city_text'] : '';
$barangay = isset($_POST['barangay_text']) ? $_POST['barangay_text'] : '';
$zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
$subdivision = isset($_POST['subdivision']) ? $_POST['subdivision'] : '';
$street = isset($_POST['street']) ? $_POST['street'] : '';
$unit = isset($_POST['unit']) ? $_POST['unit'] : '';
$building = isset($_POST['building']) ? $_POST['building'] : '';
$phase = isset($_POST['phase']) ? $_POST['phase'] : '';
$blocklot = isset($_POST['blocklot']) ? $_POST['blocklot'] : '';

// Business Permits and Licenses ---------------->
$dti = isset($_POST['dti']) ? $_POST['dti'] : '';
$mayorper = isset($_POST['mayorper']) ? $_POST['mayorper'] : '';
$cor = isset($_POST['cor']) ? $_POST['cor'] : '';

// Services/Products Offered ------------------->
$serprod = isset($_POST['serprod']) ? $_POST['serprod'] : '';
$geographL = isset($_POST['geographL']) ? $_POST['geographL'] : '';
$geographV = isset($_POST['geographV']) ? $_POST['geographV'] : '';
$geographM = isset($_POST['geographM']) ? $_POST['geographM'] : '';

$assess = isset($_POST['assess']) ? $_POST['assess'] : '';
$kmmain = isset($_POST['kmmain']) ? $_POST['kmmain'] : '';

// Financial Information ----------------->
$credref = isset($_POST['credref']) ? $_POST['credref'] : '';
$bank = isset($_POST['bank']) ? $_POST['bank'] : '';
$branch = isset($_POST['branch']) ? $_POST['branch'] : '';
$accname = isset($_POST['accname']) ? $_POST['accname'] : '';
$accno = isset($_POST['accno']) ? $_POST['accno'] : '';

// Insurance ----------------------->
$credref = isset($_POST['credref']) ? $_POST['credref'] : '';

$liabilityin = isset($_POST['liabilityin']) ? $_POST['liabilityin'] : '';
$liabilityinno = isset($_POST['liabilityinsu']) ? $_POST['liabilityinsu'] : '';

$compenin = isset($_POST['compenin']) ? $_POST['compenin'] : '';
$compeninno = isset($_POST['compeninno']) ? $_POST['compeninsu'] : '';

$indemin = isset($_POST['indemin']) ? $_POST['indemin'] : '';
$indeminno = isset($_POST['indeminno']) ? $_POST['indeminsu'] : '';

// SERVICE PROVIDER WAIVER ------------------------->
$waiver = isset($_POST['waiver']) ? $_POST['waiver'] : '';

// Agreement ------------------------->
$agree = isset($_POST['agree']) ? $_POST['agree'] : '';


$recaptcha_response = $_POST['recaptcha_response'];


    // Verify the reCAPTCHA response
    $recaptcha_secret = '6LfaaVkqAAAAAGK1t3Txr8M9HnMOBoBRytwSWQ-V'; // Replace with your actual reCAPTCHA secret key
    $recaptcha_verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    
    // Prepare the verification request
//     $response = file_get_contents($recaptcha_verify_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
//     $responseKeys = json_decode($response, true);
// if ($responseKeys["success"]) {

// $chk = $conn->prepare("SELECT * FROM bs_client WHERE email = '$emailadd' AND is_deleted != '1'");
// $chk->execute();
// if($chk->rowCount() > 0)
// {
//     header('Location: index.php?mail=failed');              
// }else{

  
        // reCAPTCHA verified, proceed to insert the data into the database
        $today_date = date("Y-m-d");

        // SQL statement with additional columns for new fields
        $sql = $conn->prepare("
            INSERT INTO tbl_independent (
                fname, mname, lname, suffix, emailadd, connum, 
                in_region, in_prov, in_city, in_barangay, zipc, 
                in_subdi, str, in_unit, in_build, phase, blocklot, 
                tin, dti, mayorper, cor, 
                serprod, geographL, geographV, geographM, 
                assess, kmmain, credref, bank, branch, 
                accname, accno, liabilityin, liabilityinno, 
                compenin, compeninno, indemin, indeminno, 
                waiver, agree, date_added
            ) VALUES (
                ?, ?, ?, ?, ?, ?, 
                ?, ?, ?, ?, ?, 
                ?, ?, ?, ?, ?, ?, 
                ?, ?, ?, ?, 
                ?, ?, ?, ?, 
                ?, ?, ?, ?, ?, 
                ?, ?, ?, ?, 
                ?, ?, ?, ?, 
                ?, ?, ?
            )
        ");

        // Execute the statement with the collected values
        $sql->execute([
            $fname, $mname, $lname, $suffix, $emailadd, $connum, 
            $region, $province, $city, $barangay, $zipcode, 
            $subdivision, $street, $unit, $building, $phase, $blocklot, 
            $tin, $dti, $mayorper, $cor, 
            $serprod, $geographL, $geographV, $geographM, 
            $assess, $kmmain, $credref, $bank, $branch, 
            $accname, $accno, $liabilityin, $liabilityinno, 
            $compenin, $compeninno, $indemin, $indeminno, 
            $waiver, $agree, $today_date
        ]);

        $id1 = $conn->lastInsertId();
		$uid1 = md5($id1);

        # Need For Each Loop
        $affiliate = isset($_POST['affiliate']) ? $_POST['affiliate'] : [];
        $aandr = isset($_POST['aandr']) ? $_POST['aandr'] : [];
        
        // Loop through each affiliate and insert into the database
        foreach ($affiliate as $affiliates) {
            $affil = $conn->prepare("INSERT INTO in_affiliate (members, inid) VALUES (:aff, :id)");
            $affil->bindParam(':aff', $affiliates);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }
        
        // Loop through each awrec and insert into the database
        foreach ($aandr as $aandrs) {
            $affil = $conn->prepare("INSERT INTO in_awrec (award, inid) VALUES (:ann, :id)");
            $affil->bindParam(':ann', $aandrs);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }
        
        # Need For Each Loop
        $desserprod = isset($_POST['DesSerProd']) ? $_POST['DesSerProd'] : '';
        $seroffered = isset($_POST['seroffered']) ? $_POST['seroffered'] : '';

        // Loop through each serprod and insert into the database
        foreach ($desserprod as $desserprods) {
            $affil = $conn->prepare("INSERT INTO in_serprod (serprod, inid) VALUES (:serprod, :id)");
            $affil->bindParam(':serprod', $desserprods);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }

        // Loop through each seroff and insert into the database
        foreach ($seroffered as $seroffereds) {
            $affil = $conn->prepare("INSERT INTO in_seroff (seroff, inid) VALUES (:seroff, :id)");
            $affil->bindParam(':seroff', $seroffereds);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }

        // References and Experience ----------------------->
        # For Each Loop
        $client = isset($_POST['client']) ? $_POST['client'] : '';
        $clientref = isset($_POST['clientref']) ? $_POST['clientref'] : '';

        // Loop through each client and insert into the database
        foreach ($client as $clients) {
            $affil = $conn->prepare("INSERT INTO in_client (client, inid) VALUES (:client, :id)");
            $affil->bindParam(':client', $clients);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }

        // Loop through each seroff and insert into the database
        foreach ($clientref as $clientrefs) {
            $affil = $conn->prepare("INSERT INTO in_cliref (cliref, inid) VALUES (:cliref, :id)");
            $affil->bindParam(':cliref', $clientrefs);
            $affil->bindParam(':id', $id1);
            $affil->execute();
        }
        
        // Update the unique id in the database
        $sql1 = $conn->prepare("UPDATE tbl_independent SET uid = ? WHERE in_id = ?");
        $sql1->execute([$uid1, $id1]);

        // Send auto-reply email to the client
        $to = $emailadd;
        $subject = "One Home Solutions PH - Independent Service Provider";
        $txt = "
        Dear <b>$lname</b>,<br /><br />
        Thank you for Subscribing to One Home as a Independent Service Provider. This is to confirm that we have received your email.
        Our team is currently reviewing your message, and we will respond to your inquiry at the earliest opportunity.<br /><br />
        For urgent matters, please contact us directly at <b>subscribe@onehomeph.com</b> or <b>onehomesolutionsph@gmail.com</b>.<br /><br />
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
		$subject1 = "Notification - Service Provider Company";
		$txt1 = "
		".$today_date1." <br />
		<br />
		Subject: New Subscriber<br /> <br />
	
		Client Name: <b>" . $lname . " " . $fname . ".</b><br />
		<b>Contact Information: <b>" . $emailadd . ".</b><br />
		<b>Contact Number:<b> " . $connum . ". </b><br /> <br />
		<b>Subscription Type:<b> Independent Service Provider </b><br />
	
		Please review the inquiry and respond accordingly. If you require additional details, let me know.<br /> <br />
	
		Tridentechnology <br />
		";
		
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type: text/html; charset=UTF-8" . "\r\n";
		$headers1 .= "From:". $emailadd . "\r\n" . "CC:  subscribe@onehomeph.com";
	
		mail($to1,$subject1,$txt1,$headers1);

        // Redirect on success
        header('Location: index.php?mail=success');
//     } 
// }else {
// 	// reCAPTCHA failed, redirect to an error page
// 	header('Location: index.php?mail=failed');
// }


?>