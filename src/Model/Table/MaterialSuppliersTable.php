<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialSuppliers Model
 *
 * @property \App\Model\Table\MaterialsTable|\Cake\ORM\Association\HasMany $Materials
 *
 * @method \App\Model\Entity\MaterialSupplier get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialSupplier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaterialSupplier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialSupplier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialSupplier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialSupplier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialSupplier findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialSuppliersTable extends Table
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

        $this->setTable('material_suppliers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp',[
                                        'events' => [
                                                        'Model.beforeSave' => [
                                                                                    'created_at' => 'new',
                                                                                    'updated_at' => 'existing'
                                                                                ]
                                                    ]
                            ]);
                            
        $this->hasMany('Materials', [
            'foreignKey' => 'material_supplier_id'
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
            ->integer('supplier_code')
            ->allowEmpty('supplier_code');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('tel');

        $validator
            ->allowEmpty('fax');

        $validator
            ->allowEmpty('charge_p');

        $validator
            ->integer('delete_flag')
            ->allowEmpty('delete_flag');

        $validator
            ->allowEmpty('created_emp_code');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->allowEmpty('updated_emp_code');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        return $validator;
    }
}
