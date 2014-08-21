<!DOCTYPE html>
<html>
	<head>
	<title>Contact Samumed</title>		
	
	<meta charset="utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Wnt Pathway, Progenitor, Inhibitor, Activator" />
    <meta name="description" content="Samumed - The leading Wnt pathway drug discovery and development company." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
<?php include("includes/header_scripts.php"); ?>
<?php 
$pageId = "contact";
?>
<script>
function checkform ( form )
{
    // see http://www.thesitewizard.com/archive/validation.shtml
    // for an explanation of this script and how to use it on your
    // own website

    // ** START name**
    if (document.ContactForm.name.value == "") {
        alert( "Please enter your name." );
        document.ContactForm.name.focus();
        return false ;
    }
    // ** END **
	
    // ** START email **
    if (form.email.value == "") {
        alert( "Please enter your email address." );
        form.email.focus();
        return false ;
    }
     // ** END **

     // ** START email validation **
 	if(form.email.value.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/) == null){
 		  alert('Not a valid email address');
 		  return false;
 	}
    // ** END **
	
	
	 // ** START subject **
    if (form.subject.value == "") {
        alert( "Please enter a subject." );
        form.subject.focus();
        return false ;
    }
     // ** END **
	 
	 // ** START subject **
    if (form.text.value == "") {
        alert( "Please enter a message." );
        form.text.focus();
        return false ;
    }
     // ** END **

  // ** START Hidden URL field to reduce spam **
    if (form.url.value != "") {
        return false ;
    }

	return true ;
}

</script>

</head>

<body class="<?php echo $pageId; ?>">
	
<div class="wrapper" id="header">
		<?php include("includes/header.php"); ?>
</div>

<div class="wrapper" id="content">
<div class="container">
<div class="content">

<div class="left">
<div class="map_wrapper">

<h2 class="title"><span>MAP</span> TO SAMUMED</h2>
	<iframe width="425" height="350" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=9381+Judicial+Dr,+Suite+160,+San+Diego,+CA&amp;aq=&amp;sll=32.877752,-117.205117&amp;sspn=0.009731,0.014334&amp;ie=UTF8&amp;hq=&amp;hnear=9381+Judicial+Dr+%23160,+San+Diego,+California+92121&amp;t=m&amp;ll=32.877749,-117.20511&amp;spn=0.012651,0.018239&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=9381+Judicial+Dr,+Suite+160,+San+Diego,+CA&amp;aq=&amp;sll=32.877752,-117.205117&amp;sspn=0.009731,0.014334&amp;ie=UTF8&amp;hq=&amp;hnear=9381+Judicial+Dr+%23160,+San+Diego,+California+92121&amp;t=m&amp;ll=32.877749,-117.20511&amp;spn=0.012651,0.018239&amp;z=15&amp;iwloc=A" style="color: #0000ff; text-align: left; margin-left: 15px;">View Larger Map</a></small>	
</div>
							
</div><!-- end of left div -->					
<div class="right">
<div class="contact_address">	
<p><strong>Samumed</strong><br />
	9381 Judicial Drive, Suite 160<br />
	San Diego, CA 92121<br />
	Phone:&nbsp;+1 (858) 926-2900<br />
	Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 (858) 552-9315<br />
	Email:&nbsp;&nbsp;&nbsp;<a href="mailto:info@samumed.com" style="text-decoration:none;color:#555555;">info@samumed.com</a></p>
</div>

</div><!-- end of right div -->

<div class="contact_form">
	
	<form method="post" action="<?php echo ROOT_DIR; ?>/contact/contact-thank-you.php" name="ContactForm" onSubmit="return checkform(this);" class="contactpageform">
	<input type="hidden" name="page" value="ContactUs"/>
		<fieldset>
			<legend>E-mail</legend><br>
		<div>
			<label class="label-top" for="contact_name">
				Enter your Name:
			</label>
			<input type="text" name="name" id="contact_name" size="30" class="inputbox" value="">
		</div>
		<div>
			<label class="label-top" for="contact_email">
				E-mail address:
			</label>
			<input type="text" id="contact_email" name="email" size="30" value="" class="inputbox required validate-email" maxlength="100">
		</div>
		<div>
			<label class="label-top" for="contact_subject">
				Message Subject:
			</label>
			<input type="text" name="subject" id="contact_subject" size="30" class="inputbox" value="">
		</div>
		<div>
			<label class="label-top" for="contact_text">
				Enter your Message:
			</label>
			<textarea cols="50" rows="10" name="text" id="contact_text" class="inputbox required"></textarea>
		</div>
	
			<div>
			<input type="checkbox" name="email_copy" id="contact_email_copy" value="yes">
			<label for="contact_email_copy" class="email_copy">
				E-mail a copy of this message to your own address.		</label>
		</div>
				<div style="display:none;visibility:hidden;"><span class="text">URL:</span><INPUT NAME="url" SIZE="35"></div>
			<br>
		<div class="readon">
			<button class="button validate" type="submit">Send</button>
		</div>
	</fieldset>

</form>
</div><!-- end of contactdiv -->
</div>
<div class="content_bottom"></div>
</div>
</div>

<div class="wrapper" id="footer">
	<?php include("includes/footer.php"); ?>
</div>

<?php include("includes/footer_scripts.php"); ?>


</body>

</html>