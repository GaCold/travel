<?php
namespace App\Controller;

use App\Controller\AppController;


class RolesController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash');
        $this->viewBuilder()->setlayout('frontendadmin');
    }

    public function index(){

        if($this->request->is('post')){
            $keysearch = $this->request->getData();
            $keysearch = $keysearch['keysearch'];
            $roles = $this->Roles->search($keysearch);
        }
        else{
           $roles = $this->paginate($this->Roles);
        }

        $this->set(compact('roles'));
        $this->set('_serialize', ['roles']);

   }


   public function view($id = null){
    $role = $this->Roles->get($id);

    $this->set('role', $role);
    $this->set('_serialize', ['role']);
}


public function add(){
    $role = $this->Roles->newEntity();
    $roles = $this->Roles->find('list', ['limit' => 200]);
    $rolevalue = $this->Roles->max();

    if ($this->request->is('post')) {
        $role = $this->Roles->patchEntity($role, $this->request->getData());
        $role->role_id = $rolevalue;

        if ($this->Roles->save($role)) {
            $this->Flash->success(__('The role has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The role could not be saved. Please, try again.'));
    }

    $this->set(compact('role', 'roles'));
    $this->set('_serialize', ['role']);
    $this->set('rolevalue', $rolevalue);
}


public function edit($id = null){
    $role = $this->Roles->get($id);
    if ($this->request->is(['patch', 'post', 'put'])) {


        $role = $this->Roles->patchEntity($role, $this->request->getData());
        if ($this->Roles->save($role)) {
            $this->Flash->success(__('The role has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The role could not be saved. Please, try again.'));
    }
    $roles = $this->Roles->find('list', ['limit' => 200]);
    $this->set(compact('role', 'Roles'));
    $this->set('_serialize', ['role']);
}


public function delete($id = null){
    $role = $this->Roles->get($id);
    if ($this->Roles->delete($role)) {
        $this->Flash->success(__('The role has been deleted.'));
    } else {
        $this->Flash->error(__('The role could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
}




}
