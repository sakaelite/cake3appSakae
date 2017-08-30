<?php
namespace App\Controller;

use App\Controller\AppController;
use \SplFileObject;
use Cake\ORM\TableRegistry;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[] paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
        $this->set('_serialize', ['employees']);
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('employee', $employee);
        $this->set('_serialize', ['employee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set(compact('employee'));
        $this->set('_serialize', ['employee']);
    }

    public function addImportCsv()
    {
        //$filepath = $_FILES['file']['tmp_name'];
        if($_FILES['file']['tmp_name']<>""){
            $file = new SplFileObject($_FILES['file']['tmp_name']); 
            $file->setFlags(SplFileObject::READ_CSV);
        }
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
            
            $employeesTable = TableRegistry::get('Employees');
            $employee = $employeesTable->newEntity();
            $i = 0;
            foreach ( $line as $line_key => $str ) {
                if( $i == 0 ){
                    $employee->emp_code = mb_convert_encoding($str, "UTF-8", "auto");
                }elseif( $i == 1 ){
                    $employee->f_name = mb_convert_encoding($str, "UTF-8", "auto");
                }elseif( $i == 2 ){
                    $employee->l_name = mb_convert_encoding($str, "UTF-8", "auto");
                }elseif( $i ==3 ){
                    $employee->email = mb_convert_encoding($str, "UTF-8", "auto");
                }
                $i++;
            }
            if ($employeesTable->save($employee)) {
                // $article エンティティーは今や id を持っています
                $id = $employee->id;
            }
            $count ++;
        }
 
        $this->set('value',$id);
        $this->set(compact('employee'));
        $this->set('_serialize', ['employee']);        
    }


    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set(compact('employee'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
