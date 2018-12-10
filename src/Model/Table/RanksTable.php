<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ranks Model
 *
 * @method \App\Model\Entity\Rank get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rank newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rank[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rank|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rank|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rank patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rank[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rank findOrCreate($search, callable $callback = null, $options = [])
 */
class RanksTable extends Table
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

        $this->setTable('ranks');
        $this->setDisplayField('id_rank');
        $this->setPrimaryKey('id_rank');

        $this->hasMany('Users', [
          'foreignKey' => 'Id_usr', // unnecessary if user_id
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
            ->integer('id_rank')
            ->allowEmpty('id_rank', 'create')
            ->add('id_rank', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('id_usr')
            ->requirePresence('id_usr', 'create')
            ->notEmpty('id_usr')
            ->add('id_usr', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('rnk_overall')
            ->requirePresence('rnk_overall', 'create')
            ->notEmpty('rnk_overall');

        $validator
            ->numeric('rnk_average_per_shoot')
            ->requirePresence('rnk_average_per_shoot', 'create')
            ->notEmpty('rnk_average_per_shoot');

        $validator
            ->integer('rnk_nr_of_shoots')
            ->requirePresence('rnk_nr_of_shoots', 'create')
            ->notEmpty('rnk_nr_of_shoots');

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
        $rules->add($rules->isUnique(['id_rank']));
        $rules->add($rules->isUnique(['id_usr']));

        return $rules;
    }
}
