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
<body style="background-color:#f4f4f2" >
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="wrapper">
		<tr>
			<td align="center" valign="top" bgcolor="#f4f4f2">
				<table border="0" cellpadding="0" cellspacing="0" width="658">
					<tr>
						<td align="right" valign="center" height="34" width="658" colspan="3" >
							<a href="http://www.coarco.es">www.coarco.es</a>
						</td>
					</tr>
					<tr>
						<td height="100%" width="28" bgcolor="#fff" >&nbsp;</td>
						<td>
							<table border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td align="center" valign="top" height="116" bgcolor="#fff">
										<table border="0" cellpadding="0" cellspacing="0" >
											<tr>
												<td width="100%" height="116" align="center">
													<a href="<?php print url(); ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
														<img src="<?php print $base_url . '/'. path_to_theme();?>/newsletter/images/logo-for-newsletter.png" alt="<?php print t('Home'); ?>" />
													</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="height:2px;line-height:2px;" align="center" cellpadding="0" cellspacing="0" valign="top" height="2" bgcolor="#bac5cb">&nbsp;</td>
								</tr>
								<tr>
									<td align="center" valign="top" bgcolor="#fff" width="602">
										<table border="0" cellpadding="0" cellspacing="0" id="content">
											<tr>
												<td valign="top" class="bodycontent"><?php print $body ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="height:2px;line-height:2px;" align="center" cellpadding="0" cellspacing="0" valign="top" height="2" bgcolor="#bac5cb">&nbsp;</td>
								</tr>
								<tr>
									<td align="left" valign="top" bgcolor="#fff" style="color:#FFF;text-decoration:none;">
										<table border="0" cellpadding="0" cellspacing="0" width="100%" >
											<tr height="74" valign="center" >
												<td valign="bottom" >
													<a href="<?php print $base_url; ?>/home" title="<?php print t('Home'); ?>" rel="home" id="logo">
														<img src="<?php print $base_url . '/'. path_to_theme();?>/newsletter/images/logo-footer-newsletter.png" alt="<?php print t('Home'); ?>" />
												</a>
												</td>
												<td valign="bottom" >
													<a href="#"><?php print $private_area_link; ?></a>
												</td>
												<td valign="bottom" >
													<a href="#"><?php print $privacy_policy_link; ?></a>
												</td>
												<td valign="bottom" align="right">
													<a href="tel:34922626540">+34 922 626 540</a><br /><br />
													<a href="#"><?php print $contact_link; ?></a>
												</td>                  
											</tr>
											<tr height="30" >
												<td colspan="4" >&nbsp;</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
						<td height="100%" width="28" bgcolor="#fff" >&nbsp;</td>
					</tr>
					<tr>
						<td width="658" height="12" colspan="3" style="height:12px;line-height:12px;" ><img src="<?php print $base_url . '/'. path_to_theme();?>/newsletter/images/bottom_shadow_newsletter.png" /></td>
					</tr>
					<tr>
						<td width="658" height="40" align="right" valign="center" colspan="3" >
							<a href="http://www.nivaria.com" title="Nivaria"><img src="<?php print $base_url . '/'. path_to_theme();?>/newsletter/images/project-by-nivaria-sgrey.png" alt="Nivaria" /></a>
						</td>                  
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>