<?PHP 
$to = "negina_kohistani@yahoo.com";
$subject = "Results from form";
$headers = "From: Form Mailer";
$forward = 0;
$location = "";

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 



$msg = "Result from the form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo "<body style='background: #000000'>";
    echo "<h4 style='color: #ffffcc;'>Thank you for submitting our form.<br>";
    echo "We will get back to you as soon as possible.</h4>";
    echo "</body>";
} 

?>