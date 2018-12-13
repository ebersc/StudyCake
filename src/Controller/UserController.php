<?php

namespace App\Controller;

use App\Controller\AppController;
use \App\Model\Entity\User;
use \Cake\Utility\Security;
use Cake\Log\Log;

/**
 * User Controller
 *
 * @property \App\Model\Table\UserTable $User
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
//        $session = $this->request->getSession();
//        $session = new \Cake\Http\Session;
//        
//        debug($session->read()['Auth']['User']);
//        debug($session->read('Auth.User'));
//        $session->write('teste.teste2', 'teste3');
//        $session->write('teste1.teste1', 'teste2');
//        $session->delete('teste');
        
//        $session->destroy(); //destroy  a sessão atual
//        debug($session->consume('teste1'));
//        exit();
        
//        $this->Cookie->write('APP.msg', 'Olá mundo');
//        $cookie = $this->Cookie->read('APP');
//        debug($cookie);       
        
        $user = $this->paginate($this->User);

        $this->set(compact('user'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->User->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->User->newEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->User->get($id, [
            'contain' => []
        ]);
        $user->unsetProperty('password');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->User->get($id);
        if ($this->User->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {
        
        //Log::emergency('Ocorreu um grave erro');
        //$this->log('mensagem', 'debug');
        
        $this->log('Log em user.log', 'error', 'user');
        
        if ($this->request->is('post')) {

            $dados = $this->request->getData();
            $user = $this->User->find('all')
                    ->where(['email' => $dados['email']])
                    ->where(['password' => $entity->password = Security::hash($dados['password'], 'sha256')])
                    ->first();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error('Email ou senha invalidos!');
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
