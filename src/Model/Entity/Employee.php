<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property string $id
 * @property string $emp_id
 * @property string $f_name
 * @property string $l_name
 * @property string $e_add
 * @property int $status_leader
 * @property int $status_emp
 * @property string $created_emp_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property string $updated_emp_id
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\Emp $emp
 * @property \App\Model\Entity\CreatedEmp $created_emp
 * @property \App\Model\Entity\UpdatedEmp $updated_emp
 */
class Employee extends Entity
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
