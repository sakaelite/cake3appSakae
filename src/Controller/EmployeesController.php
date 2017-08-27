<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MaterialSuppliersController extends AppController {

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        
    }

     public function index()
     {
        $this->set('data', $this->MaterialSuppliers->find('all'));
    }

    public function view($id)
    {
        $material_supplier = $this->MaterialSuppliers->get($id);
        $this->set(compact('material_supplier'));
    }

    public function add()
    {
        $material_supplier = $this->MaterialSuppliers->newEntity();
        if ($this->request->is('post')) {
            $material_supplier = $this->MaterialSuppliers->patchEntity($material_supplier, $this->request->getData());
            if ($this->MaterialSuppliers->save($material_supplier)) {
                $this->Flash->success(__('The material_supplier has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the material_supplier.'));
        }
        $this->set('material_supplier', $material_supplier);
    }
}