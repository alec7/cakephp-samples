<?php
$this->Form->create();

$Event = new CakeEvent('View.Form.someFormStart', $this);
$this->getEventManager()->dispatch($Event);

echo $this->Form->input('name');

$Event = new CakeEvent('View.Form.someFormEnd', $this);
$this->getEventManager()->dispatch($Event);

$this->Form->submit(__('Submit'));
$this->Form->end();