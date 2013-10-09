<?php
if ( isset ( $_POST['wyslij'] ) ) 
{
		$osoba_kontaktowa = $_POST['osoba_kontaktowa'];
		$osoba_email = $_POST['osoba_email'];
		$osoba_wiadomosc = $_POST['osoba_wiadomosc'];
		
		# Email to Form Owner
		$emailTo = 'kkramek@gmail.com';
		$emailSubject = "Formularz noszaki.pl "."$osoba_kontaktowa"." ($osoba_email)";
		$emailBody = "$osoba_wiadomosc";

		$emailHeader = "From: $osoba_kontaktowa <$osoba_email>\n"
		. "Reply-To: $osoba_email\n"
		. "MIME-Version: 1.0\n"
		. "Content-type: text/plain; charset=\"utf-8\"\n"
		. "Content-transfer-encoding: quoted-printable\n";
	

		mail($emailTo, $emailSubject, $emailBody, $emailHeader);
}
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: http://www.noszaki.pl/kontakt-katarzyna-kramek-doradca-noszenia-clauwi-wroclaw.html');
?>