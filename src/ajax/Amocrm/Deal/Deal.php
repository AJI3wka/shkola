<?php

namespace Amocrm\Deal;

class Deal {
	public function setDeal($path, $params, $authData) {
		$insertQuery['request']['leads']['add'][0] =
			array(
				"name" => $params['deal_name'],
				"date_create" => time(),
				"last_modified" => time(),
				"status_id" => $params['deal_status'],
				/* "price":300000, */
				"responsible_user_id" => "1791550",
				"custom_fields" => 
					array(
						array(
							"id" => "1954181",
							"name" =>  "field",
							"values" =>
								array(
									array(
								  		"value" => $params['utm_source']
									)
								)
						),
						array(
							"id" => "1954183",
							"name" =>  "field",
							"values" =>
								array(
									array(
								  		"value" => $params['utm_medium']
									)
								)
						),
						array(
							"id" => "1954185",
							"name" =>  "field",
							"values" =>
								array(
									array(
								  		"value" => $params['utm_campaign']
									)
								)
						),
						array(
							"id" => "1954187",
							"name" =>  "field",
							"values" =>
								array(
									array(
								  		"value" => $params['utm_term']
									)
								)
						),
                  array(
                      "id" => "1963996",
                      "name" =>  "field",
                      "values" =>
                          array(
                              array(
                                  "value" => $params['ga_cid']
                              )
                          )
                  ),
                  array(
                      "id" => "1963994",
                      "name" =>  "field",
                      "values" =>
                          array(
                              array(
                                  "value" => $params['utm_content']
                              )
                          )
                  )
				  	)
			);
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/leads/set';
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

	public function updateDeal($path, $params, $authData) {
		$insertQuery['request']['leads']['update'][] =
		array(
			"id" => $params['deal_id'],
			"name" => $params['deal_name'],
			"last_modified" => time(),
			"status_id" => $params['deal_status'],
			"responsible_user_id" => "1791550"/*,
			"price" => $params['price']*/
		);
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/leads/set';
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

    public function getDealByField($path, $params, $authData) {
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/leads/list?query='.$params['search'];
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

    public function getDeal($path, $params, $authData) {
		$link='https://'.$authData['amocrm']['subdomain'].'.amocrm.ru/private/api/v2/json/leads/list?id='.$params['id'];
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
}