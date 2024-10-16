    <?php
	// Sanitize and retrieve form inputs if they are set
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
    $mname = isset($_POST['mname']) ? htmlspecialchars($_POST['mname']) : '';
    $lname = isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
    $suffix = isset($_POST['suffix']) ? htmlspecialchars($_POST['suffix']) : '';
    
    $region = isset($_POST['region2']) ? htmlspecialchars($_POST['region2']) : '';
    $province = isset($_POST['province2']) ? htmlspecialchars($_POST['province2']) : '';
    $city = isset($_POST['city2']) ? htmlspecialchars($_POST['city2']) : '';
    $barangay = isset($_POST['barangay2']) ? htmlspecialchars($_POST['barangay2']) : '';
    $zip = isset($_POST['zip2']) ? htmlspecialchars($_POST['zip2']) : '';
    $subd = isset($_POST['subd2']) ? htmlspecialchars($_POST['subd2']) : '';
    $street = isset($_POST['street2']) ? htmlspecialchars($_POST['street2']) : '';
    $unit = isset($_POST['unit2']) ? htmlspecialchars($_POST['unit2']) : '';
    $building = isset($_POST['building2']) ? htmlspecialchars($_POST['building2']) : '';
    $phase = isset($_POST['phase2']) ? htmlspecialchars($_POST['phase2']) : '';
    $block = isset($_POST['b2']) ? htmlspecialchars($_POST['b2']) : '';
    
    $citizenship = isset($_POST['citizenship']) ? htmlspecialchars($_POST['citizenship']) : '';
    $birth = isset($_POST['birth']) ? htmlspecialchars($_POST['birth']) : '';
    
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';


	$civil_status = isset($_POST['civil']) ? htmlspecialchars($_POST['civil']) : null;

    // Retrieve contact information
    $contact_number = isset($_POST['connum']) ? htmlspecialchars($_POST['connum']) : '';
    $email_address = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

	// Civil Status (radio button group)
    $civil_status = isset($_POST['civil']) ? $_POST['civil'] : '';

    // Contact Information
    $contact_number = isset($_POST['connum']) ? htmlspecialchars($_POST['connum']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';

    // Profession (checkbox group)
    $professions = isset($_POST['profess']) ? $_POST['profess'] : [];
    
    // Technical Roles (input fields)
    $technical_roles = isset($_POST['techrole']) ? $_POST['techrole'] : [];

    // PRC ID
    $prc_id = isset($_POST['prc']) ? htmlspecialchars($_POST['prc']) : '';

    // Company Information
    $region = isset($_POST['region3']) ? htmlspecialchars($_POST['region3']) : '';
    $province = isset($_POST['province3']) ? htmlspecialchars($_POST['province3']) : '';
    $city = isset($_POST['city3']) ? htmlspecialchars($_POST['city3']) : '';
    $barangay = isset($_POST['barangay3']) ? htmlspecialchars($_POST['barangay3']) : '';
    $zip = isset($_POST['zip3']) ? htmlspecialchars($_POST['zip3']) : '';
    $subdivision = isset($_POST['subdivision3']) ? htmlspecialchars($_POST['subdivision3']) : '';
    $street = isset($_POST['street3']) ? htmlspecialchars($_POST['street3']) : '';
    $unit = isset($_POST['unit3']) ? htmlspecialchars($_POST['unit3']) : '';
    $building = isset($_POST['building3']) ? htmlspecialchars($_POST['building3']) : '';
    $phase = isset($_POST['phase3']) ? htmlspecialchars($_POST['phase3']) : '';
    $block_and_lot = isset($_POST['bandl3']) ? htmlspecialchars($_POST['bandl3']) : '';
    
    // Contact Person Information
    $contact_person_name = isset($_POST['pername']) ? htmlspecialchars($_POST['pername']) : '';
    $contact_person_position = isset($_POST['perpos']) ? htmlspecialchars($_POST['perpos']) : '';

    // Tax Identification Number (TIN)
    $tin = isset($_POST['tin']) ? htmlspecialchars($_POST['tin']) : '';

    // Business Permits and Licenses
    $dti = isset($_POST['dti']) ? htmlspecialchars($_POST['dti']) : '';
    $mayors_permit = isset($_POST['mayorper']) ? htmlspecialchars($_POST['mayorper']) : '';
    $cor = isset($_POST['cor']) ? htmlspecialchars($_POST['cor']) : '';


	$assess = isset($_POST['assess']) ? htmlspecialchars($_POST['assess']) : '';

	$kmmain = isset($_POST['kmmain']) ? $_POST['kmmain'] : [];

	$credref = isset($_POST['credref']) ? $_POST['credref'] : [];

	$bank = isset($_POST['bank']) ? $_POST['bank'] : [];

	$branch = isset($_POST['branch']) ? $_POST['branch'] : [];

	$accname = isset($_POST['accname']) ? $_POST['accname'] : [];

	$accno = isset($_POST['accno']) ? $_POST['accno'] : [];

	$liabilityin = isset($_POST['liabilityin']) ? $_POST['liabilityin'] : [];

	$liabilityinno = isset($_POST['liabilityinno']) ? $_POST['liabilityinno'] : [];

	$compenin = isset($_POST['compenin']) ? $_POST['compenin'] : [];

	$compeninno = isset($_POST['compeninno']) ? $_POST['compeninno'] : [];

	$indemin = isset($_POST['indemin']) ? $_POST['indemin'] : [];

	$indeminno = isset($_POST['indeminno']) ? $_POST['indeminno'] : [];

	$liability = isset($_POST['liability']) ? $_POST['liability'] : [];


	$agree = isset($_POST['agree']) ? $_POST['agree'] : [];

	$membership = isset($_POST['membership']) ? $_POST['membership'] : [];

	$chequeno = isset($_POST['chequeno']) ? $_POST['chequeno'] : [];

	$gcashref = isset($_POST['gcashref']) ? $_POST['gcashref'] : [];

	$bankref = isset($_POST['bankref']) ? $_POST['bankref'] : [];

    
    
    $sql = "INSERT INTO tbl_service (sp_type, fname, mname, lname, suffix, contact_person_name, contact_person_position, 
                        tin, dti, mayors_permit, cor, assess, kmmain, credref, bank, branch, accname, accno, liabilityin, 
                        liabilityinno, compenin, compeninno, indemin, indeminno, liability, agree, membership, chequeno, 
                        gcashref, bankref, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssssssssssssssssssssssssss", $sp_type, $fname, $mname, $lname, $suffix, $contact_person_name, $contact_person_position, $tin, $dti, $mayors_permit, $cor, $assess, $kmmain, $credref, $bank, $branch, $accname, $accno, $liabilityin, $liabilityinno, $compenin, $compeninno, $indemin, $indeminno, $liability, $agree, $membership, $chequeno, $gcashref, $bankref);
        $stmt->execute();
        $stmt->close();
    }
    
    $id = $conn->lastInsertId();
    $uid = md5($id);

    
    $sql = "UPDATE tbl_service SET uid = ? WHERE sid = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("si", $uid, $id);
        $stmt->execute();
        $stmt->close();
    }


		// Retrieve selected professions (checkboxes)
		$professions = isset($_POST['profess']) ? $_POST['profess'] : [];

		foreach ($professions as $profession) {
            $sql = "INSERT INTO tbl_profession (service_id, prof_type) VALUES (?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ii", $id, $profession);
                $stmt->execute();
                $stmt->close();
            }
            
		}
	
		// Retrieve technical roles (input fields)
		$technical_roles = isset($_POST['techrole']) ? $_POST['techrole'] : [];
	
		foreach ($technical_roles as $technical_role) {
            $sql = "INSERT INTO tbl_service (role1, role2, role3) VALUES (?, ?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ii", $id, $technical_role);
                $stmt->execute();
                $stmt->close();
            }
		}

		
		// Retrieve PRC ID
		$prc_id = isset($_POST['prc']) ? $_POST['prc'] : [];

		$sql = "INSERT INTO tbl_prc (service_id, prc_id) VALUES (?, ?)";
		if ($stmt = $conn->prepare($sql)) {
			$stmt->bind_param("is", $id, $prc_id);
			$stmt->execute();
			$stmt->close();
		}
		
		

		$affiliates = isset($_POST['affiliate']) ? $_POST['affiliate'] : [];

		foreach ($affiliates as $affiliate) {
	
		}
	
		$aandrs = isset($_POST['aandr']) ? $_POST['aandr'] : [];
	
		foreach ($aandrs as $aandr) {
	
		}

		$geographs = isset($_POST['geograph']) ? $_POST['geograph'] : [];

		foreach ($geographs as $geograph) {
	
		}
	
		$serprods = isset($_POST['serprod']) ? $_POST['serprod'] : [];
	
		foreach ($serprods as $serprod) {
	
		}
	
		$seroffereds = isset($_POST['seroffered']) ? $_POST['seroffered'] : [];
	
		foreach ($seroffereds as $seroffered) {
	
		}

		$clients = isset($_POST['client']) ? $_POST['client'] : [];

		foreach ($clients as $client) {
	
		}
	
		$clientrefs = isset($_POST['clientref']) ? $_POST['clientref'] : [];
	
		foreach ($clientrefs as $clientref) {
	
		}
	?>