<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UsersController extends AppController {

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);       
    }

     public function initialize()
     {
         parent::initialize();
         $this->NameAuthLevels = TableRegistry::get('name_auth_levels');
         
    }
    
     public function index()
     {
        $this->set('users', $this->Users->find('all'));
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }

        $arrNameAuthLevels = $this->NameAuthLevels->find('all')->order(['level1' => 'ASC'])->order(['level2' => 'ASC']);
        
        $arr = array();
        foreach ($arrNameAuthLevels as $value) {
      
            $arr[] = array($value->id=>$value->name);
        }
        
        $this->set('user', $user);
        $this->set('arr',$arr);
        $this->set('arrNameAuthLevels',$arrNameAuthLevels);
    }
}