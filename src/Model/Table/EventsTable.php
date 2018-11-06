<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('id_event');
        $this->setPrimaryKey('id_event');
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
            ->integer('id_event')
            ->allowEmpty('id_event', 'create')
            ->add('id_event', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('evn_name')
            ->maxLength('evn_name', 40)
            ->requirePresence('evn_name', 'create')
            ->notEmpty('evn_name');

        $validator
            ->integer('evn_flag')
            ->requirePresence('evn_flag', 'create')
            ->notEmpty('evn_flag');

        $validator
            ->scalar('evn_description')
            ->maxLength('evn_description', 512)
            ->allowEmpty('evn_description');

        $validator
            ->dateTime('evn_date')
            ->requirePresence('evn_date', 'create')
            ->notEmpty('evn_date');

        $validator
            ->dateTime('evn_end_date')
            ->requirePresence('evn_end_date', 'create')
            ->notEmpty('evn_end_date');

        $validator
            ->scalar('evn_path')
            ->maxLength('evn_path', 128)
            ->requirePresence('evn_path', 'create')
            ->notEmpty('evn_path');

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
        $rules->add($rules->isUnique(['id_event']));

        return $rules;
    }
}
