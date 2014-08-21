<?
$Page = $_POST['page'];
//print_r($_POST);
if (!$Page){
header("../404.php");
}

if (($Page == "ContactUs") && ($url == "")){

	$sender_name = $_POST['name'];
	$sender_email = $_POST['email'];
	$sender_subject = $_POST['subject'];
	$sender_message = $_POST['text'];
	$email_copy = $_POST['email_copy'];
	if($email_copy != 'yes') {
		$email_copy = 'no';
	}

	if(!$error){
    $MailRec="info@samumed.com";
	$headers = "Bcc: qc@webmistress.com". "\r\n";
	$FromAddr="From:$sender_email";
	$Subj = "$sender_subject";
	$body .="This is an enquiry e-mail via http://samumed.com/ from: \n";
	$body .=$sender_name." <".$sender_email."> \n\n";
 	$body .="$sender_message";
	//$body .="Copy?: ".$email_copy." \n";
	mail($MailRec,$Subj,$body,$FromAddr, $headers);// send mail	
	
	if($email_copy == 'yes') {
		$MailRecCopy="$sender_email";
		$FromAddrCopy="From: info@samumed.com";
		$SubjCopy = "Copy of: ".$sender_subject;
		$bodyCopy .="Copy of: \n\n";
		$bodyCopy .="This is an enquiry e-mail via http://samumed.com/ from: \n";
		$bodyCopy .=$sender_name." <".$sender_email."> \n\n";
	 	$bodyCopy .="$sender_message";
		mail($MailRecCopy,$SubjCopy,$bodyCopy,$FromAddrCopy);// send mail		
		} 
	}
		
}
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Contact Samumed</title>		
	
	<meta charset="utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Wnt Pathway, Progenitor, Inhibitor, Activator" />
    <meta name="description" content="Samumed - The leading Wnt pathway drug discovery and development company." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
<?php include("../includes/header_scripts.php"); ?>
<?php 
$pageId = "contact";
?>
</head>

<body class="<?php echo $pageId; ?>">
	
<div class="wrapper" id="header">
		<?php include("../includes/header.php"); ?>
</div>

<div class="wrapper" id="content">
<div class="container">
<div class="content">


	<h1>Thank you for your request.</h1>
					

			
</div>
<div class="content_bottom"></div>
</div>
</div>

<div class="wrapper" id="footer">
	<?php include("../includes/footer.php"); ?>
</div>

<?php include("../includes/footer_scripts.php"); ?>


</body>

</html>