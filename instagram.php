<?php

class Instagram {

	private $options = [
		'access_token'=> '',

	];

	private $endpoint = "https://api.instagram.com/v1/";

	public function __construct($options =[]) 
	{
		$this->options = array_merge($this->options, $options);
	}
	private function callAPI($url){
		try{
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3 );
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

			$data = curl_exec($curl);

		} catch(Exception $e){
				throw new Exeption($e->getMessage());
			}
		return $data;
	}

	public function getRecentMedia($user_id, $limit = 1)
	{
		
		$data = $this->callAPI($this->endpoint . "users/$user_id/media/recent/?access_token=329489839.c89c3f1.37ea1e47b4484e95a07bbef4ba8b8a8c&count=$limit&");

		$json = json_decode($data);
			if($json->meta->code != 200){
				var_dump($json);
				die();
				throw new Exception($json->meta->error_message, $json->meta->code);
				
			}
		return $json->data;
	
	}
	public function getRecentInfo($user_id)
	{
		$data1 = $this->callAPI($this->endpoint . "users/$user_id/?access_token=329489839.c89c3f1.37ea1e47b4484e95a07bbef4ba8b8a8c");

		$json = json_decode($data1);
			if($json->meta->code = !200){
				var_dump($json);
				die();
				throw new Exception($json->meta->error_message, $json->meta->code);
				
			}
		return $json->data;
	}

	public function getRecentImage($user_id)
	{
		$data2 = $this->callAPI($this->endpoint . "media/1773332825022621089_329489839/?access_token=329489839.c89c3f1.37ea1e47b4484e95a07bbef4ba8b8a8c");

		$json = json_decode($data2);
			if($json->meta->code = !200){
				var_dump($json);
				die();
				throw new Exception($json->meta->error_message, $json->meta->code);
				
			}
		return $json->data;
	}
} 