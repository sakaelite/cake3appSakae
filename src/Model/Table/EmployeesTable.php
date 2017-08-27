<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\EmpsTable|\Cake\ORM\Association\BelongsTo $Emps
 * @property \App\Model\Table\CreatedEmpsTable|\Cake\ORM\Association\BelongsTo $CreatedEmps
 * @property \App\Model\Table\UpdatedEmpsTable|\Cake\ORM\Association\BelongsTo $UpdatedEmps
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Emps', [
            'foreignKey' => 'emp_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CreatedEmps', [
            'foreignKey' => 'created_emp_id'
        ]);
        $this->belongsTo('UpdatedEmps', [
            'foreignKey' => 'updated_emp_id'
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
            ->allowEmpty('f_name');

        $validator
            ->allowEmpty('l_name');

        $validator
            ->allowEmpty('e_add');

        $validator
            ->integer('status_leader')
            ->allowEmpty('status_leader');

        $validator
            ->integer('status_emp')
            ->allowEmpty('status_emp');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

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
        $rules->add($rules->existsIn(['emp_id'], 'Emps'));
        $rules->add($rules->existsIn(['created_emp_id'], 'CreatedEmps'));
        $rules->add($rules->existsIn(['updated_emp_id'], 'UpdatedEmps'));

        return $rules;
    }
}
