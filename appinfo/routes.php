<?php
/**
 * ownCloud - Office App
 *
 * @author Victor Dubiniuk
 * @copyright 2013 Victor Dubiniuk victor.dubiniuk@gmail.com
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

$this->create('office_genesis', 'ajax/genesis/{es_id}')
	->post()
	->action('\OCA\Office\Controller', 'serve')
;
$this->create('office_genesis', 'ajax/genesis/{es_id}')
	->get()
	->action('\OCA\Office\Controller', 'serve')
;

$this->create('office_session_start', 'ajax/session/start')
	->get()
	->action('\OCA\Office\Controller', 'startSession')
;
$this->create('office_session_start', 'ajax/session/start')
	->post()
	->action('\OCA\Office\Controller', 'startSession')
;

$this->create('office_session_join', 'ajax/session/join/{es_id}')
	->get()
	->action('\OCA\Office\Controller', 'joinSession')
;
$this->create('office_session_join', 'ajax/session/join/{es_id}')
	->post()
	->action('\OCA\Office\Controller', 'joinSession')
;