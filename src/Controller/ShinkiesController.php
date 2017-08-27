<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ShinkiesController extends AppController {

    public function index()
    {
		$imgSubObj  = array(
							'ShinkiTourokuMenu/touroku_seihin.gif'=>'Products',
							'ShinkiTourokuMenu/touroku_genryou.gif'=>'Materials',
							'ShinkiTourokuMenu/konpou_irisu.gif'=>'Konpous',
							'ShinkiTourokuMenu/touroku_supplier.gif'=>'外注登録',
							'ShinkiTourokuMenu/yobidashi_seihin.gif'=>'製品呼出',
							'ShinkiTourokuMenu/shinki_tanka.gif'=>'単価登録',
							'ShinkiTourokuMenu/TourokuNyuSyukko.gif'=>'組立品登録',
							'ShinkiTourokuMenu/TourokuCustomer.gif'=>'顧客登録',
							'ShinkiTourokuMenu/SyoumouCoTouroku.gif'=>'消耗品業者登録',
							'1'=>'MaterialSuppliers',
							'2.gif'=>' ',
							'3.gif'=>' '
						);
		$this->set('imgSubObj',$imgSubObj);
    }
}