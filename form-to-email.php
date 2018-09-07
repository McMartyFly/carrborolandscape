<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$address_first = $_POST['address_first'];
$address_second = $_POST['address_second'];
$address_city = $_POST['address_city'];
$address_state = $_POST['address_state'];
$address_zip = $_POST['address_zip'];
$referral = $_POST['referral'];
$services = $_POST['services'];

$time = $_POST['time'];

if (empty($first_name)){
	$first_name = "error";
}
if (empty($last_name)){
	$last_name = "error";
}
if (empty($visitor_email)){
	$visitor_email = "error";
}
if (empty($phone)){
	$phone = "error";
}


//Validate first
if($first_name == "error" || $last_name == "error" || $visitor_email == "error" || $phone == "error"){
	header("Location: request-a-quote.php?time=$time&services=$services&referral=$referral&addresszip=$address_zip&addressstate=$address_state&addresscity=$address_city&addresssecond=$address_second&addressfirst=$address_first&firstname=$first_name&lastname=$last_name&email=$visitor_email&phone=$phone");
  // echo "First Name, Last Name and Email are mandatory!";
  exit;
} elseif(!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
	header("Location: request-a-quote.php?time=$time&services=$services&referral=$referral&addresszip=$address_zip&addressstate=$address_state&addresscity=$address_city&addresssecond=$address_second&addressfirst=$address_first&firstname=$first_name&lastname=$last_name&email=$visitor_email&phone=$phone&emailvalidate=false");
	exit;
} elseif(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
	header("Location: request-a-quote.php?time=$time&services=$services&referral=$referral&addresszip=$address_zip&addressstate=$address_state&addresscity=$address_city&addresssecond=$address_second&addressfirst=$address_first&firstname=$first_name&lastname=$last_name&email=$visitor_email&phone=$phone&phonevalidate=false");
	exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

// $email_from = 'tom@amazing-design.com';//<== update the email address
$email_from = $visitor_email;
$email_subject = "$first_name $last_name: Quote Request";
$email_body =
		"CUSTOMER: $first_name $last_name.\n".
		"CUSTOMER ADDRESS:\n $address_first\n$address_second\n$address_city, $address_state $address_zip\n".
		"PHONE: $phone\n".
		"REFERRAL METHOD:\n $referral\n".
		"REQUESTED SERVICES:\n $services";

$to = "david.carter@ideasenvy.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
