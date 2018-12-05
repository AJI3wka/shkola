<?php 
	namespace Amocrm\Contact; class Contact {
		public function insertContact($path, $params, $authData) {
			$insertQuery['request']['contacts']['add'][] = array (
				"name" => $params['name'],
				"date_create" => time(),
				"responsible_user_id" => $authData['amocrm']['user_id'],
				"linked_leads_id" => $params['lead'],
				"custom_fields" =>
					array(
						array(
							"id" => "1673344",
							"values" =>
							array (
								array (
									"value" => $params['phone'],
									"enum" => "3955660"
								)
							)
						)
					)
			);
			$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/contacts/set';
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
		public function getContact($path, $query, $authData) {
			$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/contacts/list?query='.urlencode($query);
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
			return(json_decode($out,1));
		}
		public function updateContact($path, $params, $authData) {
			$insertQuery['request']['contacts']['update'][] = array (
				"id" => $params['id'],
				"last_modified" => time(),
				"linked_leads_id" => $params['lead'],
			);
			$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/contacts/set';
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
