<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reservations Model
 *
 * @method \App\Model\Entity\Reservation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reservation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reservation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reservation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation findOrCreate($search, callable $callback = null, $options = [])
 */
class ReservationsTable extends Table
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

        $this->setTable('reservations');
        $this->setDisplayField('id_reservation');
        $this->setPrimaryKey('id_reservation');
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
            ->integer('id_reservation')
            ->allowEmpty('id_reservation', 'create')
            ->add('id_reservation', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        $validator
            ->dateTime('res_date_start')
            ->requirePresence('res_date_start', 'create')
            ->notEmpty('res_date_start');

        $validator
            ->dateTime('res_date_end')
            ->requirePresence('res_date_end', 'create')
            ->notEmpty('res_date_end');

        $validator
            ->numeric('res_price')
            ->requirePresence('res_price', 'create')
            ->notEmpty('res_price');

        $validator
            ->requirePresence('res_status', 'create')
            ->notEmpty('res_status');

        $validator
            ->integer('res_n_axis')
            ->requirePresence('res_n_axis', 'create')
            ->notEmpty('res_n_axis');

        $validator
            ->integer('id_lane')
            ->requirePresence('id_lane', 'create')
            ->notEmpty('id_lane');

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
        $rules->add($rules->isUnique(['id_reservation']));

        return $rules;
    }
}
