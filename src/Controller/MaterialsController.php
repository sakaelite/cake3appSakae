<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MaterialsController extends AppController {
	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$imgObj  = array(
							'ShinkiTourokuMenu/touroku_seihin.gif'=>'Materials',
							'ShinkiTourokuMenu/touroku_genryou.gif'=>'Materials',
							'ShinkiTourokuMenu/konpou_irisu.gif'=>'Konpous',
							'ShinkiTourokuMenu/touroku_supplier.gif'=>'外注登録',
							'ShinkiTourokuMenu/yobidashi_seihin.gif'=>'製品呼出',
							'ShinkiTourokuMenu/shinki_tanka.gif'=>'単価登録',
							'ShinkiTourokuMenu/TourokuNyuSyukko.gif'=>'組立品登録',
							'ShinkiTourokuMenu/TourokuCustomer.gif'=>'顧客登録',
							'ShinkiTourokuMenu/SyoumouCoTouroku.gif'=>'消耗品業者登録',
							'1.gif'=>' ',
							'2.gif'=>' ',
							'3.gif'=>' '
						);
		$this->set('imgObj',$imgObj);
   }

	public function index(){
		$data = $this->Materials->find('all');
		$this->set('data',$data);
	}
	
	public function add()
    {
        $material = $this->Materials->newEntity();
        if ($this->request->is('post')) {
            $material = $this->Materials->patchEntity($material, $this->request->getData());
            if ($this->Materials->save($material)) {
                $this->Flash->success(__('The material has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the material.'));
        }
	}
}