<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
require_once "../assets/sendgrid-php/sendgrid-php.php";

$id = isset($_GET['id'])?$_GET['id']:null;
if (empty($id)) {
	die('The ID is required!');
}

// updating
mysqli_query($link, "UPDATE registration SET status = 'paid' WHERE id = ".$id);
// selecting
$result = mysqli_query($link, "SELECT * FROM registration WHERE id = ".$id);
if (!mysqli_num_rows($result)) {
  die('This booking is not found!');
}

$row = mysqli_fetch_assoc($result);

mysqli_close($link);

$body_content = '<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }
      
      .logo {
        width: 200px;
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: center; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 800;
        line-height: 1;
        margin: 0;
        margin-bottom: 10px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>

<body class="">
    <table role="presentation" style="margin: 0 auto;width:600px;" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="center">
                      <a href="#"><img class="logo" src="https://crm.tops.co.th/durian2019-register/assets/img/durianfest-logo.png" /></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>To redeem a buffet ticket(s), please show your confirmation code at the event\'s ticket redemption counter.</p>
						<p>กรุณาแสดงรหัสนี้ต่อพนักงานที่จุดลงทะเบียนด้านหน้าทางเข้าโซนบุฟเฟ่ต์เพื่อแลกรับบัตรบุฟเฟ่ต์ก่อนเข้างาน</p>
						<p class="align-center"><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https%3A%2F%2Fcrm.tops.co.th%2Fdurian2019-register%2Fattended.php%3Fbooking%3D'.strtoupper($row['bu']).'-'.strtoupper($row['empid']).'&choe=UTF-8" /></p>
            <p>Confirmation Code: <strong>'.strtoupper($row['bu']).'-'.strtoupper($row['empid']).'</strong></p>
            <p>วันจันทร์ที่ 22 เมย 2562 / Monday 22<sup>nd</sup> April, 2019<br>'.($row['round']=='56'?'&#9745;':'&#9744;').' 17:00 - 18:00 น. / 5 PM - 6 PM<br>'.($row['round']=='78'?'&#9745;':'&#9744;').' 19:00 - 20:00 น. / 7 PM - 8 PM</p>
            <br>
            <br>
						<p>Any inquiries, please contact customer service of Central Food Hall and Tops Tel. 092-825-3440</p>
						<p>หากพบปัญหาหรือสอบถามเพิ่มเติม กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์ โทร. 092-825-3440</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

			 <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์</span>
                    <br>โทร. 092-825-3440</a>.
                  </td>
                </tr>
                <tr>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
';

$email = new SendGrid\Mail\Mail();
$email->setFrom("cusserv@tops.co.th", "Tops Event");
$email->setSubject("Your payment has been received for Durian and Fruit Buffet at The Original Thailand's Amazing Durian and Fruit Fest 2019.");
$email->addTo($row['email'], ""); // SEND TO
$email->addContent("text/html", $body_content);
$sendgrid = new \SendGrid('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');

try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    // print_r($response->headers());
    // print $response->body() . "\n";
} catch (Exception $e) {
    die('Caught exception: '. $e->getMessage() ."\n");
}