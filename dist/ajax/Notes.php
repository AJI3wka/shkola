<?php

namespace Amocrm\Notes;

class Notes {
	public function getNotes($path, $params, $authData) {
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/notes/list?type=lead&note_type=4&element_id='.$params['id'];
		$curl=curl_init();
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_USERAGENT,'Helixmedia-AmoCRM-Client/1.0');
		curl_setopt($curl,CURLOPT_URL,$link);
		curl_setopt($curl,CURLOPT_HEADER,false);
		curl_setopt($curl,CURLOPT_COOKIEFILE,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_COOKIEJAR,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
		$out=curl_exec($curl);
		$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
		curl_close($curl);
		return($out);
	}
	public function setNote($path, $params, $authData) {
		$insertQuery['request']['notes']['add'][0] =
			array(
				"element_id" => $params['deal_id'],
				"element_type" => 2,
				"note_type" => 4,
				"date_create" => time(),
				"last_modified" => time(),
				"text" => $params['comment'],
				"responsible_user_id" => $authData['amocrm']['user_id']
			);
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/notes/set';
		$curl=curl_init();
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_USERAGENT,'Helixmedia-AmoCRM-Client/1.0');
		curl_setopt($curl,CURLOPT_URL,$link);
		curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
		curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($insertQuery));
		curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
		curl_setopt($curl,CURLOPT_HEADER,false);
		curl_setopt($curl,CURLOPT_COOKIEFILE,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_COOKIEJAR,$path.'amocrm_cookie.txt');
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
		$out=curl_exec($curl);
		$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
		curl_close($curl);
		return(json_decode($out,1));
	}
}
