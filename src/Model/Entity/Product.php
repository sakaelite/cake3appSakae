<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property string $id
 * @property string $p_id
 * @property string $name
 * @property float $basic_weight
 * @property int $price
 * @property string $customer_id
 * @property string $grade_id
 * @property string $color_id
 * @property int $torisu
 * @property float $cycle
 * @property int $primary_p
 * @property int $gaityu
 * @property int $genjyou
 * @property int $delete_flag
 * @property string $created_emp_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property string $updated_emp_id
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\P $p
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Grade $grade
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\CreatedEmp $created_emp
 * @property \App\Model\Entity\UpdatedEmp $updated_emp
 * @property \App\Model\Entity\Katakouzous[] $katakouzous
 * @property \App\Model\Entity\KensahyouHead[] $kensahyou_heads
 * @property \App\Model\Entity\Konpous[] $konpous
 * @property \App\Model\Entity\LabelInsideout[] $label_insideouts
 * @property \App\Model\Entity\LabelTypeProduct[] $label_type_products
 */
class Product extends Entity
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
