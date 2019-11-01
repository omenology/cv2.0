<?php 

use GuzzleHttp\Client;

class Cv_model extends CI_Model {
	private $client;

	public function __construct(){
		$this->client = new Client([
			'base_uri' => 'http://api.ikballukmanulhakim.id/api/cv/',
			'auth' => ['enggakdong','jugaenggak']
		]);
	}

	public function getProfile(){
		$response = $this->client->request('GET','profile');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'][0];
	}

	public function getKemampuan(){
		$response = $this->client->request('GET','kemampuan');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'];
	}

	public function getPendidikan(){
		$response = $this->client->request('GET','pendidikan');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'];
	}

	public function getProject(){
		$response = $this->client->request('GET','project');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'];
	}

	public function getKontak(){
		$response = $this->client->request('GET','kontak');
		$result = json_decode($response->getBody()->getContents(),true);
		return $result['data'];
	}
}