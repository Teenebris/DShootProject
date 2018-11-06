<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('Id_usr');
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
            ->integer('Id_usr')
            ->allowEmpty('Id_usr', 'create')
            ->add('Id_usr', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('mail')
            ->maxLength('mail', 64)
            ->requirePresence('mail', 'create')
            ->notEmpty('mail')
            ->add('mail', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('username')
            ->maxLength('username', 32)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('name')
            ->maxLength('name', 80)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address_country')
            ->maxLength('address_country', 40)
            ->allowEmpty('address_country');

        $validator
            ->scalar('address_city')
            ->maxLength('address_city', 40)
            ->allowEmpty('address_city');

        $validator
            ->scalar('address_street')
            ->maxLength('address_street', 40)
            ->allowEmpty('address_street');

        $validator
            ->scalar('address_house')
            ->maxLength('address_house', 5)
            ->allowEmpty('address_house');

        $validator
            ->scalar('address_falt_nr')
            ->maxLength('address_falt_nr', 5)
            ->allowEmpty('address_falt_nr');

        $validator
            ->scalar('numer_licencji')
            ->maxLength('numer_licencji', 30)
            ->allowEmpty('numer_licencji')
            ->add('numer_licencji', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('role', 'create')
            ->allowEmpty('role');

        $validator
            ->integer('id_group')
            ->allowEmpty('id_group');

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
        $rules->add($rules->isUnique(['mail']));
        $rules->add($rules->isUnique(['Id_usr']));
        $rules->add($rules->isUnique(['numer_licencji']));

        return $rules;
    }

}
