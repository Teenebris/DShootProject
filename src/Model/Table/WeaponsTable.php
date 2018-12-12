<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Weapons Model
 *
 * @method \App\Model\Entity\Weapon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Weapon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Weapon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Weapon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Weapon|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Weapon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Weapon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Weapon findOrCreate($search, callable $callback = null, $options = [])
 */
class WeaponsTable extends Table
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

        $this->setTable('weapons');
        $this->setDisplayField('id_weapon');
        $this->setPrimaryKey('id_weapon');

        $this->hasMany('Streaks')
            ->setForeignKey('id_weapon');
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
            ->integer('id_weapon')
            ->allowEmpty('id_weapon', 'create')
            ->add('id_weapon', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_usr')
            ->requirePresence('id_usr', 'create')
            ->notEmpty('id_usr');

        $validator
            ->scalar('wpn_sr_number')
            ->maxLength('wpn_sr_number', 30)
            ->requirePresence('wpn_sr_number', 'create')
            ->notEmpty('wpn_sr_number');

        $validator
            ->scalar('wpn_type')
            ->maxLength('wpn_type', 20)
            ->requirePresence('wpn_type', 'create')
            ->notEmpty('wpn_type');

        $validator
            ->scalar('wpn_caliber')
            ->maxLength('wpn_caliber', 20)
            ->requirePresence('wpn_caliber', 'create')
            ->notEmpty('wpn_caliber');

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
        $rules->add($rules->isUnique(['id_weapon']));

        return $rules;
    }
}
