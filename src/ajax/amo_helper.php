<?php 

if(strlen(@$_SERVER['HTTP_REFERER'])>0){
	$referer = parse_url($_SERVER['HTTP_REFERER']);
	if($referer['host'] != "kursy-shitya.ru"){
		setcookie('shityo_referer', base64_encode($_SERVER['HTTP_REFERER']));
	}
}
if((isset($_GET['gclid'])) or (isset($_GET['utm_source'])) or (isset($_GET['utm_medium'])) or (isset($_GET['utm_campaign'])) or (isset($_GET['utm_term'])) or (isset($_GET['utm_content']))){
	if(isset($_GET['gclid'])){
		$clidStr['gclid'] = $_GET['gclid'];
	}
	if(isset($_GET['utm_source'])){
		$clidStr['utm_source'] = $_GET['utm_source'];
	}
	if(isset($_GET['utm_medium'])){
		$clidStr['utm_medium'] = $_GET['utm_medium'];
	}
	if(isset($_GET['utm_campaign'])){
		$clidStr['utm_campaign'] = $_GET['utm_campaign'];
	}
	if(isset($_GET['utm_term'])){
		$clidStr['utm_term'] = $_GET['utm_term'];
	}
	if(isset($_GET['utm_content'])){
		$clidStr['utm_content'] = $_GET['utm_content'];
	}
	setcookie('shityo_utm', json_encode($clidStr));
}

?>