<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserSections Model
 *
 * @method \App\Model\Entity\UserSection get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserSection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserSection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserSection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserSection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserSection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserSection findOrCreate($search, callable $callback = null, $options = [])
 */
class UserSectionsTable extends Table
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

        $this->setTable('user_sections');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('section_name', 'create')
            ->notEmpty('section_name');

        $validator
            ->integer('section_level')
            ->requirePresence('section_level', 'create')
            ->notEmpty('section_level');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        return $validator;
    }
}
