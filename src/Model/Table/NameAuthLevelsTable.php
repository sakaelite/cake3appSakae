<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NameAuthLevels Model
 *
 * @method \App\Model\Entity\NameAuthLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\NameAuthLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NameAuthLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NameAuthLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NameAuthLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NameAuthLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NameAuthLevel findOrCreate($search, callable $callback = null, $options = [])
 */
class NameAuthLevelsTable extends Table
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

        $this->setTable('name_auth_levels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp',[
                                        'events' => [
                                                        'Model.beforeSave' => [
                                                                                    'created_at' => 'new',
                                                                                    'updated_at' => 'existing'
                                                                                ]
                                                    ]
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->integer('level1')
            ->allowEmpty('level1');

        $validator
            ->integer('level2')
            ->allowEmpty('level2');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        return $validator;
    }
}
