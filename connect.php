<?php

	$firstname = $_POST['first-name'];
	$lastname = $_POST['last-name'];
	$address = $_POST['address'];
	$phone = $_POST['phone-number'];
	$serial_no = $_POST['serial-number'];
    $hsn_code = $_POST['hsn-code'];
	$mode = $_POST['mode'];
	$finance_name = $_POST['financeName'];
	$finance_scheme = $_POST['finance-scheme'];
	$down_payment = $_POST['down-payment'];
    $brand_name = $_POST['brandName'];
	$model_name = $_POST['modelName'];
	$color = $_POST['color'];
	$imei = $_POST['imei'];
	$quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
	$disc = $_POST['discount'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','add_more');
    
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer_info(firstname, lastname, address, phone) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $firstname, $lastname, $address, $phone);
        $execval = $stmt->execute();
        $stmt1 = $conn->prepare("insert into info(serial_no, hsn_code, mode, finance_name,finance_scheme,down_payment) values(?, ?, ?, ?, ?, ?)");
		$stmt1->bind_param("iisssi", $serial_no, $hsn_code, $mode, $finance_name,$finance_scheme,$down_payment);
        $execval1 = $stmt1->execute();
        $stmt2 = $conn->prepare("insert into product_info(brand_name, model_name,color, imei,quantity,rate, disc) values(?, ?, ?, ?,?,?,?)");
		$stmt2->bind_param("ssssiii", $brand_name, $model_name, $color, $imei,$quantity,$rate,$disc);
       
    
        $execval2 = $stmt2->execute();
		echo $execval;
        echo $execval1;
        echo $execval2;
		echo "Registration successfully...";
		$stmt->close();
        $stmt1->close();
        $stmt2->close();
		$conn->close();
	}
?>