<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tours Model
 *
 * @property \App\Model\Table\ToursTable|\Cake\ORM\Association\BelongsTo $Tours
 * @property \App\Model\Table\TypetoursTable|\Cake\ORM\Association\BelongsTo $Typetours
 *
 * @method \App\Model\Entity\Tour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tour findOrCreate($search, callable $callback = null, $options = [])
 */
class ToursTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tours');
        $this->setDisplayField('tour_id');
        $this->setPrimaryKey('tour_id');

        $this->belongsTo('Typetours', [
            'foreignKey' => 'loaitour_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('tour_ten', 'create')
            ->notEmpty('tour_ten');

        $validator
            ->requirePresence('tour_thongtintongquat', 'create')
            ->notEmpty('tour_thongtintongquat');

        $validator
            ->date('tour_ngaydi')
            ->requirePresence('tour_ngaydi', 'create')
            ->notEmpty('tour_ngaydi');

        $validator
            ->integer('tour_songaydi')
            ->requirePresence('tour_songaydi', 'create')
            ->notEmpty('tour_songaydi');

        $validator
            ->integer('tour_diemdi')
            ->requirePresence('tour_diemdi', 'create')
            ->notEmpty('tour_diemdi');

        $validator
            ->integer('tour_diemden')
            ->requirePresence('tour_diemden', 'create')
            ->notEmpty('tour_diemden');

        $validator
            ->integer('tour_soluongtrenho')
            ->allowEmpty('tour_soluongtrenho');

        $validator
            ->integer('tour_soluongtreem')
            ->allowEmpty('tour_soluongtreem');

        $validator
            ->integer('tour_soluongnguoilon')
            ->requirePresence('tour_soluongnguoilon', 'create')
            ->notEmpty('tour_soluongnguoilon');

        $validator
            ->integer('tour_dathdv')
            ->allowEmpty('tour_dathdv');

        $validator
            ->integer('tour_tientt')
            ->allowEmpty('tour_tientt');

        $validator
            ->allowEmpty('tour_hot');

        $validator
            ->integer('tour_trangthai')
            ->allowEmpty('tour_trangthai');

        $validator
            ->date('tour_thoihandk')
            ->allowEmpty('tour_thoihandk');

        $validator
            ->boolean('tour_status')
            ->requirePresence('tour_status', 'create')
            ->notEmpty('tour_status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['loaitour_id'], 'Typetours'));

        return $rules;
    }
}
