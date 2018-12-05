<?php 
	namespace Amocrm\Tasks;
	
	class Tasks {
		public function insertTask($path, $params, $authData) {
			$insertQuery['request']['tasks']['add'][] = array (
				"element_id" => $params['lead'],
				"element_type" => 2,
	            "task_type" => 689184,
				"date_create" => time(),
				"responsible_user_id" => "1791550",
				"created_user_id" => $authData['amocrm']['user_id'],
				"status" => 0,
				"text" => $params['text'],
				"complete_till" => (strtotime('tomorrow')-1)
			);
			$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/tasks/set';
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
