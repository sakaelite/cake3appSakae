<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ProductsController extends AppController {
	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$imgObj  = array(
							'ShinkiTourokuMenu/touroku_seihin.gif'=>'Products',
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
		$data = $this->Products->find('all');
		$this->set('data',$data);
	}
	
	public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the product.'));
        }
	}
}