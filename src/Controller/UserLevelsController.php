<?php
namespace App\Controller;

use App\Controller\AppController;

class UserLevelsController extends AppController{

	public function index(){
		$data = $this->UserLevels->find('all');
		$this->set('data',$data);
	}
	
	public function add(){
		if($this->request->is('post')){
			$user_level = $this->UserLevels->newEntity();
			$user_level = $this->UserLevels->patchEntity($user_level,$this->request->data);
			
			if($this->UserLevels->save($user_level)){
				return $this->redirect(['action' => 'index']);
			}
			
		}
	}
}