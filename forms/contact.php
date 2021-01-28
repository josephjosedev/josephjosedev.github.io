<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sub=$_POST['sub'];
		$msg=$_POST['msg'];

		$to='varghesejosedev@gmail.com'; // Receiver Email ID, Replace with your email ID
		$message="Name :".$name."\n"."Subject :".$sub."\n"."message :".$msg."\n";
		$headers="From: ".$email;

		if(mail($to, $sub, $message, $headers)){
			echo "<h4>Sent Successfully!Thank you"." ".$name.", We will contact you shortly!</h4>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>