$(document).ready(function() {
	$("#register").click(function() {
		// var name = $("#name").val();
		// var email = $("#email").val();
		// var password = $("#password").val();
		// var cpassword = $("#cpassword").val();
		// if (name == '' || email == '' || password == '' || cpassword == '') {
		// 	alert("Please fill all fields...!!!!!!");
		// } else if ((password.length) < 8) {
		// 	alert("Password should atleast 8 character in length...!!!!!!");
		// } else if (!(password).match(cpassword)) {
		// 	alert("Your passwords don't match. Try again?");
		// } else {

		var name = $("#name").val();
		var bu = $("#bu").val();
		var employeeid = $("#employeeid").val();
		var seat = $("#seat").val();
		var round = $("input[name=round]:checked").val();
		var phone = $("#phone").val();
		var email = $("#email").val();

		$("#name").removeClass('is-invalid');
		$("#bu").removeClass('is-invalid');
		$("#employeeid").removeClass('is-invalid');
		$("#seat").removeClass('is-invalid');
		$("#phone").removeClass('is-invalid');
		$("#email").removeClass('is-invalid');

		var register = {
			name1: name,
			bu1: bu,
			employeeid1: employeeid,
			seat1: seat,
			round1: round,
			phone1: phone,
			email1: email
		};

		if (name == "") $("#name").addClass('is-invalid');
		if (bu == "") $("#bu").addClass('is-invalid');
		if (employeeid == "") $("#employeeid").addClass('is-invalid');
		if (phone == "") $("#phone").addClass('is-invalid');
		if (email == "") $("#email").addClass('is-invalid');

		if(seat >= 1 && seat <= 2){
			// disable while submit data
			$('#register').prop('disabled', true);
			$.post("register.php", register, function(data) {
				if(data != null){
					var splited = new Array();
					splited = data.split(",");
					if(splited[0] == 0){
						// $('#result').html(splited[1]);
						Swal.fire({
							type: 'warning',
							html: splited[1]
						});
		 			}else if(splited[0] == 1){
		 				var booked_seat = splited[1];
		 				var booked_id = splited[2];
		 				var bu = splited[3];
		 				var price = (booked_seat * 419);
		 				Swal.fire({
							title: '<strong>Successfully Booked</strong>',
							type: 'success',
							html: [
								'Booking ID ของคุณคือ: '+bu.toUpperCase()+'-'+booked_id.toUpperCase()+'<br>',
			 					'คุณได้ทำการจองที่นั่งจำนวน '+seat+' ที่นั่ง<br>',
			 					'จำนวนเงินที่ต้องชำระ: '+price+' THB<br>',
			 					'กรุณาเช็คอีเมล์ที่ท่านลงทะเบียนไว้เพื่อดูเงื่อนไขการชำระเงิน<br><br>',
			 					'Your booking ID: '+bu.toUpperCase()+'-'+booked_id.toUpperCase()+'<br>',
			 					'You have reserved '+seat+' seat(s)<br>',
			 					'Your total payment: '+price+' THB<br>',
			 					'Please check your registered email for payment conditions.'
		 					].join('')
						});
						$('#registration').trigger('reset');
		 				// $('#result').html(html.join(''));
		 			}
		 			// $('#result-modal').modal('show');
				}
				$('#register').prop('disabled', false);
			});
		}else{
			$("#seat").addClass('is-invalid');	
		}
	});

    $("#submitBill").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'file_upload.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitSlip').prepend('<i class="fa fa-spinner fa-spin"></i> ').attr("disabled","disabled");
            },
            success: function(msg){
                $('.statusMsg').html('');
	                var splited = new Array();
					splited = msg.split(",");
	                if(splited[0] == '1'){
	                    $('#submitBill')[0].reset();
	                    //$('.result').html('Slip Summit Successfully<hr>');
	                    Swal.fire({
							title: '<strong>Slip Upload Successfully</strong>',
							type: 'success'
						});
	                }else{
	                    //$('.result').html(splited[1]+'<hr>');
	                    Swal.fire({
							type: 'warning',
							html: splited[1]
						});
	                }
                $(".submitSlip").removeAttr("disabled").find('i').remove();
            }
        });
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#file").val('');
            return false;
        }
    });

});






