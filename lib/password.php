<?php

function hashPassword($originalPassword){

	$encObj = new Encrypt();

	$password = 1;

	for($i = 0; $i < strlen($originalPassword); $i++)
		$password.= ord($originalPassword[$i]);

	
	$password = $encObj->enc($password);


	return $password;

}




function enc($password){

	$hashedPassword = "";

	for ($i=0; $i < strlen($password); $i++) {

		
		//change 0-9, E, minus, plus and dot.


		if($password[$i]=='E') $hashedPassword .= "ʴ";

		elseif($password[$i]=='-') $hashedPassword .= "ʩ";

		elseif($password[$i]=='+') $hashedPassword .= "ɛ";

		elseif($password[$i]=='.') $hashedPassword .= "ʚ";

		elseif($password[$i]=='0') $hashedPassword .= "ʥ";
		elseif($password[$i]=='1') $hashedPassword .= "ʄ";
		elseif($password[$i]=='2') $hashedPassword .= "ʝ";
		elseif($password[$i]=='3') $hashedPassword .= "ɾ";
		elseif($password[$i]=='4') $hashedPassword .= "ɕ";
		elseif($password[$i]=='5') $hashedPassword .= "ɂ";
		elseif($password[$i]=='6') $hashedPassword .= "ɰ";
		elseif($password[$i]=='7') $hashedPassword .= "ʬ";
		elseif($password[$i]=='8') $hashedPassword .= "ȹ";
		elseif($password[$i]=='9') $hashedPassword .= "ʁ";
		else $hashedPassword .= $password[$i];

	
	}

	return $hashedPassword;


}