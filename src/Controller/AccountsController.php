<?php
namespace App\Controller;
use App\Controller\AppController;


class AccountsController extends AppController{

// account for user
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash');
        $this->viewBuilder()->setlayout('frontend');
    }

    public function view($id = null) {
        $account = $this->Accounts->get($id, [
            'contain' => ['Roles']
            ]);
        $gender = $this->Accounts->getsex();


        $this->set('account', $account);
        $this->set('gender', $gender);
        $this->set('_serialize', ['account']);
    }



    public function edit($id = null) {

if(isset($_POST['id'])){
    echo $_POST['id'];
    exit();
}
    

        $account = $this->Accounts->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'view', $id=1]);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }
        $roles = $this->Accounts->Roles->find('list', ['limit' => 200]);
        $this->set(compact('account', 'roles'));
        $this->set('_serialize', ['account']);
    }


    


/******************************* account for admin **********************/

    public function adminindex(){
        $this->paginate = [
            'contain' => ['Roles']
        ];

        if($this->request->is('post')){
            $keysearch = $this->request->getData();
            $keysearch = $keysearch['keysearch'];
            $accounts = $this->Accounts->search($keysearch);
        }
        else{
            $accounts = $this->paginate($this->Accounts);
        }
        

        
        $gender  = $this->Accounts->getsex();

        $this->set(compact('accounts'));
        $this->set('_serialize', ['accounts']);
        $this->set('gender', $gender);

        $this->viewBuilder()->setlayout('frontendadmin');
        $this->render('admin/index');
    }



    public function adminview($id = null){
        $account = $this->Accounts->get($id, [
            'contain' => ['Roles']
            ]);
        $gender = $this->Accounts->getsex();
        $this->set('account', $account);
        $this->set('_serialize', ['account']);

        $this->set('gender', $gender);
        $this->viewBuilder()->setlayout('frontendadmin');
        $this->render('admin/view');
    }



    public function adminedit($id = null) {

        $account = $this->Accounts->get($id, [
            'contain' => ['Roles']
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'admin']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }

        $roles = $this->Accounts->Roles->find('list', ['limit' => 200]);
        $gender = $this->Accounts->getsex();
        $role_count = $this->countroles();

        $this->set(compact('account', 'roles'));
        $this->set('_serialize', ['account']);
        $this->set('gender', $gender);
        $this->set('role_count', $role_count);

        $this->viewBuilder()->setlayout('frontendadmin');
        $this->render('admin/edit');
    }




    public function adminadd() {
        $account = $this->Accounts->newEntity();
        $roles = $this->Accounts->Roles->find('list', ['limit' => 200]);
        $role_count = $this->countroles();
        $gender = $this->Accounts->getsex();
        $max_account_id = $this->Accounts->max_account_id();

        if ($this->request->is('post')) {

            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            $account->account_id = $max_account_id;

            echo "id_".$account->account_id."<br>";
            echo "first_".$account->firstname."<br>";
            echo "last_".$account->lastname."<br>";
            echo "role_".$account->role_id."<br>";
            echo $account->email."<br>";
            echo "card_".$account->card."<br>";
            echo "phone_".$account->phone."<br>";
            echo "pass_".$account->password."<br>";
            echo "address_".$account->address."<br>";
            echo "address_".$account->birthday."<br>";
            
            echo "sex_".$account->sex."<br>";
            if($account->active)
                echo "active_".$account->active."<br>";
            else
                echo "string";
            echo "code_".$account->code."<br>";
           // exit();

            if ($this->Accounts->save($account)) {
                $this->Flash->success(__('The account has been saved.'));

                return $this->redirect(['action' => 'admin']);
            }
            $this->Flash->error(__('The account could not be saved. Please, try again.'));
        }

        $this->set('role_count', $role_count);
        $this->set('gender', $gender);
        $this->set('max_account_id', $max_account_id);

        $this->set(compact('account', 'roles'));
        $this->set('_serialize', ['account']);

        $this->viewBuilder()->setlayout('frontendadmin');
        $this->render('admin/add');
    }



    



    public function countroles(){
        $role_count = $this->Accounts->Roles->find()->all();
        return $role_count;
    }


    public function login(){
        
    }

}
