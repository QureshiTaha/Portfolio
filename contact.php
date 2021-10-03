<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

// echo $name;
// echo $email;
// echo $subject;

if ($name == '' || $email == '' || $subject == '') {
echo "Something Went Wrong";
}else{
	echo"success";
	header("Location: http://localhost/portfolio/iPortfolio/iPortfolio/success.html");
}

 ?>