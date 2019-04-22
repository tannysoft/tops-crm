<?php
	require('database.php');
	require("assets/sendgrid-php/sendgrid-php.php");

	// mysql connecting
	$connection = mysqli_connect($db[$active]['hostname'], $db[$active]['username'], $db[$active]['password'], $db[$active]['database']);
	// check connection
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	$name=$_POST['name1'];
	$email=$_POST['email1'];
	$bu=$_POST['bu1']; 
	$empid=$_POST['employeeid1'];
	$seat=$_POST['seat1']; 
	$round=$_POST['round1'];
	$tel=$_POST['phone1'];

	$max_seat = 200;
	$max_seat_round_56 = 100;
	$max_seat_round_78 = 100;
	$paid_seat = 0;
	$paid_seat_round_56 = 0;
	$paid_seat_round_78 = 0;
	$emp_exsit = false;

	$query_emp_exsit = "SELECT email FROM registration WHERE email = '".$email."'";

	$res_u = mysqli_query($connection, $query_emp_exsit);
	if (mysqli_num_rows($res_u) > 0) {
  	  $emp_exsit = true; 	
  	}

  	// for all
	if($result = mysqli_query($connection, "SELECT seat FROM registration WHERE status = 'paid'")){
		while ($row = mysqli_fetch_assoc($result)) {
			$paid_seat += $row['seat'];
		}
	}
	// for round 56
	if ($round == '56') {
		if($result = mysqli_query($connection, "SELECT SUM(seat) AS seat FROM registration WHERE round = '56' AND status = 'paid'")){
			$row = mysqli_fetch_assoc($result);
			$paid_seat_round_56 = $row['seat'];
		}
		if ($paid_seat_round_56 + $seat > $max_seat_round_56) die("0,All seat is full now!. Please try again or select other round.");
	}
	// for round 78
	if ($round == '78') {
		if($result = mysqli_query($connection, "SELECT SUM(seat) AS seat FROM registration WHERE round = '78' AND status = 'paid'")){
			$row = mysqli_fetch_assoc($result);
			$paid_seat_round_78 = $row['seat'];
		}
		if ($paid_seat_round_78 + $seat > $max_seat_round_78) die("0,All seat is full now!. Please try again or select other round.");
	}

	if($name != null && $email != null && $bu != null && $empid != null && $seat != null && $tel != null && $round != null){
		$bu = strtoupper($bu);
		$empid = strtoupper($empid);
		if(!$emp_exsit){
			if( ($paid_seat+$seat) <= $max_seat){

				$sql = "INSERT INTO registration(name, email, bu, empid, seat, round, tel) VALUES ('$name', '$email', '$bu' , '$empid' , '$seat' , '$round' , '$tel')";

				if( mysqli_query($connection,$sql) ){ //success
					//$last_id = mysqli_insert_id($connection);
					echo '1,'.$seat.','.$empid.','.$bu;
					sendEmailRegistration($email,$seat,$empid,$bu);
				}else{
					echo "0,Please contact system administrator.";
					//print_r(mysqli_error($connection));
				}
			}else{
				echo "0,ขออภัยรอบที่คุณเลือกถูกจองเต็มแล้ว กรุณาเลือกรอบอื่น<br>All seat is full. Please try again to select other round.";
			}
		}else{
			echo "0,อีเมล์นี้ได้ถูกลงทะเบียนแล้ว กรุณาลองอีกครั้ง!<br>The employee email has been taken. Please try again!";
		}
	}else{
		echo "0,ขออภัย! กรุณากรอกข้อมูลให้ครบทุกช่อง<br>Please enter all data fields.";
	}

	mysqli_close($connection);


	function sendEmailRegistration($cus_email,$seat, $empid, $bu){


		$body_content = '

		<!doctype html>
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
		                        <h2>เงื่อนไขการชำระเงิน</h2>
		                        <h5>(English version below)</h5>

								<p style="font-size: 1.2rem;">&bull; คุณได้ทำการจองที่นั่งจำนวน: '.$seat.' ที่นั่ง</p>
								<p style="font-size: 1.2rem;">&bull; รวมเป็นเงินทั้งสิ้น: '.($seat*419).' บาท</p>
								<p style="font-size: 1.2rem;">&bull; หมายเลขการจอง: '.strtoupper($bu).'-'.strtoupper($empid).'</p>
								<p>กรุณาชำระเงินภายใน 48 ชม. หลังจากการจองที่นั่งผ่านเลขที่บัญชีนี้:</p>

								<table border="1" style="border-collapse: collapse; border: 1px solid black; width: auto;">
								<colgroup>
								<col style="width: 162px">
								<col style="width: 179px">
								<col style="width: 171px">
								</colgroup>
								  <tr>
								    <th>ธนาคาร</th>
								    <th>ชื่อบัญชี</th>
								    <th>หมายเลขบัญชี</th>
								  </tr>
								  <tr>
								    <td align="center"><img width="50" height="50" src="https://www.isranews.org/images/thumbnails/images/2018/thaireform/08/scb2408-fill-500x500.jpg"><br>ธนาคารไทยพาณิชย์</td>
								    <td align="center">บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด</td>
								    <td align="center"><span style="font-weight:bold">060-2-37722-7</span></td>
								  </tr>
								</table>

								<br>
								<p>กรุณาส่งสลิปการโอนเงิน พร้อมแจ้งหมายเลขการจองที่:</p>
		                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
		                          <tbody>
		                            <tr>
		                              <td align="left">
		                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
		                                  <tbody>
		                                    <tr>
		                                      <td> <a href="https://crm.tops.co.th/durian2019-register/payment.php" target="_blank">ส่งสลิปการโอนเงิน</a> </td>
		                                    </tr>
		                                  </tbody>
		                                </table>
		                              </td>
		                            </tr>
		                          </tbody>
		                        </table>
		                        <p>ระบบจะทำการตอบกลับเพื่อยืนยันสิทธิ์ของท่านภายใน 2 ชม.</p>
								<p>หากพบปัญหาหรือสอบถามเพิ่มเติม กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์ โทร. 092-825-3440</p>
		                      </td>
		                    </tr>
		                  </table>
		                </td>
		              </tr>

		            <!-- END MAIN CONTENT AREA -->
		            </table>

		            <!-- English -->
		           <table role="presentation" class="main" style="margin-top: 15px;">
		              <tr>
		                <td class="wrapper">
		                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

		                    <tr>
		                      <td>
		                        <h2 style="margin-bottom: 20px;">Payment condition</h2>

								<p style="font-size: 1.2rem;">&bull; You have reserved: '.$seat.' seat(s)</p>
								<p style="font-size: 1.2rem;">&bull; You total payment: '.($seat*419).' Baht</p>
								<p style="font-size: 1.2rem;">&bull; Booking No.: '.strtoupper($bu).'-'.strtoupper($empid).'</p>
								<p>Please make a payment within 48 hrs. after reservation through the bank account</p>

								<table border="1" style="border-collapse: collapse; border: 1px solid black; width: auto;">
								<colgroup>
								<col style="width: 162px">
								<col style="width: 179px">
								<col style="width: 171px">
								</colgroup>
								  <tr>
								    <th>Bank</th>
								    <th>Bank Account</th>
								    <th>Account No.</th>
								  </tr>
								  <tr>
								    <td align="center"><img width="50" height="50" src="https://www.isranews.org/images/thumbnails/images/2018/thaireform/08/scb2408-fill-500x500.jpg"><br>Siam Commercial Bank</td>
								    <td align="center">บริษัท เซ็นทรัล ฟู้ด รีเทล จำกัด</td>
								    <td align="center"><span style="font-weight:bold">060-2-37722-7</span></td>
								  </tr>
								</table>

								<br>
								<p>Subimit your payment slip and reservation no. below:</p>
		                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
		                          <tbody>
		                            <tr>
		                              <td align="left">
		                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
		                                  <tbody>
		                                    <tr>
		                                      <td> <a href="https://crm.tops.co.th/durian2019-register/payment.php" target="_blank">Submit Payment Slip</a> </td>
		                                    </tr>
		                                  </tbody>
		                                </table>
		                              </td>
		                            </tr>
		                          </tbody>
		                        </table>
		                        <p>The system will respond to your confirmation within 2 hrs.</p>
								<p>If you encounter problems, please contact customer service of Central Food Hall and Tops Tel. 092-825-3440</p>
		                      </td>
		                    </tr>
		                  </table>
		                </td>
		              </tr>

		                  </table>
		                </td>
		              </tr>

		            <!-- END MAIN CONTENT AREA -->
		            </table>
		            <!-- END CENTERED WHITE CONTAINER -->
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
		$email->setSubject("Your reservation for Durian and Fruit Buffet at The Original Thailand's Amazing Durian and Fruit Fest 2019 has been submitted.");
		$email->addTo($cus_email, ""); // SEND TO
		$email->addContent("text/html", $body_content);
		$sendgrid = new \SendGrid('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');

		try {
		    $response = $sendgrid->send($email);
		    // print $response->statusCode() . "\n";
		    // print_r($response->headers());
		    // print $response->body() . "\n";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}
	}

?>