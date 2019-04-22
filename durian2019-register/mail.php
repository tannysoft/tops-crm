<?php	

		require("assets/sendgrid-php/sendgrid-php.php");
		$email = new SendGrid\Mail\Mail(); 
		
		$body_content = '<p>
		Please click the link below to submit your payment slip and your Reservation No.
		กรุณาคลิกที่ลิ้งค์ เพื่อส่งสลิปการโอนเงินพร้อมแจ้งหมายเลขการจอง
		xxxxxxxxxxxxxxxxxxx
		Any inquiries, please contact customer service of Central Food Hall and Tops Tel. 092-825-3440
		หากพบปัญหาหรือสอบถามเพิ่มเติม กรุณาติดต่อ แผนกลูกค้าสัมพันธ์เซ็นทรัล ฟู้ด ฮอลล์ และ ท็อปส์ โทร. 092-825-3440
				</p>';

		$email->setFrom("cusserv@tops.co.th", "Tops Event");
		$email->setSubject("Your reservation for Durian and Fruit Buffet at The Original Thailand's Amazing Durian and Fruit Fest 2019 has been submitted.");
		$email->addTo("verzaa@gmail.com", "Example User"); // SEND TO
		$email->addContent("text/html", $body_content);
		$sendgrid = new \SendGrid('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');

		try {
		    $response = $sendgrid->send($email);
		    print $response->statusCode() . "\n";
		    print_r($response->headers());
		    print $response->body() . "\n";
		} catch (Exception $e) {
		    echo 'Caught exception: '. $e->getMessage() ."\n";
		}

?>