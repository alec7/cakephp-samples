<?php
App::uses('AppController', 'Controller');

class SamplesController extends AppController {

	public $uses = array();

	public function index() {
	}

	public function view($userId = null) {
		return [
			'User' => [
				'id' => $userId,
				'name' => 'Florian'
			]
		];
	}
}