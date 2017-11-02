<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class RolesTable extends Table{

    
    public function initialize(array $config){
        parent::initialize($config);

        $this->setTable('roles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('role_id');

    }


    public function validationDefault(Validator $validator){
        
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }

    public function buildRules(RulesChecker $rules){
      //  $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }

    public function max(){
        $rolevalue = $this->find()->max('role_id');

        return $rolevalue->role_id + 1;
    }

    public function search($search_string){
        
        $query = $this->find()
        ->where([
            'OR' => [
                ['name like'=>'%'.$search_string.'%'],
                ['role_id'  =>$search_string]
            ]
        ]);

        return $query;
    }
}
