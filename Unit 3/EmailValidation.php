<?php
// Check if 'product' and 'features' are received via POST

    $email=$_POST['email'];
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "email is valid";
	}
	else{
		echo "email is not validate";
	}

?>
