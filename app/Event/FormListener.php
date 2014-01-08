<?php
App::uses('CakeEventListener ', 'Event');
App::uses('Object', 'Core');

class FormListener extends Object implements CakeEventListener {

	public function implementedEvents() {
		return [
			'View.Form.someFormStart' => [
				'callable' => 'someFormStart'
			],
			'View.Form.someFormEnd' => [
				'callable' => 'someFormEnd'
			]
		];
	}

/**
 * someFormStart
 *
 * @param CakeEvent $Event
 * @return void
 */
	public function someFormStart(CakeEvent $Event) {
		$View = $Event->subject();
		$View->viewVars['user'] = $this->requestAction(
			[
				'controller' => 'samples',
				'action' => 'view',
				'1'
			]
		);
		echo $View->Form->input('nick_name');
	}

/**
 * someFormEnd
 *
 * @param CakeEvent $Event
 * @return void
 */
	public function someFormEnd(CakeEvent $Event) {
		$View = $Event->subject();
		echo $View->element('additional_fields');
	}

}