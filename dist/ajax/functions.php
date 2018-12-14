<?php

	function amocrm($actionType, $actionData){
		$path = $_SERVER['DOCUMENT_ROOT'].'/vendor/Amocrm/';
		$authData['amocrm']['api_key'] 	= 'f8dce1040562f7542c4f509289de6cde';
		$authData['amocrm']['api_mail'] 	= 'tim-2000@mail.ru';
		$authData['amocrm']['subdomain'] = 'proekty';
		$authData['amocrm']['user_id'] 	= '1207923';
		if(strlen($actionData['referer'])>0){
			$actionData['referer'] = base64_decode($actionData['referer']);
			$checkUrl = parse_url($actionData['referer']);
			if(substr($checkUrl['host'],0,11) == "www.google."){
				$searchEngine = 'Google';
				$searchType = 'Поисковые системы';
				$query = explode('&', $checkUrl['query']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,2) == "q="){
						$queryString = urldecode(str_replace('q=','',$thisQ));
					}
				}
			}elseif((substr($checkUrl['host'],0,7) == "yandex.") or (substr($checkUrl['host'],0,11) == "www.yandex.")){
				$searchEngine = 'Yandex';
				$searchType = 'Поисковые системы';
				$query = explode('&', $checkUrl['query']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,5) == "text="){
						$queryString = urldecode(str_replace('text=','',$thisQ));
					}
				}
			}elseif($checkUrl['host'] == "go.mail.ru"){
				$searchEngine = 'Поиск@Mail.Ru';
				$searchType = 'Поисковые системы';
				$query = explode('&', $checkUrl['query']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,2) == "q="){
						$queryString = urldecode(str_replace('q=','',$thisQ));
					}
				}
			}elseif($checkUrl['host'] == "nova.rambler.ru"){
				$searchEngine = 'Рамблер';
				$searchType = 'Поисковые системы';
				$query = explode('?', $checkUrl['query']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,6) == "query="){
						$queryStringPre = urldecode(str_replace('query=','',$thisQ));
						if(substr_count($queryStringPre,'&')>0){
							$qrStrip = explode('&', $queryStringPre);
							$queryString = $qrStrip[0];
						}else{
							$queryString = $queryStringPre;
						}
					}
				}
			}elseif($checkUrl['host'] == "search.yahoo.com"){
				$searchEngine = 'Yahoo!';
				$searchType = 'Поисковые системы';
				$query = explode('?', $actionData['referer']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,2) == "p="){
						$queryStringPre = urldecode(str_replace('p=','',$thisQ));
						if(substr_count($queryStringPre,'&')>0){
							$qrStrip = explode('&', $queryStringPre);
							$queryString = $qrStrip[0];
						}else{
							$queryString = $queryStringPre;
						}
					}
				}
			}elseif($checkUrl['host'] == "www.bing.com"){
				$searchEngine = 'Bing';
				$searchType = 'Поисковые системы';
				$query = explode('?', $checkUrl['query']);
				foreach($query as $thisQ){
					if(substr($thisQ,0,2) == "q="){
						$queryStringPre = urldecode(str_replace('q=','',$thisQ));
						if(substr_count($queryStringPre,'&')>0){
							$qrStrip = explode('&', $queryStringPre);
							$queryString = $qrStrip[0];
						}else{
							$queryString = $queryStringPre;
						}
					}
				}
			}elseif(($checkUrl['host'] == "vk.com") or ($checkUrl['host'] == "away.vk.com")){
				$searchEngine = 'VK';
				$searchType = 'referal';
			}elseif($checkUrl['host'] == "l.instagram.com"){
				$searchEngine = 'Instagram';
				$searchType = 'referal';
			}elseif($checkUrl['host'] == "ok.ru"){
				$searchEngine = 'Одноклассники';
				$searchType = 'referal';
			}elseif(($checkUrl['host'] == "facebook.com") or ($checkUrl['host'] == "www.facebook.com")){
				$searchEngine = 'Facebook';
				$searchType = 'referal';
			}
		}
		require($path.'Auth/Auth.php');
		$amoauth = new \Amocrm\Auth\Auth();
		$amoauth->plainAuth($path, $authData);
		sleep(1);
		$phonechk = preg_replace('/[^0-9]/', '', $actionData['phone']);
		if(substr($phonechk,0,1) == "8"){
			$phonev1 = substr($phonechk,1);
			$cleaned = 'true';
		}elseif(substr($phonechk,0,1) == "7"){
			$phonev1 = substr($phonechk,1);
			$cleaned = 'true';
		}elseif(strlen($phonechk) == 10){
			$phonev1 = $phonechk;
			$cleaned = 'true';
		}else{
			$phonev1 = $phonechk;
			$cleaned = 'false';
		}
		if(isset($actionData['context'])){
			// if(($actionData['context'] == 1) or ($actionData['context'] == 97)){
			// 	$formCaption = 'Бесплатное занятие';
			// }elseif($actionData['context'] == 27){
			// 	$formCaption = 'Подарок';
			// }elseif($actionData['context'] == 46){
			// 	$formCaption = 'Заказать звонок';
			// }elseif($actionData['context'] == 74){
			// 	$formCaption = 'Цены';
			// }elseif($actionData['context'] == 84){
			// 	$formCaption = 'Неизвестный контекст';
			// }elseif($actionData['context'] == "219"){
			// 	$formCaption = 'Курс «Технология пошива»';
			// }elseif($actionData['context'] == "220"){
			// 	$formCaption = 'Курс «Конструирование и моделирование изделий»';
			// }elseif($actionData['context'] == "221"){
			// 	$formCaption = 'Индивидуальное обучение';
			// }elseif($actionData['context'] == "222"){
			// 	$formCaption = 'Мастер-класс «Юбка»';
			// }elseif($actionData['context'] == "223"){
			// 	$formCaption = 'Мастер-класс «Брюки»';
			// }elseif($actionData['context'] == "224"){
			// 	$formCaption = 'Мастер-класс «Платье»';
			// }elseif($actionData['context'] == "225"){
			// 	$formCaption = 'Мастер-класс «Жакет на подкладке»';
			// }
			$formCaption = $actionData['context'];
		}
		require($path.'Contact/Contact.php');
		$amocontact = new \Amocrm\Contact\Contact();
		$amocheckcnt = $amocontact->getContact($path, str_replace(array('(', ')', '-', ' '), '', $phonev1), $authData);
		if(isset($amocheckcnt['response']['contacts'][0]['id'])){
			/*
				Getting leads list
			*/
			sleep(1);
			require($path.'Deal/Deal.php');
			$amodeal = new \Amocrm\Deal\Deal();
			$dealsList = json_decode($amodeal->getDealByField($path, array('search' => $phonev1), $authData),1);
			if(isset($dealsList['response']['leads'][0]['last_modified'])){
				/*
					Setting note for repeating orders
				*/
				sleep(1);
				require($path.'Notes/Notes.php');
				$amonote = new \Amocrm\Notes\Notes();
				$noteData['deal_id'] = $dealsList['response']['leads'][0]['id'];
				$noteData['comment'] = 'Повторная заявка; ';
				if(strlen($actionData['context'])>0){
					$noteData['comment'] .= 'Контекст: '.$formCaption;
				}
				$newNote = $amonote->setNote($path, $noteData, $authData);
				if((($dealsList['response']['leads'][0]['last_modified']+1800) < time()) or // 86400
					((($dealsList['response']['leads'][0]['last_modified']+1800) > time()) and ($dealsList['response']['leads'][0]['status_id'] != "14442964"))){
					/*
						Updating existing lead
					*/
					sleep(1);
					$dealData['deal_id'] = $dealsList['response']['leads'][0]['id'];
					$dealData['deal_name'] = 'Курсы шитья';
					if(isset($formCaption)){
						$dealData['deal_name'] .= ', '.$formCaption;
					}
					$dealData['deal_status'] = '14442964';
					$newDeal = $amodeal->updateDeal($path, $dealData, $authData);
					/*
						Setting new task
					*/
					sleep(1);
					require($path.'Tasks/Tasks.php');
					$amotask = new \Amocrm\Tasks\Tasks();
					$dealData['lead'] = $dealsList['response']['leads'][0]['id'];
					$dealData['text'] = 'Связаться с клиентом';
					$newTask = $amotask->insertTask($path, $dealData, $authData);
				}
			}else{
				# No deals on this contact, creating new one
				/*
					Setting new lead
				*/
				sleep(1);
				if(isset($searchEngine)){
					$dealData['source'] = $searchEngine;
				}elseif(strlen($actionData['referer'])>1){
					$dealData['source'] = $actionData['referer'];
					$searchType = 'referal';
				}
				if(isset($actionData['ga_cid'])) {
               $dealData['ga_cid'] = $actionData['ga_cid'];
            } else {
               $dealData['ga_cid'] = "Нет данных";
            }
				$dealData['deal_name'] = 'Курсы шитья';
				if(isset($formCaption)){
					$dealData['deal_name'] .= ', '.$formCaption;
				}
				$dealData['deal_status'] = '14442964';
				$utm = json_decode(urldecode($actionData['ga_utm']),true);
				if(isset($utm['utm_source'])){
					$dealData['utm_source'] = $utm['utm_source'];
				}else{
					if(isset($searchEngine)){
						$dealData['utm_source'] = $searchEngine;
					}elseif(strlen($actionData['referer'])>1){
						$dealData['utm_source'] = $actionData['referer'];
					}else{
						$dealData['utm_source'] = 'Прямой заход';
					}
				}
				if(isset($utm['utm_medium'])){
					$dealData['utm_medium'] = $utm['utm_medium'];
				}else{
					if(isset($searchType)){
						$dealData['utm_medium'] = $searchType;
					}else{
						$dealData['utm_medium'] = ' ';
					}
				}
				if(isset($utm['utm_campaign'])){
					$dealData['utm_campaign'] = $utm['utm_campaign'];
				}else{
					$dealData['utm_campaign'] = ' ';
				}
				if(isset($utm['utm_term'])){
					$dealData['utm_term'] = $utm['utm_term'];
				}else{
					if(isset($queryString)){
						$dealData['utm_term'] = $queryString;
					}else{
						$dealData['utm_term'] = ' ';
					}
				}
				if(isset($utm['utm_content'])){
					$dealData['utm_content'] = $utm['utm_content'];
				}else{
					$dealData['utm_content'] = ' ';
				}

				$newDeal = $amodeal->setDeal($path, $dealData, $authData);
				/*
					Setting note with context definition
				*/
				sleep(1);
				require($path.'Notes/Notes.php');
				$amonote = new \Amocrm\Notes\Notes();
				$noteData['deal_id'] = $newDeal['response']['leads']['add'][0]['id'];
				$noteData['comment'] = 'Контекст: '.$formCaption;
				$newNote = $amonote->setNote($path, $noteData, $authData);
				/*
					Updating contact
				*/
				sleep(1);
				$contactData['id'] = $amocheckcnt['response']['contacts'][0]['id'];
				$contactData['lead'] = $newDeal['response']['leads']['add'][0]['id'];
				$conto = $amocontact->updateContact($path, $contactData, $authData);
				/*
					Setting new task
				*/
				sleep(1);
				require($path.'Tasks/Tasks.php');
				$amotask = new \Amocrm\Tasks\Tasks();
				$dealData['lead'] = $newDeal['response']['leads']['add'][0]['id'];
				$dealData['text'] = 'Связаться с клиентом';
				$newTask = $amotask->insertTask($path, $dealData, $authData);
			}
		}else{
			# Contact with given phone number does not exist
			sleep(1);
			/*
				Setting new lead
			*/
			require($path.'Deal/Deal.php');
			$amodeal = new \Amocrm\Deal\Deal();
         if(isset($actionData['ga_cid'])) {
             $dealData['ga_cid'] = $actionData['ga_cid'];
         } else {
             $dealData['ga_cid'] = "Нет данных";
         }
			$dealData['deal_name'] = 'Курсы шитья';
			if(isset($formCaption)){
				$dealData['deal_name'] .= ', '.$formCaption;
			}
			$dealData['deal_status'] = '14442964';
			$utm = json_decode(urldecode($actionData['ga_utm']),true);
			if(isset($utm['utm_source'])){
				$dealData['utm_source'] = $utm['utm_source'];
			}else{
				if(isset($searchEngine)){
					$dealData['utm_source'] = $searchEngine;
				}elseif(strlen($actionData['referer'])>1){
					$dealData['utm_source'] = $actionData['referer'];
					$searchType = 'referal';
				}else{
					$dealData['utm_source'] = 'Прямой заход';
				}
			}
			if(isset($utm['utm_medium'])){
				$dealData['utm_medium'] = $utm['utm_medium'];
			}else{
				if(isset($searchType)){
					$dealData['utm_medium'] = $searchType;
				}else{
					$dealData['utm_medium'] = ' ';
				}
			}
			if(isset($utm['utm_campaign'])){
				$dealData['utm_campaign'] = $utm['utm_campaign'];
			}else{
				$dealData['utm_campaign'] = ' ';
			}
			if(isset($utm['utm_term'])){
				$dealData['utm_term'] = $utm['utm_term'];
			}else{
				if(isset($queryString)){
					$dealData['utm_term'] = $queryString;
				}else{
					$dealData['utm_term'] = ' ';
				}
			}
			if(isset($utm['utm_content'])){
				$dealData['utm_content'] = $utm['utm_content'];
			}else{
				$dealData['utm_content'] = ' ';
			}
			
			$newDeal = $amodeal->setDeal($path, $dealData, $authData);
			/*
				Setting new contact
			*/
			sleep(1);
			$contactData['name'] = htmlspecialchars(strip_tags($actionData['name']));
			if($cleaned == "true"){
				$contactData['phone'] = '8'.$phonev1;
			}else{
				$contactData['phone'] = $phonev1;
			}
			$contactData['lead'] = $newDeal['response']['leads']['add'][0]['id'];
			$amocontact->insertContact($path, $contactData, $authData);
			/*
				Setting new task
			*/
			sleep(1);
			require($path.'Tasks/Tasks.php');
			$amotask = new \Amocrm\Tasks\Tasks();
			$dealData['lead'] = $newDeal['response']['leads']['add'][0]['id'];
			$dealData['text'] = 'Связаться с клиентом';
			$newTask = $amotask->insertTask($path, $dealData, $authData);
			if(strlen($actionData['context'])>0){
				if(isset($formCaption)){
					sleep(1);
					require($path.'Notes/Notes.php');
					$amonote = new \Amocrm\Notes\Notes();
					$noteData['deal_id'] = $newDeal['response']['leads']['add'][0]['id'];
					$noteData['comment'] = 'Контекст: '.$formCaption;
					$newNote = $amonote->setNote($path, $noteData, $authData);
				}
			}
		}
		return true;
	}