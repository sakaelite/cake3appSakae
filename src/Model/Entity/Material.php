<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Material Entity
 *
 * @property string $id
 * @property string $grade
 * @property string $color_num
 * @property \Cake\I18n\FrozenDate $tourokubi
 * @property float $price
 * @property int $lot_low
 * @property int $lot_upper
 * @property string $material_supplier_id
 * @property int $delete_flag
 * @property string $created_emp_code
 * @property \Cake\I18n\FrozenTime $created_at
 * @property string $updated_emp_code
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\MaterialSupplier $material_supplier
 * @property \App\Model\Entity\Product[] $products
 */
class Material extends Entity
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
