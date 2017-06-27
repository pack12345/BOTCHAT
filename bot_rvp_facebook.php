<?php
error_log('facebook hook ');
 
   $access_token = 'EAABvD2ZBmpBkBABrNtokuXXzUwmi9Spy0S96l6ZBkXHk06OZBVTs9X0ZBIBcDKRbunSNiy2qdVowyaDfGnKtsL97Vkff8IxQfwRmVyq6TAKtMZBTIskN5XNZBBSZCXJIpkVnyypVeqAdANKe6aqdNjMQBnIyKsRipoEoUNuL87Ehp3lNVchGVNp';
   $verify_token = 'rvp_cxp_poc';
   $hub_verify_token = null;
 
   if(isset($_REQUEST['hub_challenge'])) {
     	$challenge = $_REQUEST['hub_challenge'];
    	$hub_verify_token = $_REQUEST['hub_verify_token'];
   }
 
  error_log('hub_verify_token  '. $hub_verify_token );
   if ($hub_verify_token === $verify_token) {
     	error_log('challenge '.$challenge);
   }

$input = json_decode(file_get_contents('php://input'), true);
error_log('input '.$input);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
error_log('sender '.$sender);
$message = $input['entry'][0]['messaging'][0]['message']['text'];
error_log('message '.$message);

 $cxpUrl = 'http://58.82.133.74:8070/VoxeoCXP/DialogMapping?VSN=testService@System&message='.$message.'&vsDriver=164&channel=facebookrvp&sessionID=EAABvD2ZBmpBkBAOhgmbcNhW024y';
 					
 	error_log($cxpUrl);
 	$chcxp = curl_init($cxpUrl);
 
 	curl_setopt($chcxp, CURLOPT_CUSTOMREQUEST, "GET");
 	curl_setopt($chcxp, CURLOPT_RETURNTRANSFER, true);
 	curl_setopt($chcxp, CURLOPT_FOLLOWLOCATION, 1);
 	$xcpResult = curl_exec($chcxp);
 	curl_close($chcxp);
 	error_log('cxp '.$chcxp);
 

 	//API Url
 	$url = 'https://graph.facebook.com/v2.6/me/messages';
 	$message_to_reply = $xcpResult;
 	error_log('url reply'.$url);
 	//Initiate cURL.
 	$ch = curl_init($url);
 
 // check if
  	$messages = '';

	 if(substr($message_to_reply,0,27)=='  https://www.mx7.com/i/bbb'){
  		
  			error_log('pic');
  			$messages=[
  				'attachment' =>['type' => 'template',
 						'payload' => ['template_type' => 'generic',
 							      	'elements' => [
 										 [
 											'title' => 'Today - 30 Jun 17',
 											'image_url'=> 'https://www.mx7.com/i/bbb/G5xC6I.png',
 											'subtitle' => 'Everyday Special,Get Cash Back Up to 17%,4% cash back for other K-Credit Cards',
 											'buttons' => [
 												['type' => 'web_url',
 												'title' => 'More information',
 												'url' => 'https://www.kasikornbank.com/EN/promotion/Pages/Supermarket.aspx'
 												]
 											]
 										]
  									]
 							      
 							      ]
  						]
  				];
 	}else if(substr($message_to_reply,0,27)=='  https://www.mx7.com/i/b7b'){
  			error_log('pic');
  			$messages=[
  				'attachment' =>['type' => 'template',
 						'payload' => ['template_type' => 'generic',
 								'elements' => [
 										 [
 											'title' => 'Shori Sushi House',
 											'image_url'=> 'https://www.mx7.com/i/b7b/CQ6y5K.png',
 											'subtitle' => 'Opening Hours: 11:00 – 23:00',
 											'buttons' => [
 												['type' => 'web_url',
 												'title' => 'Location',
 												'url' => 'https://goo.gl/maps/jxgfN1aXYzR2'
 												],
 												[
 												  'type' => 'phone_number',
 												  'title' => 'Call',
 												  'payload' => '+662-169-1532'
 											       ]
 											]
 										]
  									]
 							      
 							      ]
 
  						]
  				];
 	}else if(substr($message_to_reply,0,27)=='  https://www.mx7.com/i/bde'){
 		error_log('pic');
 		$messages=[
 			'attachment' =>['type' => 'template',
 					'payload' => ['template_type' => 'generic',
 						      		'elements' => [
 										[
 											'title' => 'Hakone Bangkok',
 											'image_url'=> 'https://www.mx7.com/i/bde/2oPh6u.png',
 											'subtitle' => 'Opening Hours: 10:00 – 22:00',
 											'buttons' => [
 												['type' => 'web_url',
 												'title' => 'Location',
 												'url' => 'https://goo.gl/maps/EJQUDLLtugE2'
 												],
 												[
 												  'type' => 'phone_number',
 												  'title' => 'Call',
 												  'payload' => '+662-108-2790'
 											       ]
 											]
 										]
 									]
 						      
 						      ]
 					]
				];
	}else if(substr($message_to_reply,0,27)=='  https://www.mx7.com/i/1f1'){
 	error_log('pic');
 	$messages=[
 		'attachment' =>['type' => 'template',
 				'payload' => ['template_type' => 'generic',
 					      	'elements' => [
 								 [
 									'title' => 'Yoshino Yama',
 									'image_url'=> 'https://www.mx7.com/i/1f1/79drKy.png',
 									'subtitle' => 'Opening Hours: 17:00 – 01:00',
 									'buttons' => [
 										['type' => 'web_url',
 										'title' => 'Location',
 										'url' => 'https://goo.gl/maps/FgVPc8yddDo'
 										],
 										[
 										  'type' => 'phone_number',
 										  'title' => 'Call',
 										  'payload' => '+662-259-2582'
 									       ]
 									]
 								]
 							]
 					      
 					      ]
 				]
 		];
 	}else if(substr($message_to_reply,0,27)=='  https://www.skyscanner.ne'){
 	error_log('pic');
 	$messages=[
 		'attachment' =>['type' => 'template',
 				'payload' => ['template_type' => 'generic',
 					      	'elements' => [
 								 [
 									'title' => 'Skyscanner Flights',
 									'subtitle' => 'Skyscanner compares millions of flights to find you the cheapest deal, fast.',
 									'buttons' => [
 										['type' => 'web_url',
 										'title' => 'Check It',
 										'url' => 'https://www.skyscanner.net/'
 										]
 									]
 								]
 							]
 					      
 					      ]
 				]
 		];
 	}else if(substr($message_to_reply,0,27)=='  https://www.hotelscombine'){
 	error_log('pic');
 	$messages=[
 		'attachment' =>['type' => 'template',
 				'payload' => ['template_type' => 'generic',
 					      	'elements' => [
 								 [
 									'title' => 'Hotels Combined',
 									'buttons' => [
 										['type' => 'web_url',
 										'title' => 'Check It',
 										'subtitle' => 'The best hotel deals from all the top travel sites. Guaranteed',
 										'url' => 'https://www.hotelscombined.co.th'
 										]
 									]
 								]
 							]
 					      
 					      ]
 				]
 		];
 						
  	}else{	
 		$messages = [
 			'text' => $message_to_reply
  		];
  	}
 
 error_log('before response');
 //The JSON data.
 	$jsonData = [
 	    'access_token'=>$access_token,
 	    'recipient'=>[
 		'id'=> $sender
 	      ],
 	    'message'=> $messages
 		    
 	];
 
 	//Encode the array into JSON.
 	$jsonDataEncoded = json_encode($jsonData);
 	//Tell cURL that we want to send a POST request.
 	curl_setopt($ch, CURLOPT_POST, 1);
 	//Attach our encoded JSON string to the POST fields.
 	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 	//Set the content type to application/json
 	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
 
 	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
 	//Execute the request
 	if(!empty($input['entry'][0]['messaging'][0]['message'])){
 	    $result = curl_exec($ch);
	 }
 ?>
