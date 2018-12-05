<?php

namespace Amocrm\Auth;

class Auth {
	public function plainAuth($path, $authData) {
		$user=array(
			 'USER_LOGIN' => $authData['amocrm']['api_mail'],
			 'USER_HASH' => $authData['amocrm']['api_key']
		);
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/auth.php?type=json';
		$curl=curl_init();
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_USERAGENT,'Helixmedia-AmoCRM-Client/1.0');
		curl_setopt($curl,CURLOPT_URL,$link);
		curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
		curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($user));
		curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
		curl_setopt($curl,CURLOPT_HEADER,false);
		curl_setopt($curl,CURLOPT_COOKIEFILE,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_COOKIEJAR,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
		$out=curl_exec($curl);
		$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
		curl_close($curl);
		return($code);
	}
}
