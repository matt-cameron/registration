<?php
$message =
'<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>New Account Registration</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
	<!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- CSS Reset -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for iOS meddling in triggered links. */
        *[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
        }

        /* What it does: A work-around for Gmail meddling in triggered links. */
        .x-gmail-data-detectors,
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
	        display: none !important;
	        opacity: 0.01 !important;
        }
        /* If the above doesnt work, add a .g-img class to any image in question. */
        img.g-img + div {
	        display:none !important;
	   	}

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size youd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>

    <!-- Progressive Enhancements -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            /* What it does: Adjust typography on small screens to improve readability */
			.email-container p {
				font-size: 17px !important;
				line-height: 22px !important;
			}

        }

    </style>

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#fafafa" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #fafafa; text-align: left;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
            (Optional) This text will appear in the inbox preview, but not the email body.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
            2. MSO tags for Desktop Windows Outlook enforce a 600px width.
        -->
        <div style="max-width: 600px; margin: auto;" class="email-container">
            <!--[if mso]>
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN -->
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
                <tr>
                    <td style="padding: 20px 0; text-align: center">
                        <img src="https://homesteadheath.com/registration/assets/img/hh-logo1.png" aria-hidden="true" width="400" height="100" alt="alt_text" border="0" style="height: auto; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                    </td>
                </tr>
            </table>
            <!-- Email Header : END -->

            <!-- Email Body : BEGIN -->
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff">
                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 24px; line-height: 27px; color: #333333; font-weight: normal;">New Account Registration</h1>
                                    <p style="margin: 0;">The following information has been submitted. Please allow one to two business days for your account to be created.
                                    </p>
                                    <br>
                                    <div class="well">
                                      <ul class="list-group">
                                        <li class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Matt Cameron</li>
                                        <li class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Cameron LLC</li>
                                        <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> matt@mtmc.ca</li>
                                      </ul>

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;">Received this message in error?</h2>
                                    <p style="margin: 0;">If you belive you have received this message in error or if you need to make a change to the information you have submitted, please let us know by replying to this message or by contacting sales@homesteadheath.com </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->



                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td height="40" style="font-size: 0; line-height: 0;">
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->



            <!-- Email Footer : BEGIN -->
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
                <tr>
                    <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;" class="x-gmail-data-detectors">
                        <br><br>
                        Homestead Heath Inc.<br>145 Renfrew Dr, Unit 130, Markham, Ontario L3R 9R6<br>+1 (905) 604-6388
                        <br><br>
                    </td>
                </tr>
            </table>
            <!-- Email Footer : END -->

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

		<!-- Full Bleed Background Section : BEGIN -->
		<table role="presentation" aria-hidden="true" bgcolor="#259f3c" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
			<tr>
				<td valign="top" align="center">
			        <div style="max-width: 600px; margin: auto;" class="email-container">
			            <!--[if mso]>
			            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
			            <tr>
			            <td>
			            <![endif]-->
                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;">
                                    <p style="margin: 0;">This web service is managed and maintained by Matt Cameron. http://www.mtmc.ca</p>
                                </td>
                            </tr>
                        </table>
			            <!--[if mso]>
			            </td>
			            </tr>
			            </table>
			            <![endif]-->
			        </div>

				</td>
			</tr>
		</table>
		<!-- Full Bleed Background Section : END -->

    </center>
</body>
</html>'
;
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
define('SENDER', 'no-reply@homesteadheath.com');

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
define('RECIPIENT', $_POST["email"]);

// Replace smtp_username with your Amazon SES SMTP user name.
define('USERNAME','AKIAIZG4HOGUE2KPNUDA');

// Replace smtp_password with your Amazon SES SMTP password.
define('PASSWORD','Am/uZWH5lvXEVNXbMLbGRUglAK9jgOkzEA61QKfrZTAa');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
define('HOST', 'email-smtp.us-east-1.amazonaws.com');

 // The port you will connect to on the Amazon SES SMTP endpoint.
define('PORT', '587');

// Other message information
define('SUBJECT','Homestead Heath - New Account Registration');

require_once 'Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');

$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);

 // Create an SMTP client.
$mail = Mail::factory('smtp', $smtpParams);

// Send the email.
$result = $mail->send(RECIPIENT, $headers, $message);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  echo '<script type="text/javascript">
           window.location = "/registration/success.php"
      </script>';
}

?>
