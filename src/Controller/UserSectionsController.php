<?php
namespace App\Controller;

use App\Controller\AppController;

class UserSectionsController extends AppController{

	public function index(){
		$data = $this->UserSections->find('all');
		$this->set('data',$data);
	}
	
	public function add(){
		if($this->request->is('post')){
			$user_section = $this->UserSections->newEntity();
			$user_section = $this->UserSections->patchEntity($user_section,$this->request->data);
			
			if($this->UserSections->save($user_section)){
				return $this->redirect(['action' => 'index']);
			}
			
		}
	}
}