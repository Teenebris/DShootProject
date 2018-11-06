<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Streaks Model
 *
 * @method \App\Model\Entity\Streak get($primaryKey, $options = [])
 * @method \App\Model\Entity\Streak newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Streak[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Streak|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Streak|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Streak patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Streak[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Streak findOrCreate($search, callable $callback = null, $options = [])
 */
class StreaksTable extends Table
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

        $this->setTable('streaks');
        $this->setDisplayField('id_streak');
        $this->setPrimaryKey('id_streak');
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
            ->integer('id_streak')
            ->allowEmpty('id_streak', 'create')
            ->add('id_streak', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_weapon')
            ->requirePresence('id_weapon', 'create')
            ->notEmpty('id_weapon');

        $validator
            ->integer('id_usr')
            ->requirePresence('id_usr', 'create')
            ->notEmpty('id_usr');

        $validator
            ->integer('id_lane')
            ->requirePresence('id_lane', 'create')
            ->notEmpty('id_lane');

        $validator
            ->integer('id_target')
            ->requirePresence('id_target', 'create')
            ->notEmpty('id_target');

        $validator
            ->dateTime('str_date')
            ->requirePresence('str_date', 'create')
            ->notEmpty('str_date');

        $validator
            ->integer('str_amount')
            ->requirePresence('str_amount', 'create')
            ->notEmpty('str_amount');

        $validator
            ->numeric('str_range')
            ->requirePresence('str_range', 'create')
            ->notEmpty('str_range');

        $validator
            ->requirePresence('str_mode', 'create')
            ->notEmpty('str_mode');

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
        $rules->add($rules->isUnique(['id_streak']));

        return $rules;
    }
}
