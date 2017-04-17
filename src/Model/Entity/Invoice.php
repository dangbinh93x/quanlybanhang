<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $ID
 * @property int $customer_id
 * @property int $product_id
 * @property int $amount
 * @property int $discount
 * @property int $total
 * @property \Cake\I18n\Time $order_time
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product $product
 */
class Invoice extends Entity
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
        'ID' => false
    ];
}
