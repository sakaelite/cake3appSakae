<?php
namespace App\Controller;

use App\Controller\AppController;
use \SplFileObject;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
/**
 * MaterialSuppliers Controller
 *
 * @property \App\Model\Table\MaterialSuppliersTable $MaterialSuppliers
 *
 * @method \App\Model\Entity\MaterialSupplier[] paginate($object = null, array $settings = [])
 */
class MaterialSuppliersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public function initialize()
     {
        parent::initialize();     
         $this->Employees = TableRegistry::get('employees');
         
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
     
    public function index()
    {
        $materialSuppliers = $this->paginate($this->MaterialSuppliers);

        $this->set(compact('materialSuppliers'));
        $this->set('_serialize', ['materialSuppliers']);
    }

    /**
     * View method
     *
     * @param string|null $id Material Supplier id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialSupplier = $this->MaterialSuppliers->get($id, [
            'contain' => ['Materials']
        ]);

        $this->set('materialSupplier', $materialSupplier);
        $this->set('_serialize', ['materialSupplier']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialSupplier = $this->MaterialSuppliers->newEntity();
        if ($this->request->is('post')) {
            $materialSupplier = $this->MaterialSuppliers->patchEntity($materialSupplier, $this->request->getData());
            if ($this->MaterialSuppliers->save($materialSupplier)) {
                $this->Flash->success(__('The material supplier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material supplier could not be saved. Please, try again.'));
        }
        
        $this->set(compact('materialSupplier'));
        $this->set('_serialize', ['materialSupplier']);
    }

    public function addImportCsv()
    {
        $materialSuppliersTable = TableRegistry::get('MaterialSuppliers');
        $materialSupplier = $materialSuppliersTable->newEntity();
        //$filepath = $_FILES['file']['tmp_name'];
        if(!empty($_FILES['file']['tmp_name'])){
            $file = new SplFileObject($_FILES['file']['tmp_name']); 
            $file->setFlags(SplFileObject::READ_CSV);
        
            // 全行のINSERTデータ格納用
            $ins_values = "";
            // ファイル内のデータループ
            $count = 0;
            foreach ( $file as $key => $line ) {
                // 配列の値がすべて空か判定
                $judge = count(array_count_values($line));
                if( $judge == 0 ){
                    // 配列の値がすべて空の時の処理
                    continue;
                }
                
                $materialSuppliersTable = TableRegistry::get('MaterialSuppliers');
                $materialSupplier = $materialSuppliersTable->newEntity();
                $i = 0;
                foreach ( $line as $line_key => $str ) {
                    if( $i == 0 ){
                        $materialSupplier->supplier_code = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i == 1 ){
                        $materialSupplier->name = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i == 2 ){
                        $materialSupplier->handy_code = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i ==3 ){
                        $materialSupplier->address = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i ==4 ){
                        $materialSupplier->tel = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i ==5 ){
                        $materialSupplier->fax = mb_convert_encoding($str, "UTF-8", "auto");
                    }elseif( $i ==6 ){
                        $materialSupplier->charge_p = mb_convert_encoding($str, "UTF-8", "auto");
                    }
                    $i++;
                }
                if ($materialSuppliersTable->save($materialSupplier)) {
                    // $article エンティティーは今や id を持っています
                    //$id = $materialSupplier->id;
                }
                $count ++;
            }
            }
        $this->set(compact('materialSupplier'));
        $this->set('_serialize', ['materialSupplier']);        
    }

    /**
     * Edit method
     *
     * @param string|null $id Material Supplier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialSupplier = $this->MaterialSuppliers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialSupplier = $this->MaterialSuppliers->patchEntity($materialSupplier, $this->request->getData());
            if ($this->MaterialSuppliers->save($materialSupplier)) {
                $this->Flash->success(__('The material supplier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material supplier could not be saved. Please, try again.'));
        }
        $this->set(compact('materialSupplier'));
        $this->set('_serialize', ['materialSupplier']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Material Supplier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialSupplier = $this->MaterialSuppliers->get($id);
        if ($this->MaterialSuppliers->delete($materialSupplier)) {
            $this->Flash->success(__('The material supplier has been deleted.'));
        } else {
            $this->Flash->error(__('The material supplier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
