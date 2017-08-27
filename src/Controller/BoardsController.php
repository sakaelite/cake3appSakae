<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class BoardsController extends AppController {
	
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        
    }

	public function index(){
		$data = $this->Boards->find('all');
		$this->set('data',$data);
	}
}