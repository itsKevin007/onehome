<?php
include 'global-library/database.php';
include 'global-library/config.php';

// Retrieve form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$suffix = $_POST['suffix'];
$nationality = $_POST['nationality'];
$birth = $_POST['birth'];
$age = $_POST['age'];
$govid = $_POST['govid'];
$idnum = $_POST['idnum'];
$gender = $_POST['gender'];
$civil = $_POST['civil'];
$emailadd = $_POST['emailadd'];
$connum = $_POST['connum'];

$region_text = $_POST['region_text'];
$province_text = $_POST['province_text'];
$city_text = $_POST['city_text'];
$barangay_text = $_POST['barangay_text'];
$zipcode = $_POST['zipcode'];
$subdivision = $_POST['subdivision'];
$street = $_POST['street'];
$unit = $_POST['unit'];
$building = $_POST['building'];
$phase = $_POST['phase'];
$blocklot = $_POST['blocklot'];

$membership = $_POST['membership'];
$payment = $_POST['payment'];
$amount = $_POST['amount'];
$bank = $_POST['bank'];
$branch = $_POST['branch'];
$checknum = $_POST['checknum'];
$accnum = $_POST['accnum'];
$billing = $_POST['billing'];
$gateperimeter = $_POST['gateperimeter'];
$waiver = $_POST['waiver'];

$agree = $_POST['agree'];
$long = $_POST['long'];
$lat = $_POST['lat'];


$chk = $conn->prepare("SELECT * FROM bs_client WHERE email = '$emailadd' AND is_deleted != '1'");
$chk->execute();
if($chk->rowCount() > 0)
{
    header('Location: index.php?view=add&error=Email Address already exist! Please try again.');              
}else{
    
    $sql = $conn->prepare("INSERT INTO bs_client (c_fname, c_mname, c_lname, c_suffix, nationality, birth, age, govid, idnum, gender, civil, email, connum,
                                                region_text, province_text, city_text, barangay_text, zipcode, subdivision, street, unit, building, phase, blocklot,
                                                membership, payment, amount, bank, branch, checknum, accnum, billing, gateperimeter, waiver, agree, longitude, latitude, date_added, is_deleted)
                                        VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$nationality', '$birth','$age', '$govid', '$idnum', '$gender', '$civil', '$emailadd', '$connum',
                                                '$region_text', '$province_text', '$city_text', '$barangay_text', '$zipcode', '$subdivision', '$street', '$unit', '$building', '$phase', '$blocklot',
                                                '$membership', '$payment', '$amount', '$bank', '$branch', '$checknum', '$accnum', '$billing', '$gateperimeter', '$waiver', '$agree', '$long', '$lat', 
                                                '$today_date1', '0')");
    $sql->execute();
    
    $id = $conn->lastInsertId();
    $uid = md5($id);
    
    $up = $conn->prepare("UPDATE bs_client SET uid = '$uid' WHERE c_id = '$id'");
    $up->execute();

    header('Location: index.php?view=list&error=Data submitted successfully.');
}
?>