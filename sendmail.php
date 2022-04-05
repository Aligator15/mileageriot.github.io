<?php
if($_POST['formname'] == 'get_quote'){
	if($_POST['gq-location'] != '' && $_POST['gq-person'] != '' && $_POST['gq-destination'] != '' && $_POST['gq-contact'] != '' && $_POST['gq-text'] != ''){
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$headers .= 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" . // $_POST["name"] - Имя пользователя < $_POST['email']
		'Reply-To: ' . $_POST["email"] . "\r\n" .
		'X-Mailer: PHP/' . phpversion(); // Версия php
		
		$subject = 'New mail from Trans Aero'; // Название темы
		$message = '<b>Name:</b> '.$_POST["gq-person"].'<br>
		<b>Contact:</b> '.$_POST["gq-contact"].'<br>
		<b>Location:</b> '.$_POST["gq-location"].'<br>
		<b>Destination:</b> '.$_POST["gq-destination"].'<br>
		<b>Message:</b> '.$_POST["gq-text"]; 
		// Сообщение отправки ^
		
		mail( "nik.sharikov15@gmail.com", $subject, $message, $headers ); //  Замените на свой адрес электронной почты
		
		echo '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Ваше сообщение было отправлено!
			</div>';
		
	}else{
				
		echo '<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Все поля, как требуется!
			</div>';
	}
}elseif($_POST['formname'] == 'contact'){
	if($_POST['contact-name'] != '' && $_POST['contact-email'] != '' && $_POST['contact-phone'] != '' && $_POST['contact-site'] != '' && $_POST['contact-message'] != ''){
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$headers .= 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" . // $_POST["name"] - Имя пользователя < $_POST['email']
		'Reply-To: ' . $_POST["email"] . "\r\n" .
		'X-Mailer: PHP/' . phpversion(); // Версия php
		
		$subject = 'New mail from Trans Aero'; // Название темы
		$message = '<b>Name:</b> '.$_POST["contact-name"].'<br>
		<b>E-mail:</b> '.$_POST["contact-email"].'<br>
		<b>Phone:</b> '.$_POST["contact-phone"].'<br>
		<b>Website:</b> '.$_POST["contact-site"].'<br>
		<b>Message:</b> '.$_POST["contact-message"];
		// Сообщение отправки ^
		mail( "mik.sharikov15@gmail.com", $subject, $message, $headers ); //  Замените на свой адрес электронной почты
		
		echo '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Ваше сообщение было отправлено!
			</div>';
		
	}else{
				
		echo '<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Все поля, как требуется!
			</div>';
	}
}
?>