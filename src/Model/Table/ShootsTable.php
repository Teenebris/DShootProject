<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shoots Model
 *
 * @method \App\Model\Entity\Shoot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shoot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shoot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shoot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoot|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shoot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shoot findOrCreate($search, callable $callback = null, $options = [])
 */
class ShootsTable extends Table
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

        $this->setTable('shoots');
        $this->setDisplayField('id_shoot');
        $this->setPrimaryKey('id_shoot');

        $this->belongsToMany('Streaks', [
              'foreignKey' => 'Id_streak',
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
            ->integer('id_shoot')
            ->allowEmpty('id_shoot', 'create')
            ->add('id_shoot', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_streak')
            ->requirePresence('id_streak', 'create')
            ->notEmpty('id_streak');

        $validator
            ->integer('sht_value')
            ->requirePresence('sht_value', 'create')
            ->notEmpty('sht_value');

        $validator
            ->numeric('sht_x')
            ->requirePresence('sht_x', 'create')
            ->notEmpty('sht_x');

        $validator
            ->numeric('sht_y')
            ->requirePresence('sht_y', 'create')
            ->notEmpty('sht_y');

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
        $rules->add($rules->isUnique(['id_shoot']));

        return $rules;
    }
}
