<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialSupplier Entity
 *
 * @property int $id
 * @property int $sup_id
 * @property string $sup_name
 * @property int $handy_id
 * @property string $address
 * @property string $tel
 * @property string $fax
 * @property string $charge_p
 * @property int $delete_flag
 * @property string $created_emp_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property string $updated_emp_id
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\Sup $sup
 * @property \App\Model\Entity\Handy $handy
 * @property \App\Model\Entity\CreatedEmp $created_emp
 * @property \App\Model\Entity\UpdatedEmp $updated_emp
 * @property \App\Model\Entity\Material[] $materials
 */
class MaterialSupplier extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
