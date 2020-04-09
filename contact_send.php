<?php
include "dbcon.php";
	$con=connect();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$c_number = $_POST['c_number'];
	$message = $_POST['message'];
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$insert = "INSERT INTO contact(contact_name, contact_email, contact_number, contact_message, contact_date_added, contact_ipaddr) values('$name','$email','$c_number','$message',NOW(),'$ip_address')";// Do Your Insert Query

	if(mysqli_query($con,$insert)) {
	   echo "Success";
			$to      = $email;
			$subject = 'Your Little Shop - Contact Us';
			$message_body='';
			//$message_body .= "MIME-Version: 1.0\r\n";
			//$message_body .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$message_body .= '
			<table cellspacing="0" cellpadding="0" border="0" style="color:#333;background:#fff;padding:0;margin:0;width:100%;font:15px/1.25em;font-family:Helvetica Neue,Arial,Helvetica;">
				<tbody>
					<tr width="100%"> 
						<td valign="top" align="left" style="background:#eef0f1;font:15px/1.25em"> 
							<table style="border:none;padding:0 18px;margin:50px auto;width:500px"> 
								<tbody> 
									<tr width="100%" height="60"> 
										<td valign="top" align="left" style="border-top-left-radius:4px;border-top-right-radius:4px;background:#2C3E50 url(https://ci5.googleusercontent.com/proxy/EX6LlCnBPhQ65bTTC5U1NL6rTNHBCnZ9p-zGZG5JBvcmB5SubDn_4qMuoJ-shd76zpYkmhtdzDgcSArG=s0-d-e1-ft#https://trello.com/images/gradient.png) bottom left repeat-x;padding:10px 18px;text-align:center"> 
											<b style="font-family: impact;color:#fff;font-size:30px">Your Little Shop</b>
										</td> 
									</tr> 
									<tr width="100%"> 
										<td valign="top" align="left" style="background:#fff;padding:18px">
											<h1 style="font-size:20px;margin:16px 0;color:#333;text-align:center"> Contact Us Success! </h1>
											<p style="color:#333;text-align:center;font-size:20px;">Dear '.$name.',</p>
											<div style="background:#f6f7f8;border-radius:3px;padding:10px;">
												<p>Thank you for Contacting us!</p>
												<p>Our team will soon get in toouch with you.</p>
											</div>
											<p style="font:14px/1.25em;color:#333"> 
												<strong>With best regards!</strong><br>
												<b>Your Little Shop</b><br>
												<b>+91-86928 05802</b><br>
												<b>Support:</b><a href="mailto:kolambkarashutosh@gmail.com" style="color:#306f9c;text-decoration:none;font-weight:bold" target="_blank">Ashutosh Kolambkar</a>
											</p>
										</td>
									</tr>
								</tbody> 
							</table> 
						</td> 
					</tr>
				</tbody>
			</table>';  


			$content=$message_body;

			$headers  = "From: Ashutosh < ashutosh.kolambkar@vsit.edu.in >\n";
			$headers .= "X-Sender: Ashutosh < ashutosh.kolambkar@vsit.edu.in >\n";
			$headers .= "X-Priority: 1\n"; 
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
			$headers .= 'Bcc: kolambkarashutosh@gmail.com';
		mail( $to, $subject, $content, $headers );
	} else {
	   echo "Cannot Insert";
	}
?>