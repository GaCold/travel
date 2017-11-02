<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccountsTable extends Table{


    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('accounts');
        $this->setDisplayField('account_firstname');
        $this->setPrimaryKey('account_id');

        
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'LEFT'
            ]);
    }


    public function validationDefault(Validator $validator){
        $validator
        ->requirePresence('firstname', 'create')
        ->notEmpty('firstname');

        $validator
        ->requirePresence('lastname', 'create')
        ->notEmpty('lastname');

        $validator
        ->integer('sex')
        ->allowEmpty('sex');

        $validator
        ->date('birthday')
        ->allowEmpty('birthday');

        $validator
        ->email('email')
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->allowEmpty('card');

        $validator
        ->allowEmpty('phone');

        $validator
        ->requirePresence('password', 'create')
        ->notEmpty('password');

        $validator
        ->allowEmpty('address');

        $validator
        ->boolean('active')
        ->requirePresence('active', 'create')
        ->notEmpty('active');

        $validator
        ->allowEmpty('code');
        
        return $validator;
    }

    
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }

    // set gioi tinh cua nguoi dung
    public function getsex(){
        $gender = array('0'=>'Nữ', '1'=>'Nam', '2'=>'Khác');
        return $gender;
    }

    // tim kiem thong tin nguoi dung
    public function search($keysearch){
        $query = $this->find()
        ->contain(['Roles'])
        ->where([
            'OR' => [
                ['firstname like' => '%'.$keysearch.'%'],    
                ['address like'  => '%'.$keysearch.'$'],
                ['Roles.name like' => '%'.$keysearch.'%']
            ],
        ])
        ->all();
        
        return $query;
    }

    public function max_account_id(){
        $query = $this->find()->max('account_id');

        return $query->account_id + 1;
    }

}
