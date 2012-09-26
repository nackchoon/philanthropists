<?php

if(isset($_POST['email'])){
		error_reporting(0);	
		$errorC = false;
	
		$the_blogname   = $_POST['myblogname'];
		$the_myemail 	= base64_decode($_POST['tempcode']);
		$the_email 		= $_POST['email'];
		$the_name 		= $_POST['yourname'];
		$the_message 	= $_POST['message'];

		$the_phone 		= $_POST['phone'];
		$the_fax 		= $_POST['fax'];
		$the_company 	= $_POST['company'];
		$the_website 	= $_POST['website'];
		
		# want to add aditional fields? just add them to the form in template_contact.php,
		# you dont have to edit this file
		
		//added fields that are not set explicit like the once above are combined and added before the actual message
		$already_used = array('email','yourname','message','phone','fax','company','website','myblogname','tempcode','temp_url','ajax');
		$attach = '';
		
		foreach ($_POST as $key => $field)
		{
			if(!in_array($key,$already_used))
			{
				$attach.= $key.": ".$field."<br /> \n";
			}
		}
		$attach.= "<br /> \n";
		
		if(!checkmymail($the_email))
		{
			$errorC = true;
			$the_emailclass = "error";
		}else{
			$the_emailclass = "valid";
			}
		
		if($the_message == "")
		{
			$errorC = true;
			$the_messageclass = "error";
		}else{
			$the_messageclass = "valid";
			}
		
		if($errorC == false)
		{ 	
			$to      =  $the_myemail;
			$subject = "New Message from " . $the_blogname;
			$header  = 'MIME-Version: 1.0' . "\r\n";
			$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header .= 'From:'. $the_email  . " \r\n";
		
			$message1 = nl2br($the_message);

			if(!empty($the_name)) 		$the_name 		= "성함:  	$the_name <br/>";
			if(!empty($the_company)) 	$the_company 	= "소속: $the_company <br/>";
			if(!empty($the_phone)) 		$the_phone 		= "전화번호:   $the_phone <br/>";
			if(!empty($the_fax)) 		$the_fax 		= "팩스:  	$the_fax <br/>";
			if(!empty($the_website)) 	$the_website 	= "웹사이트: $the_website <br/>";
			
			$message = "
			The Philanthropists 웹사이트에서 새로운 이메일이 도착했습니다: <br/>
			$the_name
			$the_company
			$the_phone
			$the_website
			
			$attach <br />
			
			Message: $message1 <br />";
			
		
			
			if(@mail($to,$subject,$message,$header)) $send = true; else $send = false;
			
			if(isset($_POST['ajax'])){
				
			if ($send)
			echo '<h3>이메일이 전송되었습니다!</h3><div class="confirm">
					<p class="textconfirm">연락주셔서 감사합니다.<br/>빠른 시일 내에 답장 해 드리겠습니다..</p>
				  </div>';
			else
			echo '<h3>에러</h3><div class="confirm">
					<p class="texterror">메일 전송이 실패하였습니다.</p>
				  </div>'; 
				
			}
		}
		
}
	
	
function checkmymail($mailadresse){
	$email_flag=preg_match("!^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$!",$mailadresse);
	return $email_flag;
}

?>