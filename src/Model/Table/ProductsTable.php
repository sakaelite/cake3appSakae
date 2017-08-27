<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\PsTable|\Cake\ORM\Association\BelongsTo $Ps
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\GradesTable|\Cake\ORM\Association\BelongsTo $Grades
 * @property \App\Model\Table\ColorsTable|\Cake\ORM\Association\BelongsTo $Colors
 * @property \App\Model\Table\CreatedEmpsTable|\Cake\ORM\Association\BelongsTo $CreatedEmps
 * @property \App\Model\Table\UpdatedEmpsTable|\Cake\ORM\Association\BelongsTo $UpdatedEmps
 * @property \App\Model\Table\KatakouzousTable|\Cake\ORM\Association\HasMany $Katakouzous
 * @property \App\Model\Table\KensahyouHeadsTable|\Cake\ORM\Association\HasMany $KensahyouHeads
 * @property \App\Model\Table\KonpousTable|\Cake\ORM\Association\HasMany $Konpous
 * @property \App\Model\Table\LabelInsideoutsTable|\Cake\ORM\Association\HasMany $LabelInsideouts
 * @property \App\Model\Table\LabelTypeProductsTable|\Cake\ORM\Association\HasMany $LabelTypeProducts
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ps', [
            'foreignKey' => 'p_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grades', [
            'foreignKey' => 'grade_id'
        ]);
        $this->belongsTo('Colors', [
            'foreignKey' => 'color_id'
        ]);
        $this->belongsTo('CreatedEmps', [
            'foreignKey' => 'created_emp_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UpdatedEmps', [
            'foreignKey' => 'updated_emp_id'
        ]);
        $this->hasMany('Katakouzous', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('KensahyouHeads', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Konpous', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('LabelInsideouts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('LabelTypeProducts', [
            'foreignKey' => 'product_id'
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
            ->numeric('basic_weight')
            ->requirePresence('basic_weight', 'create')
            ->notEmpty('basic_weight');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('torisu')
            ->allowEmpty('torisu');

        $validator
            ->numeric('cycle')
            ->requirePresence('cycle', 'create')
            ->notEmpty('cycle');

        $validator
            ->integer('primary_p')
            ->requirePresence('primary_p', 'create')
            ->notEmpty('primary_p');

        $validator
            ->integer('gaityu')
            ->requirePresence('gaityu', 'create')
            ->notEmpty('gaityu');

        $validator
            ->integer('genjyou')
            ->requirePresence('genjyou', 'create')
            ->notEmpty('genjyou');

        $validator
            ->integer('delete_flag')
            ->requirePresence('delete_flag', 'create')
            ->notEmpty('delete_flag');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

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
        $rules->add($rules->existsIn(['p_id'], 'Ps'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['grade_id'], 'Grades'));
        $rules->add($rules->existsIn(['color_id'], 'Colors'));
        $rules->add($rules->existsIn(['created_emp_id'], 'CreatedEmps'));
        $rules->add($rules->existsIn(['updated_emp_id'], 'UpdatedEmps'));

        return $rules;
    }
}
