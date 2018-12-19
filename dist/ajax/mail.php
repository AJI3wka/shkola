<?php
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
if((strlen($name)>0) and (strlen($phone)>0)){
	
	$frm = htmlspecialchars($_POST['frmid']);

	$utm_source = htmlspecialchars($_POST['utm_source']);
	$utm_medium = htmlspecialchars($_POST['utm_medium']); 
	$utm_campaign = htmlspecialchars($_POST['utm_campaign']);
	$utm_term = htmlspecialchars($_POST['utm_term']);
	$source_type = htmlspecialchars($_POST['source_type']);
	$source = htmlspecialchars($_POST['source']);
	$position_type = htmlspecialchars($_POST['position_type']);
	$position = htmlspecialchars($_POST['position']);
	$added = htmlspecialchars($_POST['added']);
	$creative = htmlspecialchars($_POST['creative']);
	$matchtype = htmlspecialchars($_POST['matchtype']);
	$location = htmlspecialchars($_POST['location']);
	$url = htmlspecialchars($_POST['url']);
	$title = htmlspecialchars($_POST['title']);

	$subject = 'Заявка '.$title.', новый сайт';	

	//$headers= "From: noreply <noreply@noreply.ru>\r\n";
	//$headers.= "Reply-To: noreply <noreply@noreply.ru>\r\n";
	$headers= "X-Mailer: PHP/" . phpversion()."\r\n";
	$headers.= "MIME-Version: 1.0" . "\r\n";
	$headers.= "Content-type: text/plain; charset=utf-8\r\n";

	$to = "info@shkola-shitya52.ru";


	$message = "Форма: $frm\n\n";
	$message .= "Имя: $name\n";
	$message .= "Телефон: $phone\n\n";
	$message .= "Источник: $utm_source\n";
	$message .= "Тип источника: $utm_medium\n";
	$message .= "Кампания: $utm_campaign\n";
	$message .= "Ключевое слово: $utm_term\n";
	$message .= "Тип площадки(поиск или контекст): $source_type\n";
	$message .= "Площадка: $source\n";
	$message .= "Спецразмещение или гарантия: $position_type\n";
	$message .= "Позиция объявления в блоке: $position\n";
	$message .= "Показ по дополнительным ролевантным фразам: $added\n";
	$message .= "Идентификатор объявления: $creative\n";
	$message .= "Тип соответствия ключа(e-точное/p-фразовое/b-широкое): $matchtype\n\n";
	$message .= "Гео-положение отправителя: $location\n\n";
	$message .= "Ссылка на сайт: $url\n";
	$message .= "Заголовок: $title\n\n";

	mail ($to,$subject,$message,$headers); 

	 $to = "";
	 mail ($to,$subject,$message,$headers);
	?>



	// if(isset($_POST['referer'])){
	// 	$clientReferer = htmlspecialchars(urldecode($_POST['referer']));
	// }else{
	// }
	$clientReferer = htmlspecialchars($_COOKIE['shityo_referer']);	
	$clientGaID = str_replace('GA1.2.', '', $_COOKIE['_ga']);
	if(isset($_COOKIE['shityo_utm'])){

		$clientGaUTM = $_COOKIE['shityo_utm'];
	}else{
		$clientGaUTM = '';
	}
	// filter
	$phone = preg_replace("/[^+0-9]+/", "", $phone);
	// amocrm
		require ('Amocrm/functions.php');
		$dealData = array(
			'name' => $name,
			'phone' => $phone,
			'context' => $frm,
			'referer' => $clientReferer,
	      	'ga_cid' => $clientGaID,
	      	'ga_utm' => $clientGaUTM
	  );
	amocrm('setDeal', $dealData);
}


?>