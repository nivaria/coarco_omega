<?php
/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[mailkey].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $subject: The message subject.
 * - $body: The message body in HTML format.
 * - $mailkey: The message identifier.
 * - $recipient: An email address or user object who is receiving the message.
 * - $css: Internal style sheets.
 *
 * @see template_preprocess_mimemail_message()
 */
global $base_url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php print $subject ?></title>
	<style type="text/css">
		/* Client-specific Styles */
		#outlook a {padding: 0;}  /* Force Outlook to provide a "view in browser" button. */
		body {
      width: 100% !important;
    }
		.ReadMsgBody {
      width: 100%;
    }
		.ExternalClass {
      width: 100%;
    } /* Force Hotmail to display emails at full width */
		body {
      -webkit-text-size-adjust: none;
    } /* Prevent Webkit platforms from changing default text sizes. */
		/* Reset Styles */
		body {
      margin: 0;
      padding: 0;
      font-family: arial;
      font-size: 14px;
      color: #666666;
    }
		img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }
		table td {
      border-collapse: collapse;
    }
		ul {
			padding-left:0;
		}
		li {
			line-height:24px;
		}
		a {
			color: #0071B2;
			text-decoration:none;
		}
    table td.bodycontent {
      padding: 24px;
    }
	</style>
</head>
<body>
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="wrapper">
		<tr>
			<td align="center" valign="top" bgcolor="#FFF">
				<table border="0" cellpadding="0" cellspacing="0" width="620">
					<tr>
						<td align="center" valign="top" height="126" bgcolor="#00599C">
							<table border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td width="620" height="120">
										<a href="<?php print url(); ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                      <img style="margin-left:167px;" src="<?php print $base_url . '/'. path_to_theme();?>/images/logo-for-newsletter.png" alt="<?php print t('Home'); ?>" />
                    </a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="620" id="content">
								<tr>
									<td valign="top" style="padding:24px;" class="bodycontent"><?php print $body ?></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top" bgcolor="#00599C" style="color:#FFF;text-decoration:none;">
							<table border="0" cellpadding="0" cellspacing="0" width="620">
								<tr height="86">
									<td width="125">
										<a href="<?php print $base_url; ?>/home" title="<?php print t('Home'); ?>" rel="home" id="logo">
                      <img style="margin-left:20px;" src="<?php print $base_url . '/'. path_to_theme();?>/images/logo-footer-newsletter.png" alt="<?php print t('Home'); ?>" />
                    </a>
                  </td>
                  <td width="300">
                    <ul>
                      <li><?php print $private_area_link; ?></li>
                      <li><?php print $privacy_policy_link; ?></li>
                    </ul>
									</td>
                  <td>
                    <ul style="list-style-type:none;">
                      <li>+34 922 626 540</li>
                      <li><?php print $contact_link; ?></li>
                    </ul>
									</td>                  
								</tr>
							</table>
						</td>
					</tr>
          <tr>
            <td width="620" height="50" align="right" bgcolor="#FFF">
              <a href="http://www.nivaria.com" title="Nivaria"><img src="<?php print $base_url . '/'. path_to_theme();?>/images/project-by-nivaria-sgrey.png" alt="Nivaria" /></a>
            </td>                  
          </tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
