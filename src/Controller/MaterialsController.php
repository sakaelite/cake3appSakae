<?php
namespace App\Controller;

use App\Controller\AppController;
use \SplFileObject;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
/**
 * Materials Controller
 *
 * @property \App\Model\Table\MaterialsTable $Materials
 *
 * @method \App\Model\Entity\Material[] paginate($object = null, array $settings = [])
 */
class MaterialsController extends AppController
{

     public function initialize()
     {
        parent::initialize();     
         $this->MaterialSuppliers = TableRegistry::get('material_suppliers');
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
     
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MaterialSuppliers']
        ];
        $materials = $this->paginate($this->Materials);

        $this->set(compact('materials'));
        $this->set('_serialize', ['materials']);
    }

    /**
     * View method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => ['MaterialSuppliers', 'Products']
        ]);

        $this->set('material', $material);
        $this->set('_serialize', ['material']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $material = $this->Materials->newEntity();
        if ($this->request->is('post')) {
            $material = $this->Materials->patchEntity($material, $this->request->getData());
            if ($this->Materials->save($material)) {
                $this->Flash->success(__('The material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material could not be saved. Please, try again.'));
        }

        $arrMaterialSuppliers = $this->MaterialSuppliers->find('all')->order(['supplier_code' => 'ASC']);
        $arrSupplier = array();
        foreach ($arrMaterialSuppliers as $value) {
            $arrSupplier[] = array($value->id=>$value->name);
        }

        $this->set('arrSupplier',$arrSupplier);
        $this->set(compact('material', 'materialSuppliers'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $material = $this->Materials->patchEntity($material, $this->request->getData());
            if ($this->Materials->save($material)) {
                $this->Flash->success(__('The material has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The material could not be saved. Please, try again.'));
        }
        $materialSuppliers = $this->Materials->MaterialSuppliers->find('list', ['limit' => 200]);
        $this->set(compact('material', 'materialSuppliers'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Material id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $material = $this->Materials->get($id);
        if ($this->Materials->delete($material)) {
            $this->Flash->success(__('The material has been deleted.'));
        } else {
            $this->Flash->error(__('The material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
