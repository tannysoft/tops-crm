<?php
require('database.php');
if(!empty($_POST['bookingbu']) || !empty($_POST['bookingempid']) || !empty($_FILES['file']['name']))
{
    $booking = strtoupper($_POST['bookingbu']).'-'.strtoupper($_POST['bookingempid']);

    // mysql connecting
    $connection = mysqli_connect($db[$active]['hostname'], $db[$active]['username'], $db[$active]['password'], $db[$active]['database']);
    // check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    list($bu, $empid) = explode('-', $booking);
    if(empty($bu) || empty($empid)) {
      die('The booking number is required!');
    }

    $found = mysqli_query($connection, "SELECT * FROM registration WHERE bu = '".$bu."' AND empid = '".$empid."'");

    if(!mysqli_num_rows($found)){
        echo "0,ขออภัย! ไม่พบหมายเลขการจอง<br>Booking ID not found.";
    }else{

        $uploadedFile = '';

        if(!empty($_FILES["file"]["type"])){
            $fileName = time().'_'.$_FILES['file']['name'];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = "uploads/".$fileName;
                if(move_uploaded_file($sourcePath,$targetPath)){
                    $uploadedFile = $fileName;
                }else{
                    echo "0,Contact system administrator.";
                }
                // save
                $query = "UPDATE registration SET slip = '".$uploadedFile."', status = 'waiting' WHERE bu = '".$bu."' AND empid = '".$empid."'";

                if($result = mysqli_query($connection, $query)){
                    echo "1,Success";
                }else{
                    echo "0,Contact system administrator.";
                }
            } else {
                echo "0,ขออภัย! กรุณาอัพโหลดสกุล png หรือ jpg/jpeg<br>Please upload file with png or jpg/jpeg extension.";
            }
        } else {
            echo "0,ขออภัย! กรุณากรอกข้อมูลให้ครบทุกช่อง<br>Please enter all data fields.";
        }
    }
    mysqli_close($connection);
}else{
    echo "0,ขออภัย! กรุณากรอกข้อมูลให้ครบทุกช่อง<br>Please enter all data fields.";
}
?>