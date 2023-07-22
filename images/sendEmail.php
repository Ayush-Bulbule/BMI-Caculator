<?php 
include('admin/api/conn.php');
		$orderid = rand(1231,7879);
		$to='ppsmb1@gmail.com';
		$subject="Regarding New Order";
		$from = 'ppsmb1@gmail.com';
		$body='Hi, <br/> You Have New Order For Publication Which Details Are <br> Name : '.$_POST['name'].' <br> Mobile : '.$_POST['mobile'].' <br> Full Address '.$_POST['address'].' <br> Address 2 : '.$_POST['address2'].' <br> City : '.$_POST['city'].' <br> State : '.$_POST['state'].' <br> Pincode '.$_POST['pincode'].' 
		 Transaction Number : '.$_POST['transid'].'<br>Total AMount : '.$_POST['totalamt'].'<br> Orderid : '.$orderid.'';
		$headers = "From: " . strip_tags($from) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$email = mail($to,$subject,$body,$headers);
		/* INSERT ORDER */
		
		$getDtails = mysqli_query($conn,"Select * from cart where ipaddress='".$_POST['ipaddress']."'");
		while($res = mysqli_fetch_assoc($getDtails)){
				$insert = mysqli_query($conn,"INSERT into orders Values(0,'".$res['ipaddress']."','".$res['book_id']."','".$res['qty']."',now(),'".$orderid."')");
		}
		/* INSERT PAYMENT **/
		$trans = mysqli_query($conn,"INSERT into payment_history Values(0,'".$_POST['transid']."','".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['address']."','".$_POST['address2']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pincode']."','".$orderid."',now(),'".$_POST['totalamt']."')");
		$delete = mysqli_query($conn,"Delere from cart where ipaddress='".$_POST['ipaddress']."'");
		header('location:successorder');
?>