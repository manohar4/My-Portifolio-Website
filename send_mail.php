<?php

$name = "jbsadj";
$email = "manoharmanu4444@gmail.com";
$phone = "8790357714";
$address = "8790357714";
$remarks = "8790357714";

// multiple recipients
$to  = 'manoharmanu4444@gmail.com' . ', '; // note the comma
$to .= 'manoharmanu4444@gmail.com';

// subject
$subject = 'Contact Us Web Email for Incture Pvt. Ltd. ';

// message
$message = "
<html>
<head>
<title>Incture Pvt. Ltd. Email</title>
<style type='text/css'>
@media only screen and (max-width: 480px) {
  table {
    display: block !important;
    width: 100% !important;
  }
  
  td {
    width: 480px !important;
  }
}
</style>

</head>
<body style='background-color:#F6F6F6;font-family: 'Malgun Gothic', Arial, sans-serif; margin: 0; padding: 0; width: 100%; -webkit-text-size-adjust: none; -webkit-font-smoothing: antialiased;'>
  <table width='100%' bgcolor='#F6F6F6' border='0' cellspacing='0' cellpadding='0' id='background' style='height: 100% !important; margin: 0; padding: 0; width: 100% !important;'>
    <tr>
      <td align='center' valign='top'>
        <br><table width='600' border='0' bgcolor='#FFF' cellspacing='0' cellpadding='20' id='preheader'>
          <tr>
            <td valign='top'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td valign='top' width='600'>
                    
                  </td>
                </tr>
                <tr>
                  <td valign='top' width='600'>
                    <div class='logo'>
                      <a href='#' style='color: #f89406; font-size: 18px; font-weight: bold; text-align: left; text-decoration: none;'>Hansa Marble and Granite Pvt. Ltd.</a>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <!-- // END #preheader -->

        <table width='600' border='0' bgcolor='#FFFFFF' cellspacing='0' cellpadding='0' id='header_container'>
          <tr>
            <td align='center' valign='top'>
              <table width='100%' border='0' bgcolor='#f89406' cellspacing='0' cellpadding='0' id='header'>
                <tr>
                  <td valign='top' class='header_content'>
                    <h1 style='color: #F4F4F4; font-size: 24px; text-align: center;'>CONTACT US</h1>
                  </td>
                </tr>
              </table>
              <!-- // END #header -->
            </td>
          </tr>
        </table>
        <!-- // END #header_container -->

        <table width='600' border='0' bgcolor='#FFF' cellspacing='0' cellpadding='20' id='body_container'>
          <tr>
            <td align='center' valign='top' class='body_content'>
              <table width='100%' border='0' cellspacing='0' cellpadding='20'>
                <tr>
                  <td valign='top'>
                    <h2 style='color: #514f4e; font-size: 16px;'>Hi Hansa Marble and Granite Pvt. Ltd. ,</h2>
                    <p style='color: #514f4e; font-size: 14px; line-height: 22px;'>".$remarks."</p>
					
                    <p style='color: #514f4e; font-size: 14px; line-height: 0px;'><strong>Regards</strong></p>
                    <p style='color: #514f4e; font-size: 14px;'>".$name." <br> <a href='mailto:".$email."' style='color:#f89406; text-decoration:none;'> ".$email."</a>.</p>
                    <p style='color: #514f4e; font-size: 14px;>".$address."</p>
                  </td>
                </tr>
                <tr>
                  <td align='center'>
                    <div>
    </td>
  </tr>
</table><br>
</td>
  </tr>
</table>
<!-- // END #background -->
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: '.$name.' <'.$email.'>, '.$name.' <'.$email.'>' . "\r\n";
$headers .= 'From: Incture Pvt. Ltd.' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
header('Location: index.html');
?>